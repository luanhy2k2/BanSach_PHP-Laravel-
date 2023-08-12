@extends('Home.form.layoutChiTiet')
@section('layoutChiTiet')

<div class="bookdetailwrap">
    <header class="pageheader">
        <h1>Đăng nhập</h1>
    </header>
    <article>
        <form action="{{ route('dangnhap.index') }} " method="POST">
            @csrf
            <fieldset>
                <label class="block clearfix">
                    <span class="block input-icon input-icon-right">
                        {{-- <p>
                        <input style="width: 400px; height:30px" type="email" name="taiKhoan" id="tailkhoan" type="text" class="form-control" placeholder="Username" />
                        <i class="ace-icon fa fa-user"></i>
                        </p> --}}
                        <p>
                            <label>Email</label> <br>
                            <input style="width: 400px;" type="email" name="taiKhoan">
                        </p>
                    </span>
                </label>

                <label class="block clearfix">
                    <span class="block input-icon input-icon-right">
                        <p>
                            <label>Password</label> <br>
                            <input style="width: 400px;" name="matKhau" type="password">
                        </p>
                        {{-- <p>
                        <input style="width: 400px;" id="matkhau" name="matKhau" type="password" class="form-control" placeholder="Password" />
                        <i class="ace-icon fa fa-lock"></i>
                        </p> --}}
                    </span>
                </label>

                <div class="space"></div>

                <div class="clearfix"> 
                    <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                        <i class="ace-icon fa fa-key"></i>
                        <span class="bigger-110">Login</span>
                    </button>
                </div>

                <div class="space-4"></div>
            </fieldset>
        </form> 
    </article>
    <fieldset style="margin-top: 40px">
        <legend>Quên mật khẩu?</legend>
        <form action="/Account/ForgotPassword" method="POST" class="form" >
      
            <p>
                <label>Email</label> <br>
                <input style="width: 400px;" type="text" name="email" value="">
            </p>
            <p>
    
                <input type="submit" class="btn" value="Tìm lại mật khẩu">
            </p>
        </form>
    
    </fieldset>
</div>

{{-- <form action="{{ route('dangnhap.index') }}" class="user" method="POST">
    @csrf
    <div class="form-group">
        <input type="email" class="form-control form-control-user" name="taiKhoan"
            aria-describedby="emailHelp" placeholder="Enter Email Address...">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user" name="matKhau"
            placeholder="Password">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">Remember
                Me</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block"> Login
    </button>
    {{-- <a href="index.html">
        Login
    </a> --}}
    <hr>
    <a href="index.html" class="btn btn-google btn-user btn-block">
        <i class="fab fa-google fa-fw"></i> Login with Google
    </a>
    <a href="index.html" class="btn btn-facebook btn-user btn-block">
        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
    </a>
</form> --}}

@endsection