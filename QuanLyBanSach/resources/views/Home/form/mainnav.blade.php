{{-- @extends('Home.layoutHome')
@section('layout') --}}
<div id="mainnav">
    <div class="wrapper">
        <ul class="menu">
            <li>
                <a href="/front/DoAn2/z">
                    Danh mục sách
                </a>
                <ul class="submenu">
                    
                    
                    @foreach($danhmuc as $ca)
                    
                        <li >
                            <a href="{{route('Index.LoaiSanPham', $ca->danhmuc_id)}}">{{$ca->danhmuc_name}} </a>
                        </li>
                    @endforeach
                       

                </ul>

            </li>
            <li>
                <a href="/front/DoAn2/form/sachbanchay.html
                ">Sách bán chạy</a>
            </li>

            <li>
                <a href="/front/DoAn2/#">Chương trình khuyến mãi</a>
            </li>			

            <li>
                <a href="/front/DoAn2//#">Giảm giá đặc biệt</a>
            </li>   
        </ul>
    </div>

</div>
{{-- @endsection --}}