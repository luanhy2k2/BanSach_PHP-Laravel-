{{-- @extends('Home.layoutHome')
@section('layout') --}}
<div class="header">
    <div class="">
        <h1 style="margin-left: 3%;" class="logo">
            <a href="{{route("Index.index")}}">NhaNam</a>
        </h1>
    
        <div >
            <a href="{{route("cart.list")}}"><img src="/front/DoAn2/image/cart.png" style="height: 55px;position: absolute;right: 50px;"></li></a>
        </div>
        <div class="search">
            <form action="{{route('Home.TimKiem')}}" method="get">
                @csrf
                <input type="text" name="tenSanPham" placeholder="Tìm kiếm sách..." class="text">
                <button class="submit" type="submit"></button>
            </form>
    
        </div>
        <span class="openmenu-icon"></span>
        <span class="opensearch-icon"></span>

    </div>
     
</div>
{{-- @endsection --}}