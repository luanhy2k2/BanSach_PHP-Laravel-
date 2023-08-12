<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\taikhoan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    public function getLogin()
    {
        return view('Home.form.login');
    }

    

    public function postlogin(Request $req)
    {
       
        $user = taikhoan::where('taiKhoan', '=', $req->taiKhoan)->first();
        if( $req->matKhau == $user->matKhau){
            return redirect()->route('ThongKe.list');
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
    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }
    
}
