<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function login()
    {
        return view('Home.form.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
        // Authentication passed...
            return redirect()->route('ThongKe.List');
        }
        else {
         return back()->withErrors(['email' => 'Đăng nhập không thành công.'])->withInput();
    }

    // public function login(Request $request)
    // {
    // // Kiểm tra các thông tin đăng nhập từ request và kiểm tra chúng có hợp lệ không
    //     $validatedData = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    // // Xác thực thông tin đăng nhập
    // if (Auth::attempt($validatedData)) {
    //     // Nếu thông tin đăng nhập đúng, chuyển hướng đến trang dashboard hoặc trang đã yêu cầu trước đó
    //     return redirect()->intended('/dashboard');
    // } else {
    //     // Nếu thông tin đăng nhập sai, hiển thị thông báo lỗi
    //     return back()->withErrors([
    //         'email' => 'Thông tin đăng nhập không chính xác.',
    //     ]);
    // }
}

}
