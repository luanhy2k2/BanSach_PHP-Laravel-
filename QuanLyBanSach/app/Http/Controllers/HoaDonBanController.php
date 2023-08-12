<?php

namespace App\Http\Controllers;
use App\Models\hoadonban;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use App\Models\chitiethoadonabn;
use Illuminate\Support\Facades\DB;

class HoaDonBanController extends Controller
{
    public function hienthi()
    {
        $hoadonban = DB::table('hoadonban')->join('chitiethoadonban', 'hoadonban.soHoaDon', '=', 'chitiethoadonban.soHoaDon')
        ->join('sanpham', 'chitiethoadonban.sanp_id', '=', 'sanpham.sanp_id')->join('khachhang', 'hoadonban.maKhachHang', '=', 'khachhang.maKhachHang')
        ->select('sanpham.sanp_name', 'sanpham.sanp_id', 'hoadonban.maKhachHang', 'hoadonban.soHoaDon', 'ngayBan', 'machitiethoadonban', 'soLuong', 'giaBan','giaTien',
        'khachhang.tenKhachHang')->groupBy('sanpham.sanp_name','sanpham.sanp_id', 'hoadonban.maKhachHang', 'hoadonban.soHoaDon', 'ngayBan', 'machitiethoadonban', 'soLuong', 'giaBan',
        'khachhang.tenKhachHang','giaTien')->get();
        return view('Admin.hoadonban.hienthi',['hoadonban'=>$hoadonban]);
    }
    public function chitiethoadonban($id)
    {
        $khachhang = DB::table('hoadonban')->join('khachhang', 'hoadonban.maKhachHang','=','khachhang.maKhachHang')
        ->select('tenKhachHang', 'sdt', 'diaChi', 'email')->where('hoadonban.soHoaDon', '=', $id)->first();

        $hoadonban = DB::table('hoadonban')->join('chitiethoadonban', 'hoadonban.soHoaDon', '=', 'chitiethoadonban.soHoaDon')
        ->join('sanpham', 'chitiethoadonban.sanp_id', '=', 'sanpham.sanp_id')->join('khachhang', 'hoadonban.maKhachHang', '=', 'khachhang.maKhachHang')
        ->select('sanpham.sanp_name', 'hoadonban.soHoaDon', 'ngayBan', 'maChiTietHoaDonBan', 'soLuong', 'giaBan',
        'khachhang.tenKhachHang')->groupBy('sanpham.sanp_name', 'soHoaDon', 'ngayBan', 'maChiTietHoaDonBan', 'soLuong', 'giaBan',
        'khachhang.tenKhachHang')->where('hoadonban.soHoaDon', '=', $id)->get();
        return view('Admin.hoadonban.chitiet',['hoadonban'=>$hoadonban, 'khachhang'=>$khachhang]);
    }
     public function delete($id)
    {
         $ct = DB::table('chitiethoadonban')->where('soHoaDon', '=', $id)->delete();
        $donhang = hoadonban::find($id)->delete();
       
        return redirect('/donhang');
    }
    public function addHoaDon(Request $request, $id)
    {
        $order          = hoadonban::find($id);
      
        $orderDetails   = chitiethoadonabn::where('soHoaDon', $id)->get();

        $pdf = PDF::loadView('Admin.hoadonban.Prt',[
            'order'=> $order,
            
            'orderDetails'=>$orderDetails
        ])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download("$id.pdf");
//        return $pdf->stream('invoice.pdf');
    }
}
