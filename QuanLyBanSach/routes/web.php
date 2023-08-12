<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Carbon\Carbon;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\nguoiDungController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\LoaiSpController;
use App\Http\Controllers\TacGiaController;
use App\Http\Controllers\NhaXuatBanController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\HoaDonBanController;
use App\Http\Controllers\HoaDonNhapController;
use App\Http\Controllers\KhoController;
use App\Http\Controllers\ThongKeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::resource('/danhmuc','DanhMucController');
Route::get('/update/{id}',[DanhMucController::class,"update"])->name('danhmuc.update');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/danhmuc',[DanhMucController::class,"hienthi"])->name('danhmuc.danhmuc');
Route::get('/danhmuc/timkiem',[DanhMucController::class,"hienthi"])->name('danhmuc.timkiem');
Route::get('/danhmuc/delete/',[DanhMucController::class,"destroy"])->name('danhmuc.delte');
Route::get('/danhmuc/destroy/{id}',[DanhMucController::class,"delete"])->name('danhmuc.delete');
Route::get('/danhmuc/add/',[DanhMucController::class,"add"])->name('danhmuc.add');
Route::post('/danhmuc/edit/',[DanhMucController::class,"edit"])->name('danhmuc.edit');
// Route::get('/danhmuc/{id}edit/',[DanhMucController::class,"editview"])->name('danhmuc.editview');
// Route::get('/danhmuc/{id}/formedit/',[DanhMucController::class,"formedit"])->name('danhmuc.formedit');
//loaisp
Route::get('/loaisp',[LoaiSpController::class,"hienthi"])->name('loaisp.hienthi');
Route::get('/loaisp/delete/',[LoaiSpController::class,"destroy"])->name('loaisp.delte');
Route::get('/loaisp/add/',[LoaiSpController::class,"add"])->name('loaisp.add');
Route::get('/loaisp/destroy/{id}',[LoaiSpController::class,"delete"])->name('loaisp.delete');
Route::post('/loaisp/edit/',[LoaiSpController::class,"edit"])->name('loaisp.edit');
Route::get('/loaisp/update/{id}',[LoaiSpController::class,"update"])->name('loaisp.update');

//loaistacgiap
Route::get('/tacgia',[TacGiaController::class,"hienthi"])->name('tacgia.hienthi');
Route::get('/tacgia/delete/',[TacGiaController::class,"destroy"])->name('tacgia.delte');
Route::get('/tacgia/add/',[TacGiaController::class,"add"])->name('tacgia.add');
Route::post('/tacgia/edit/',[TacGiaController::class,"edit"])->name('tacgia.edit');
Route::get('/tacgia/destroy/{id}',[TacGiaController::class,"delete"])->name('tacgia.delete');
Route::get('/tacgia/update/{id}',[TacGiaController::class,"update"])->name('tacgia.update');

//nhasx
Route::get('/nhasx',[NhaXuatBanController::class,"hienthi"])->name('nhasx.hienthi');
Route::get('/nhasx/delete/',[NhaXuatBanController::class,"destroy"])->name('nhasx.delte');
Route::get('/nhasx/add/',[NhaXuatBanController::class,"add"])->name('nhasx.add');
Route::post('/nhasx/edit/',[NhaXuatBanController::class,"edit"])->name('nhasx.edit');
Route::get('/nhasx/update/{id}',[NhaXuatBanController::class,"update"])->name('nhasx.update');
Route::get('/nhasx/destroy/{id}',[NhaXuatBanController::class,"delete"])->name('nhasx.delete');

//kho
Route::get('/kho',[KhoController::class,"hienthi"])->name('kho.hienthi');
Route::get('/kho/delete/',[KhoController::class,"destroy"])->name('kho.delte');
Route::post('/kho/add/',[KhoController::class,"add"])->name('kho.add');
Route::get('/kho/destroy/{id}',[KhoController::class,"delete"])->name('kho.delete');
Route::get('/chitietkho/destroy/{id}',[KhoController::class,"deletechitiet"])->name('chitietkho.delete');
Route::post('/kho/edit/',[KhoController::class,"edit"])->name('kho.edit');
Route::get('/kho/update/{id}',[KhoController::class,"update"])->name('kho.update');
Route::get('/kho/chitietkho/{id}',[KhoController::class,"chitietkho"])->name('kho.detail');
//sanpham
Route::get('/sanpham',[SanPhamController::class,"hienthi"])->name('sanpham.hienthi');
Route::get('/sanpham/delete/',[SanPhamController::class,"destroy"])->name('sanpham.delte');
Route::get('/sanpham/add/',[SanPhamController::class,"add"])->name('sanpham.add');
Route::get('/sanpham/destroy/{id}',[SanPhamController::class,"delete"])->name('sanpham.delete');
Route::post('/sanpham/edit/',[SanPhamController::class,"edit"])->name('sanpham.edit');
Route::get('/sanpham/update/{id}',[SanPhamController::class,"update"])->name('sanpham.update');


