{{-- @extends('Home.layoutHome')
@section('layout') --}}
<div class="dau">
    <ul class="trai">
        <li>
            <a href="form/gioithieu.html">Giới thiệu</a>
        </li>
        <li>
            <a href="form/chinhsach.html">Chính sách bảo mật</a>
        </li>
        
    </ul>
    <ul class="phai">
        <li>
            <a href="{{route('dangnhap.index')}}">Đăng nhập</a>
        </li>
        <li>
            <a href="form/dangki.html">Đăng kí</a>
        </li>
    </ul>
</div>

{{-- @endsection --}}