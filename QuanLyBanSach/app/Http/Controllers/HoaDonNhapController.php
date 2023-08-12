<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hoadonnhap;
use App\Models\chitietkho;
use App\Models\chitiethoadonnhap;
class HoaDonNhapController extends Controller
{
    public function hienthi()
    {
        $hdn = hoadonnhap::all();
        return view('Admin.hoadonnhap.hienthi', ['hdn'=>$hdn]);
    }
    public function chitiet($id)
    {
        $hdn = hoadonnhap::find($id);
        // $ct = chitiethoadonnhap::where('soHoaDon', $id);
        $ct = DB::table('chitiethoadonnhap')->join('sanpham', 'chitiethoadonnhap.sanp_id', '=', 'sanpham.sanp_id')->select('sanp_name','maChiTietHoaDonNhap',
        'soHoaDon', 'soLuong', 'donGia')->where('soHoaDon', '=', $id)->get();
        return view('Admin.hoadonnhap.chitiet', ['nv'=>$hdn, 'ct'=>$ct]);
    }
    public function addHoaDonNhap(Request $req)
    {
        $hdn = new hoadonnhap();
        $hdn->ngayNhap = Carbon::now()->toDateString();
        $hdn->maNguoiDung = $req->maNguoiDung;
        $hdn->nsx_id= $req->nsx_id;
        $hdn->save();
         return redirect('/hoadonnhap');
    }
    public function addChiTietHoaDonNhap( Request $req)
    {
        $ct = new chitiethoadonnhap();
        $ct->soHoaDon = $req->soHoaDon;
        $ct->sanp_id = $req->sanp_id;
        $ct->soLuong = $req->soLuong;
        $ct->donGia = $req->donGia;
        $ct->save();
        $kho = DB::table('chitietkho')->where('sanp_id', '=', $ct->sanp_id)->increment('soLuong', $ct->soLuong);
        return redirect('/hoadonnhap');
    }
}
