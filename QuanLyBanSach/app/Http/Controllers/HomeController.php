<?php

namespace App\Http\Controllers;
use App\Models\danhmucs;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    // public function __construct()
    // {
    // //its just a dummy data object.
    //     $danhmucs = danhmucs::all();

    // // Sharing is caring
    //     View::share('danhmuc', $danhmucs);
    // }
    public function Index()
    {
        $sachmoi = DB::table('sanpham')->join('giaca','sanpham.sanp_id', '=', 'giaca.sanp_id')
        ->select('sanpham.sanp_id', 'sanpham.image', 'sanpham.sanp_name', 'sanpham.tg_id',
        'sanpham.nsx_id', 'sanpham.soTrang', 'sanpham.tomtat', 'sanpham.size', 'sanpham.namsx',
         'giaca.gia')->orderBy('namsx', 'desc')->get()->take(10);
        
        $banchay = DB::table('chitiethoadonban')->join('sanpham', 'sanpham.sanp_id', '=', 'chitiethoadonban.sanp_id')
        ->join('giaca', 'sanpham.sanp_id', '=', 'giaca.sanp_id')

        ->select('sanpham.sanp_id', 'sanpham.image', 'sanpham.sanp_name','giaca.gia', 
        'sanpham.tg_id','sanpham.nsx_id', 'sanpham.soTrang', 'sanpham.tomtat', 'sanpham.size', 'sanpham.namsx', DB::raw('SUM(chitiethoadonban.SoLuong) as SL'))
        
        ->groupBy('sanp_id', 'gia', 'sanp_name', 'size', 'tg_id', 'loai_id', 'nsx_id', 'soTrang', 'tomtat',
	'namsx', 'image')->orderBy('SL', 'desc')->get()->take(10);

        $vanhocvietnam = DB::table('sanpham')->join('giaca','sanpham.sanp_id', '=', 'giaca.sanp_id')
        ->select('sanpham.sanp_id', 'sanpham.image', 'sanpham.sanp_name', 'sanpham.tg_id',
        'sanpham.nsx_id', 'sanpham.soTrang', 'sanpham.tomtat', 'sanpham.size', 'sanpham.namsx',
         'giaca.gia')
        ->where('loai_id', '=', 5)->get()->take(10);

        $vanhocnuocngoai = DB::table('sanpham')->join('giaca','sanpham.sanp_id', '=', 'giaca.sanp_id')
        ->select('sanpham.sanp_id', 'sanpham.image', 'sanpham.sanp_name', 'sanpham.tg_id',
        'sanpham.nsx_id', 'sanpham.soTrang', 'sanpham.tomtat', 'sanpham.size', 'sanpham.namsx',
         'giaca.gia')->where('loai_id', '=', 4)->get()->take(10);

        $sanpham = sanpham::all();
        return View('Home.index', ['sanpham'=>$sanpham, 'sachmoi'=>$sachmoi, 'banchay'=>$banchay, 'vanhocvietnam'=>$vanhocvietnam, 'vanhocnuocngoai'=>$vanhocnuocngoai]);
    }
    public function SanPhamTheoLoai($id)
    {
        $sanpham = DB::table('sanpham')->where('loai_id', '=', $id)->get();
    
        return view('Home.form.danhsachsanphamtheoloai', ['sanpham'=>$sanpham]);
    }
    public function TimKiem(Request $req)
    {
        $tenSanPham = $req->tenSanPham;
        $sanpham = DB::table('sanpham')
        ->join('tg', 'sanpham.tg_id', '=', 'tg.tG_id')->where('sanp_name', 'LIKE','%'.$tenSanPham.'%')
        ->orWhere('tg.tG_name', 'LIKE','%'.$tenSanPham.'%')->get();
       
        return view('Home.form.TimKiem', ['sanpham'=>$sanpham]);
    }
    public function SanPhamChiTiet($id)
    {
        
        // $sanpham = sanpham::find($id);
        $products = DB::table('sanpham')
            ->join('tg', 'tg.tG_id', '=', 'sanpham.tg_id')->join('nhasx', 'nhasx.nsx_id', '=', 'sanpham.nsx_id')->join('giaca', 'giaca.sanp_id', '=', 'sanpham.sanp_id')
            ->select('sanpham.sanp_id', 'image', 'sanp_name', 'tG_name as tG_name','nsx_name', 'soTrang', 'gia', 'tomtat', 'size', 'namsx')->where('sanpham.sanp_id', '=', $id)->first();
        
        return View('Home.form.chitiet', ['sanpham'=>$products]);
    }
    
    // public function cart()
    // {
        

    //     // $danhmucs = danhmucs::all();
        
    //     return view('Home.form.cart');
    // }
    // public function layout()
    // {
        

    //     $danhmucs = danhmucs::all();
        
    //     return view('Home.layoutHome', ['danhmuc'=>$danhmucs]);
    // }
    // public function mainnav()
    // {
        

    //     $danhmucs = danhmucs::all();
        
    //     return view('Home.form.mainnav', ['danhmuc'=>$danhmucs]);
    // }
    
}