//donhang
Route::post('/donhang/edit/',[DonHangController::class,"editchitiet"])->name('chitiet.edit');
Route::get('/donhang',[DonHangController::class,"hienthi"])->name('donhang.hienthi');
Route::get('/xacthuc/{id}',[DonHangController::class,"xacthuc"])->name('donhang.xacthuc');
Route::get('/add/{id}',[DonHangController::class,"add"])->name('donhang.add');
Route::get('/donhang/destroy/{id}',[DonHangController::class,"delete"])->name('donhang.delete');
Route::get('/chitietdonhang/destroy/{id}',[DonHangController::class,"deletechitiet"])->name('chitietdonhang.delete');
Route::get('/donhang/chitiet/{id}',[DonHangController::class,"chitietdonhang"])->name('donhang.chitiet');
Route::get('/chitietdonhang/update/{id}',[DonHangController::class,"updatechitiet"])->name('chitiet.update');

//hoadonban
Route::get('/hoadonban',[HoaDonBanController::class,"hienthi"])->name('hoadonban.hienthi');
Route::get('/addhoadon/{id}',[HoaDonBanController::class,"addHoaDon"])->name('hoadonban.addhoadon');
Route::get('/hoadonban/destroy/{id}',[HoaDonBanController::class,"delete"])->name('hoadonban.delete');
Route::get('/hoadonban/chitiet/{id}',[HoaDonBanController::class,"chitiethoadonban"])->name('hoadonban.chitiet');

//hoadonnhap
Route::get('/hoadonnhap',[HoaDonNhapController::class,"hienthi"])->name('hoadonnhap.hienthi');
Route::get('/chitiethoadonnhap/{id}',[HoaDonNhapController::class,"chitiet"])->name('hoadonnhap.chitiet');
Route::post('/addhoadonnhap',[HoaDonNhapController::class,"addHoaDonNhap"])->name('hoadonnhap.addhoadon');
Route::post('/addchitiethoadonnhap/',[HoaDonNhapController::class,"addChiTietHoaDonNhap"])->name('hoadonnhap.addchitiet');

Route::get('/index',[HomeController::class,"Index"])->name('Index.index');
Route::get('/layout',[HomeController::class,"layout"])->name('Index.layout');
Route::get('/cart',[HomeController::class,"cart"])->name('Index.cart');
// Route::get('/cart',[HomeController::class,"cart"])->name('Index.cart');
Route::get('/chitiet/{id}',[HomeController::class,"SanPhamChiTiet"])->name('Index.chitiet');
Route::get('/LoaiSanPham/{id}',[HomeController::class,"SanPhamTheoLoai"])->name('Index.LoaiSanPham');
Route::get('/TimKiem/',[HomeController::class,"TimKiem"])->name('Home.TimKiem');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::get('thanhtoan', [CartController::class, 'thanhtoan'])->name('cart.thanhtoan');
Route::post('thanhtoan', [CartController::class, 'thanhtoan1'])->name('cart.thanhtoan1');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


//thong ke
Route::get('thongke', [ThongKeController::class, 'Index'])->name('ThongKe.list');

Route::get('api', function(){
  // Get the number of days to show data for, with a default of 7
  $days = Input::get('days', 7);

  $range = Carbon::now()->subDays(30);

        $stats = DB::table('donhang')
        ->where('ngayDat', '>=', $range)
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get([
        DB::raw('Date(ngayDat) as date'),
        DB::raw('COUNT(*) as value')
        ]);

  return $stats;
});

Route::get ('/dangnhap',[LoginController::class,'getLogin'])->name("dangnhap.index");

Route::post ('/dangnhap',[LoginController::class,'postlogin'])->name("dangnhap.index");Route::post('/login', [LoginController::class, 'postLogin']);

Route::post('/login', [LoginController::class, 'login']);
// Route::get('/login', ['as' => 'login', 'uses' => 'LoginController', 'getLogin']);
// Route::post('/login', ['as' => 'login', 'uses' => 'LoginController', 'postLogin']);