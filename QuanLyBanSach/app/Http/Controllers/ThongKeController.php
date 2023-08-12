<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\donhang;
use App\Models\hoadonban;
use App\Models\sanpham;

class ThongKeController extends Controller
{
    public function Index()
    {
        $range = Carbon::now()->subDays(30);

        $stats = DB::table('donhang')
        ->where('ngayDat', '>=', $range)
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get([
        DB::raw('Date(ngayDat) as date'),
        DB::raw('COUNT(*) as value')
        ])
        ->toJSON();
      
        $banchay = DB::table('chitiethoadonban')->join('sanpham', 'sanpham.sanp_id', '=', 'chitiethoadonban.sanp_id')
        ->join('giaca', 'sanpham.sanp_id', '=', 'giaca.sanp_id')

        ->select('sanpham.sanp_id', 'sanpham.image', 'sanpham.sanp_name','giaca.gia', 
        'sanpham.tg_id','sanpham.nsx_id', 'sanpham.soTrang', 'sanpham.tomtat', 'sanpham.size', 'sanpham.namsx', DB::raw('SUM(chitiethoadonban.soLuong) as SL'))
       
        
        ->groupBy('sanp_id', 'gia', 'sanp_name', 'size', 'tg_id', 'loai_id', 'nsx_id', 'soTrang', 'tomtat',
	'namsx', 'image')->orderBy('SL', 'desc')->get()->take(10);
        $sodonhang = DB::table('donhang')->count();
        //Tỏng doanh thu
        $giatien = DB::table('hoadonban')->sum('giaTien');

        //Tính số tiền bán được trong ngày
         $ngay_hom_nay = Carbon::now()->toDateString();
        $doanhThuHomNay = hoadonban::where('ngayBan', $ngay_hom_nay)->sum('giaTien');

        //Tính số tiền bán được trong tuần này
        $tu_ngay = Carbon::now()->startOfWeek()->subDay();
        $den_ngay = Carbon::now();
        $doanhthutuan = hoadonban::whereBetween('ngayBan', [$tu_ngay, $den_ngay])->sum('giaTien');

        //Tính số tiền bán được trong tháng này
        $thang_nay = Carbon::now()->startOfMonth();
        $doanhthuthang = hoadonban::whereMonth('ngayBan', $thang_nay->month)->sum('giaTien');


        $spbanduoc = DB::table('chitietdonhang')->sum('sanp_id');
        //tính số đơn đã đặt trong hôm nay
        // $ngay_hom_nay = Carbon::now()->toDateString();
        $so_don_hang_hom_nay = donhang::where('ngayDat', $ngay_hom_nay)->count('maDonHang');

        //tính số đơn đã đặt trong tuần
       
        $so_don_hang_trong_tuan = donhang::whereBetween('ngayDat', [$tu_ngay, $den_ngay])->count('maDonHang');
        //tính số đơn đã đặt trong tháng
       
        $so_don_hang_trong_thang = donhang::whereMonth('ngayDat', $thang_nay->month)->count('maDonHang');

        //Tính tổng số sản phẩm
        $tongsp = DB::table('sanpham')->count('sanp_id');
        //Tính sản phẩm hết hàng
        $sphethang = DB::table('chitietkho')->where('soLuong', '=', 0)->count('sanp_id');


        return view('Admin.ThongKe.Index', ['sodonhang'=>$sodonhang,'sodonhangtrongngay'=>$so_don_hang_hom_nay,
        'sodonhangtrongtuan'=>$so_don_hang_trong_tuan, 'sodonhangtrongthang'=>$so_don_hang_trong_thang,
        'giatien'=>$giatien,'spbanduoc'=>$spbanduoc, 'banchay'=>$banchay, 'doanhthuhomnay'=>$doanhThuHomNay,
        'doanhthutuan'=>$doanhthutuan, 'doanhthuthang'=>$doanhthuthang,
        'tongsp'=>$tongsp, 'sphethang'=>$sphethang]);

       
    }
   
}
