<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\taikhoan;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('Home.form.login');
    }

    

    public function postlogin(Request $req)
    {
       
        $user = taikhoan::where('taiKhoan', '=', $req->taiKhoan)->first();
        $this->validate($req,
        [
            'taiKhoan'=>'required|email',
            'matKhau'=>'required|min:3|max:20'
        ],
        [
            'taiKhoan.required'=>'Vui lòng nhập Email',
            'taiKhoan.email'=>'Không đúng định dạng Email',
            'matKhau.required'=>'Vui lòng nhập mật khẩu',
            'matKhau.min'=>'Mật khẩu ít nhất 6 ký tự',
            'matKhau.max'=>'Mật khẩu nhiều nhất 20 ký tự'
        ]);
        // $khachhang=array('email'=>$req->email,'matkhau'=>$req->matkhau);

        if( $req->matKhau == $user->matKhau){
            return redirect()->route('/sanpham')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng Nhập Không Thành Công']);
        }
    }
    // public function getLogout()
    // {
    //     Auth::logout();
    //     return redirect(/'login');
    // }
}
