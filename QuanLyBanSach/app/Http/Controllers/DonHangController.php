<?php

namespace App\Http\Controllers;
use App\Models\donhang;
use App\Models\chitietdonhang;
use App\Models\chitietkho;
use Illuminate\Http\Request;
use App\Models\hoadonban;
use App\Models\chitiethoadonabn;
use Illuminate\Support\Facades\DB;

class DonHangController extends Controller
{
    public function hienthi()
    {
        $donhang = DB::table('donhang')->join('chitietdonhang', 'donhang.maDonHang', '=', 'chitietdonhang.maDonHang')
        ->join('sanpham', 'chitietdonhang.sanp_id', '=', 'sanpham.sanp_id')->join('khachhang', 'donhang.maKhachHang', '=', 'khachhang.maKhachHang')
        ->select('sanpham.sanp_name', 'sanpham.sanp_id', 'donhang.maKhachHang','trangThaiThanhToan', 'donhang.maDonHang', 'ngayDat', 'trangThai', 'maChiTietDonHang', 'soLuong', 'gia',
        'khachhang.tenKhachHang')->groupBy('sanpham.sanp_name','sanpham.sanp_id','trangThaiThanhToan', 'donhang.maKhachHang', 'donhang.maDonHang', 'ngayDat', 'trangThai', 'maChiTietDonHang', 'soLuong', 'gia',
        'khachhang.tenKhachHang')->orderBy('donhang.maDonHang', 'desc')->get();
        return view('Admin.donhang.hienthi',['donhang'=>$donhang]);
    }
    public function chitietdonhang($id)
    {
        $khachhang = DB::table('donhang')->join('khachhang', 'donhang.maKhachHang','=','khachhang.maKhachHang')
        ->select('tenKhachHang', 'sdt', 'diaChi', 'email')->where('donhang.maDonHang', '=', $id)->first();

        $donhang = DB::table('donhang')->join('chitietdonhang', 'donhang.maDonHang', '=', 'chitietdonhang.maDonHang')
        ->join('sanpham', 'chitietdonhang.sanp_id', '=', 'sanpham.sanp_id')->join('khachhang', 'donhang.maKhachHang', '=', 'khachhang.maKhachHang')
        ->select('sanpham.sanp_name', 'donhang.maDonHang', 'ngayDat', 'trangThai', 'maChiTietDonHang', 'soLuong', 'gia',
        'khachhang.tenKhachHang')->groupBy('sanpham.sanp_name', 'maDonHang', 'ngayDat', 'trangThai', 'maChiTietDonHang', 'soLuong', 'gia',
        'khachhang.tenKhachHang')->where('donhang.maDonHang', '=', $id)->get();
        return view('Admin.donhang.chitiet',['donhang'=>$donhang, 'khachhang'=>$khachhang]);
    }
    public function updatechitiet(Request $request, $id)
    {
        $chitietdonhang = chitietdonhang::find($id);
        return response()->json(['data'=>$chitietdonhang]);
    }
    public function add($id)
    {
        $donhang = DB::table('donhang')->where('maDonHang', '=', $id)->first();
        
        $hdb = new hoadonban();
        $hdb->maKhachHang = $donhang->maKhachHang;
        $hdb->ngayBan = $donhang->ngayDat;
        $hdb->soHoaDon = $id;
        $hdb->giaTien = $donhang->giaTien;
        $hdb->save();
        $ctks = DB::table('chitietdonhang')->where('maDonHang', '=', $id)->get();
        foreach ($ctks as $ctk)
        {
             $cthdb = new chitiethoadonabn();
             $cthdb->soHoaDon = $hdb->soHoaDon;
             $cthdb->giaBan = $ctk->gia;
             $cthdb->sanp_id =  $ctk->sanp_id;
             $cthdb->soLuong = $ctk->soLuong;
             $cthdb->save();
        }
        return redirect()->route('donhang.hienthi');
    }
    public function xacthuc($id)
    {
       
        $ctks = DB::table('chitietdonhang')->where('maDonHang', '=', $id)->get();
        foreach ($ctks as $ctk)
        {
             $kho = DB::table('chitietkho')->where('sanp_id', $ctk->sanp_id )->decrement('soLuong', $ctk->soLuong);
        }
        // $ctks->trangThai = "Đã xác thực";
        DB::table('donhang')->where('maDonHang', '=', $id)->update(['trangThai'=>'Đã xác thực']);
        return redirect()->route('donhang.hienthi');


        // $sl = DB::table('chitietkho')->where('sanp_id', '=', $id)->value('soLuong');
        // $sll = intval($sl);
        // $newsl = ($sll - $soluong);
        // DB::table('chitietkho')
        // ->where('sanp_id', $id)
        // ->update([ 'soLuong' => $newsl]);
        return redirect()->route('donhang.hienthi');
    }

    public function editchitiet(Request $req)
    {
        $id = $req->id;
        $ctdonhang = chitietdonhang::find($id);
        $ctdonhang->sanp_id = $req->name;
        $ctdonhang->soLuong = $req->soLuong;
        $ctdonhang->gia = $req->gia;
        $ctdonhang->save();
        return redirect()->route('donhang.hienthi');
    }
    public function delete($id)
    {
         $ct = DB::table('chitietdonhang')->where('maDonHang', '=', $id)->delete();
        $donhang = donhang::find($id)->delete();
       
        return redirect('/donhang');
    }
    public function deletechitiet($id)
    {
       
        $ct = chitietdonhang::find($id)->delete();
       
        return redirect('/donhang');
    }
}
