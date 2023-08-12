<?php

namespace App\Http\Controllers\Home;
use App\Models\donhang;
use Carbon\Carbon;
use App\Models\chitietdonhang;
use App\Models\khachhang;
use App\Models\chitietkho;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('Home.form.cart', compact('cartItems'));
    }
    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->sanp_id,
            'name' => $request->sanp_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
            
        ]);
        // session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('Index.index');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative'=>false,
                   
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }
    public function removeCart(Request $request)
    {
        \Cart::remove($request->sanp_id);
        // session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        // session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
    public function ThanhToan()
    {
        $cartItems = \Cart::getContent();
        return view('Home.form.thanhtoan',compact('cartItems'));
    }
    public function ThanhToan1(Request $request)
    {
        $kh = new khachhang();
        $kh->tenKhachHang = $request->tenKhachHang;
        $kh->sdt = $request->sdt;
        $kh->diaChi = $request->diaChi;
        $kh->save();
        
        $db = new donhang;
        $cartItems = \Cart::getContent();
        // $db->tenKhachHang = $request->tenKhachHang;
        // $db->sdt = $request->sdt;
       
        // $db->diaChi = $request->diaChi;
        // $db->trangThai = "0";
        $db->maKhachHang = $kh->maKhachHang;
        $db->ngayDat = Carbon::now()->toDateString();
        $db->trangThai = "0";
        $db->giaTien = \Cart::getTotal();
        

        $db->save();
        $cartItems = \Cart::getContent();
        foreach($cartItems as $sp){
        
            $db1 = new chitietdonhang;
            $kho = DB::table('chitietkho')->where('sanp_id', $sp->id)->decrement('soLuong', $sp->quantity);
            
            $db1->maDonHang=$db->maDonHang;
            $db1->sanp_id=$sp->id;
            $db1->gia=$sp->price;
            $db1->soLuong=$sp->quantity;
            $db1->save();
        }
        \Cart::clear();
          return redirect()->route('Index.index');
//         try {
//         DB::transaction(function () {
//         $cartItems = \Cart::getContent();
//         foreach($cartItems as $sp){
        
//             $db1 = new chitietdonhang;
//             $kho = DB::table('chitietkho')->where('sanp_id', $sp->id)->decrement('soLuong', $sp->quantity);
            
//             $db1->maDonHang=$db->maDonHang;
//             $db1->sanp_id=$sp->id;
//             $db1->gia=$sp->price;
//             $db1->soLuong=$sp->quantity;
//             $db1->save();
//         }
//         \Cart::clear();
//           return redirect()->route('Index.index');
//         // Các truy vấn cơ sở dữ liệu của bạn ở đây
//     });
// } catch (Exception ) {
//     // Xử lý ngoại lệ ở đây
//     return redirect()->route('cart.list');
// }
        
        // session()->flash('success', 'Thêm mới thành công!');
      
    }
}
