@extends('Home.layoutHome')
@section('layout')
    <div class="bodi">
        
        <div class="container">
            <div class="slide">
                <img class="mySlides" src="/front/DoAn2/image/6HHNAJ7E.jpg">
                <img class="mySlides" src="/front/DoAn2/image/3XSUDF44.jpg">
                <img class="mySlides" src="/front/DoAn2/image/OJ4M48Q3.jpg">


            </div>

            <h1 class="pagetitle col-9 col-s-9 col-m-12">
                <a href="/front/DoAn2/#">

                    Sách Bán Chạy
                </a>
            </h1>
            <ul class="listbook ">


                @foreach ($banchay as $sp)
                    <li class="book">
                        <a href="{{ route('Index.chitiet', $sp->sanp_id) }}"><img
                                src="/front/DoAn2/image/book/{{ $sp->image }}"></a>
                        <div class="popup">
                            <h1 class="name">
                                <a href="{{ route('Index.chitiet', $sp->sanp_id) }}" title="SỨC-Mạnh-Của-Người-Mẹ">
                                    {{ $sp->sanp_name }}
                                </a>
                            </h1>
                            <div class="content">
                                <div class="description">
                                    <ul>
                                        <li>Số trang: {{ $sp->soTrang }}</li>
                                        <li>Kích thước: {{ $sp->size }} cm</li>
                                        <li>Ngày phát hành: {{ $sp->namsx }}</li>
                                    </ul>
                                </div>
                                <p id="price"  class="price">
                                    {{number_format($sp->gia)}}đ

                                </p>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $sp->sanp_id }}" name="sanp_id">
                                    <input type="hidden" value="{{ $sp->sanp_name }}" name="sanp_name">
                                    <input type="hidden" value="{{ $sp->gia }}" name="price">
                                    <input type="hidden" value="{{ $sp->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="button">Thêm vào giỏ hàng</button>
                                    <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                                </form>

                            </div>


                        </div>
                    </li>
                @endforeach
                {{-- <li class="book">
                    <a href="{{ route('Index.chitiet', $sp->sanp_id) }}"><img
                            src="/front/DoAn2/image/book/NQK26Y4Y.jpg"></a>
                    <div class="popup">
                        <h1 class="name">
                            <a href="{{ route('Index.chitiet', $sp->sanp_id) }}" title="SỨC-Mạnh-Của-Người-Mẹ">
                                SỨC MẠNH CỦA NGƯỜI MẸ
                            </a>
                        </h1>
                        <div class="content">
                            <div class="description">
                                <ul>
                                    <li>Số trang: 350</li>
                                    <li>Kích thước: 15.5x24 cm</li>
                                    <li>Ngày phát hành: 11-08-2022</li>
                                </ul>
                            </div>
                            <p class="price">
                                114.000đ

                            </p>
                            <button class="button"
                                onclick="addToCart({id:'935235233478',image:'../image/book/NQK26Y4Y.jpg', price:114000, name:'Sức mạnh của người mẹ'})">Thêm
                                vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                        </div>


                    </div>
                </li> --}}
            </ul>


            <h1 class="pagetitle col-9 col-s-9 col-m-12">
                <a href="/front/DoAn2/#">

                    Sách mới - Tái Bản
                </a>
            </h1>
            <ul class="listbook ">


                @foreach ($sachmoi as $sp)
                    <li class="book">
                        <a href="{{ route('Index.chitiet', $sp->sanp_id) }}"><img
                                src="/front/DoAn2/image/book/{{ $sp->image }}"></a>
                        <div class="popup">
                            <h1 class="name">
                                <a href="{{ route('Index.chitiet', $sp->sanp_id) }}" title="SỨC-Mạnh-Của-Người-Mẹ">
                                    {{ $sp->sanp_name }}
                                </a>
                            </h1>
                            <div class="content">
                                <div class="description">
                                    <ul>
                                        <li>Số trang: {{ $sp->soTrang }}</li>
                                        <li>Kích thước: {{ $sp->size }} cm</li>
                                        <li>Ngày phát hành: {{ $sp->namsx }}</li>
                                    </ul>
                                </div>
                                <p class="price">
                                    {{number_format($sp->gia)}}đ

                                </p>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $sp->sanp_id }}" name="sanp_id">
                                    <input type="hidden" value="{{ $sp->sanp_name }}" name="sanp_name">
                                    <input type="hidden" value="{{ $sp->gia }}" name="price">
                                    <input type="hidden" value="{{ $sp->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="button">Thêm vào giỏ hàng</button>
                                    <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                                </form>

                            </div>


                        </div>
                    </li>
                @endforeach
                {{-- <li class="book">
                    <a href="{{ route('Index.chitiet', $sp->sanp_id) }}"><img
                            src="/front/DoAn2/image/book/NQK26Y4Y.jpg"></a>
                    <div class="popup">
                        <h1 class="name">
                            <a href="{{ route('Index.chitiet', $sp->sanp_id) }}" title="SỨC-Mạnh-Của-Người-Mẹ">
                                SỨC MẠNH CỦA NGƯỜI MẸ
                            </a>
                        </h1>
                        <div class="content">
                            <div class="description">
                                <ul>
                                    <li>Số trang: 350</li>
                                    <li>Kích thước: 15.5x24 cm</li>
                                    <li>Ngày phát hành: 11-08-2022</li>
                                </ul>
                            </div>
                            <p class="price">
                                114.000đ

                            </p>
                            <button class="button"
                                onclick="addToCart({id:'935235233478',image:'../image/book/NQK26Y4Y.jpg', price:114000, name:'Sức mạnh của người mẹ'})">Thêm
                                vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                        </div>


                    </div>
                </li> --}}
            </ul>

            <h1 class="pagetitle col-9 col-s-9 col-m-12">
                <a href="/front/DoAn2/#">

                    Văn học Việt Nam
                </a>
            </h1>
            <ul class="listbook ">


                @foreach ($vanhocvietnam as $sp)
                    <li class="book">
                        <a href="{{ route('Index.chitiet', $sp->sanp_id) }}"><img
                                src="/front/DoAn2/image/book/{{ $sp->image }}"></a>
                        <div class="popup">
                            <h1 class="name">
                                <a href="{{ route('Index.chitiet', $sp->sanp_id) }}" title="SỨC-Mạnh-Của-Người-Mẹ">
                                    {{ $sp->sanp_name }}
                                </a>
                            </h1>
                            <div class="content">
                                <div class="description">
                                    <ul>
                                        <li>Số trang: {{ $sp->soTrang }}</li>
                                        <li>Kích thước: {{ $sp->size }} cm</li>
                                        <li>Ngày phát hành: {{ $sp->namsx }}</li>
                                    </ul>
                                </div>
                                <p class="price">
                                    {{number_format($sp->gia)}}đ

                                </p>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $sp->sanp_id }}" name="sanp_id">
                                    <input type="hidden" value="{{ $sp->sanp_name }}" name="sanp_name">
                                    <input type="hidden" value="{{ $sp->gia }}" name="price">
                                    <input type="hidden" value="{{ $sp->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="button">Thêm vào giỏ hàng</button>
                                    <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                                </form>

                            </div>


                        </div>
                    </li>
                @endforeach
                {{-- <li class="book">
                    <a href="{{ route('Index.chitiet', $sp->sanp_id) }}"><img
                            src="/front/DoAn2/image/book/NQK26Y4Y.jpg"></a>
                    <div class="popup">
                        <h1 class="name">
                            <a href="{{ route('Index.chitiet', $sp->sanp_id) }}" title="SỨC-Mạnh-Của-Người-Mẹ">
                                SỨC MẠNH CỦA NGƯỜI MẸ
                            </a>
                        </h1>
                        <div class="content">
                            <div class="description">
                                <ul>
                                    <li>Số trang: 350</li>
                                    <li>Kích thước: 15.5x24 cm</li>
                                    <li>Ngày phát hành: 11-08-2022</li>
                                </ul>
                            </div>
                            <p class="price">
                                114.000đ

                            </p>
                            <button class="button"
                                onclick="addToCart({id:'935235233478',image:'../image/book/NQK26Y4Y.jpg', price:114000, name:'Sức mạnh của người mẹ'})">Thêm
                                vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                        </div>


                    </div>
                </li> --}}
            </ul>

            <h1 class="pagetitle col-9 col-s-9 col-m-12">
                <a href="/front/DoAn2/#">

                    Văn học nước ngoài
                </a>
            </h1>
            <ul class="listbook ">


                @foreach ($vanhocnuocngoai as $sp)
                    <li class="book">
                        <a href="{{ route('Index.chitiet', $sp->sanp_id) }}"><img
                                src="/front/DoAn2/image/book/{{ $sp->image }}"></a>
                        <div class="popup">
                            <h1 class="name">
                                <a href="{{ route('Index.chitiet', $sp->sanp_id) }}" title="SỨC-Mạnh-Của-Người-Mẹ">
                                    {{ $sp->sanp_name }}
                                </a>
                            </h1>
                            <div class="content">
                                <div class="description">
                                    <ul>
                                        <li>Số trang: {{ $sp->soTrang }}</li>
                                        <li>Kích thước: {{ $sp->size }} cm</li>
                                        <li>Ngày phát hành: {{ $sp->namsx }}</li>
                                    </ul>
                                </div>
                                <p class="price">
                                    {{number_format($sp->gia)}}đ

                                </p>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $sp->sanp_id }}" name="sanp_id">
                                    <input type="hidden" value="{{ $sp->sanp_name }}" name="sanp_name">
                                    <input type="hidden" value="{{ $sp->gia }}" name="price">
                                    <input type="hidden" value="{{ $sp->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="button">Thêm vào giỏ hàng</button>
                                    <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                                </form>

                            </div>


                        </div>
                    </li>
                @endforeach
                {{-- <li class="book">
                    <a href="{{ route('Index.chitiet', $sp->sanp_id) }}"><img
                            src="/front/DoAn2/image/book/NQK26Y4Y.jpg"></a>
                    <div class="popup">
                        <h1 class="name">
                            <a href="{{ route('Index.chitiet', $sp->sanp_id) }}" title="SỨC-Mạnh-Của-Người-Mẹ">
                                SỨC MẠNH CỦA NGƯỜI MẸ
                            </a>
                        </h1>
                        <div class="content">
                            <div class="description">
                                <ul>
                                    <li>Số trang: 350</li>
                                    <li>Kích thước: 15.5x24 cm</li>
                                    <li>Ngày phát hành: 11-08-2022</li>
                                </ul>
                            </div>
                            <p class="price">
                                114.000đ

                            </p>
                            <button class="button"
                                onclick="addToCart({id:'935235233478',image:'../image/book/NQK26Y4Y.jpg', price:114000, name:'Sức mạnh của người mẹ'})">Thêm
                                vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                        </div>


                    </div>
                </li> --}}
            </ul>



            
                {{-- <li class="book">
                <a href="{{route("Index.chitiet")}}"><img src="/front/DoAn2/image/LLHGO91F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="Chàng thủy thủ Sinbad">
                            Chàng thủy thủ Sinbad
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 40</li>
                                <li>Kích thước: 15.5x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            39.000đ
                            
                        </p>
                        <button class="button" onclick="addToCart({id:'895235233478',image:'../image/LLHGO91F.jpg', price:39000, name:'Chàng thuỷ thủ SinBad'})">Thêm vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img  src="/front/DoAn2/image/book/N2I8JZJ6.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Mê cung thư viện">
                            Mê cung thư viện
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 518</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            134.340đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img  src="/front/DoAn2/image/book/35I2XI5F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Bàn-Luận-Về-Yêu">
                            Bàn luận về yêu
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 256</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            76.800đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>

            </li>

            
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img src="/front/DoAn2/image/LLHGO91F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="Chàng thủy thủ Sinbad">
                            Chàng thủy thủ Sinbad
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 40</li>
                                <li>Kích thước: 15.5x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            39.000đ
                            
                        </p>
                        <button class="button" onclick="addToCart({id:'895235233478',image:'../image/LLHGO91F.jpg', price:39000, name:'Chàng thuỷ thủ SinBad'})">Thêm vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img  src="/front/DoAn2/image/book/N2I8JZJ6.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Mê cung thư viện">
                            Mê cung thư viện
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 518</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            134.340đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img  src="/front/DoAn2/image/book/35I2XI5F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Bàn-Luận-Về-Yêu">
                            Bàn luận về yêu
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 256</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            76.800đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>

            </li> --}}




            
            {{-- <h1 class="pagetitle col-9 col-s-9 col-m-12">
            <a href="/front/DoAn2/#">
                Sách Mới - Tái Bản
            </a>
        </h1>
        <ul class="listbook ">
            
           
            
            <li class="book">
                <a href="{{route("Index.chitiet", $sp->sanp_id)}}"><img  src="/front/DoAn2/image/book/NQK26Y4Y.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="SỨC-Mạnh-Của-Người-Mẹ">
                            SỨC MẠNH CỦA NGƯỜI MẸ
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 350</li>
                                <li>Kích thước: 15.5x24 cm</li>
                                <li>Ngày phát hành: 11-08-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            114.000đ
                            
                        </p>
                        <button class="button" onclick="addToCart({id:'935235233478',image:'../image/book/NQK26Y4Y.jpg', price:114000, name:'Sức mạnh của người mẹ'})">Thêm vào giỏ hàng</button>
                        <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                    
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet", $sp->sanp_id)}}"><img src="/front/DoAn2/image/LLHGO91F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="Chàng thủy thủ Sinbad">
                            Chàng thủy thủ Sinbad
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 40</li>
                                <li>Kích thước: 15.5x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            39.000đ
                            
                        </p>
                        <button class="button" onclick="addToCart({id:'895235233478',image:'../image/LLHGO91F.jpg', price:39000, name:'Chàng thuỷ thủ SinBad'})">Thêm vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet", $sp->sanp_id)}}"><img  src="/front/DoAn2/image/book/N2I8JZJ6.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Mê cung thư viện">
                            Mê cung thư viện
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 518</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            134.340đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet", $sp->sanp_id)}}"><img  src="/front/DoAn2/image/book/35I2XI5F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Bàn-Luận-Về-Yêu">
                            Bàn luận về yêu
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 256</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            76.800đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>

            </li>

            
            <li class="book">
                <a href="{{route("Index.chitiet", $sp->sanp_id)}}"><img src="/front/DoAn2/image/LLHGO91F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="Chàng thủy thủ Sinbad">
                            Chàng thủy thủ Sinbad
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 40</li>
                                <li>Kích thước: 15.5x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            39.000đ
                            
                        </p>
                        <button class="button" onclick="addToCart({id:'895235233478',image:'../image/LLHGO91F.jpg', price:39000, name:'Chàng thuỷ thủ SinBad'})">Thêm vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet", $sp->sanp_id)}}"><img  src="/front/DoAn2/image/book/N2I8JZJ6.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Mê cung thư viện">
                            Mê cung thư viện
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 518</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            134.340đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet", $sp->sanp_id)}}"><img  src="/front/DoAn2/image/book/35I2XI5F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Bàn-Luận-Về-Yêu">
                            Bàn luận về yêu
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 256</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            76.800đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>

            </li>
  
            

            
        </ul>
        <h1 class="pagetitle col-9 col-s-9 col-m-12" >
            <a href="/front/DoAn2/#" >
                Văn học Việt Nam
            </a>
        </h1>
        <ul class="listbook">
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img style="height: 100%; width: 100%;" src="/front/DoAn2/image/book/H2PQB7LZ.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Chúc mẹ ngủ ngon">
                            Chúc mẹ ngủ ngon
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 396</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            116.000đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img style="height: 100%; width: 100%;" src="/front/DoAn2/image/book/4WBD9Q8Y.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="Dù được ban đôi cánh">
                            Dù được ban đôi cánh
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 364</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            111.000đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img style="height: 100%; width: 100%;" src="/front/DoAn2/image/book/chiechoprongvamaria_1_0549726d971546918c2cb0109336defc_large.webp"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Chiếc hộp rỗng và Maria lần 0">
                            Chiếc hộp rỗng và Maria lần 0
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 364</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            200.000đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img style="height: 100%; width: 100%;" src="/front/DoAn2/image/book/guong_soi_toi_loi_-_bia1_00dc3b44b26144209ebe4ea5e28710b0_large.webp"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="Gương soi tội lỗi">
                            Gương soi tội lỗi
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 96</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            69.300đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img style="height: 100%; width: 100%;" src="/front/DoAn2/image/book/horimiya_13_-_bia_1_d261c67a8db54a939bde8bdfc8311011_large.webp"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Horimiya">
                            Horimiya
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 96</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            34.300đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            
        </ul>
        
        <ul class="listbook">
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img style="height: 100%; width: 100%;" src="/front/DoAn2/image/book/tan_the_neu_khong_ban_ex_-_bia_1_541e642388c846b3ab10f264fdc40ffc_large.webp"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Tận thế nếu không bận anh cứu chúng em">
                            SUKASUKA
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 212</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            72.000đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img style="height: 100%; width: 100%;" src="/front/DoAn2/image/book/sao_21_-_bia_1_f917a7f9e4d547fda0e651245e84a6c8_large.webp"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="Sword art online 21">
                            Sword art online 
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 212</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            96.000đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img style="height: 100%; width: 100%;" src="/front/DoAn2/image/TNI7YK7L.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="CÔ BÉ TÍ HON">
                            CÔ BÉ TÍ HON
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 36</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            39.200đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            
        </ul>


        <h1 class="pagetitle col-9 col-s-9 col-m-12">
            <a href="/front/DoAn2/#">
                Văn học nước ngoài
        
            </a>
        </h1>
        <ul class="listbook ">
            
           
            
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img  src="/front/DoAn2/image/book/NQK26Y4Y.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="SỨC-Mạnh-Của-Người-Mẹ">
                            SỨC MẠNH CỦA NGƯỜI MẸ
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 350</li>
                                <li>Kích thước: 15.5x24 cm</li>
                                <li>Ngày phát hành: 11-08-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            114.000đ
                            
                        </p>
                        <button class="button" onclick="addToCart({id:'935235233478',image:'../image/book/NQK26Y4Y.jpg', price:114000, name:'Sức mạnh của người mẹ'})">Thêm vào giỏ hàng</button>
                        <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                    
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img src="/front/DoAn2/image/LLHGO91F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="Chàng thủy thủ Sinbad">
                            Chàng thủy thủ Sinbad
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 40</li>
                                <li>Kích thước: 15.5x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            39.000đ
                            
                        </p>
                        <button class="button" onclick="addToCart({id:'895235233478',image:'../image/LLHGO91F.jpg', price:39000, name:'Chàng thuỷ thủ SinBad'})">Thêm vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img  src="/front/DoAn2/image/book/N2I8JZJ6.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Mê cung thư viện">
                            Mê cung thư viện
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 518</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            134.340đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img  src="/front/DoAn2/image/book/35I2XI5F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Bàn-Luận-Về-Yêu">
                            Bàn luận về yêu
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 256</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            76.800đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>

            </li>

            
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img src="/front/DoAn2/image/LLHGO91F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="{{route("Index.chitiet")}}" title="Chàng thủy thủ Sinbad">
                            Chàng thủy thủ Sinbad
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 40</li>
                                <li>Kích thước: 15.5x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            39.000đ
                            
                        </p>
                        <button class="button" onclick="addToCart({id:'895235233478',image:'../image/LLHGO91F.jpg', price:39000, name:'Chàng thuỷ thủ SinBad'})">Thêm vào giỏ hàng</button>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img  src="/front/DoAn2/image/book/N2I8JZJ6.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Mê cung thư viện">
                            Mê cung thư viện
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 518</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            134.340đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>
            </li>
            <li class="book">
                <a href="{{route("Index.chitiet")}}"><img  src="/front/DoAn2/image/book/35I2XI5F.jpg"></a>
                <div class="popup">
                    <h1 class="name">
                        <a href="/front/DoAn2/#" title="Bàn-Luận-Về-Yêu">
                            Bàn luận về yêu
                        </a>
                    </h1>
                    <div class="content">
                        <div class="description">
                            <ul>
                                <li>Số trang: 256</li>
                                <li>Kích thước: 13x24 cm</li>
                                <li>Ngày phát hành: 09-01-2022</li>
                            </ul>
                        </div>
                        <p class="price">
                            76.800đ
                            
                        </p>
                            <a href="/front/DoAn2/#" class="button" >Thêm vào giỏ hàng</a>
                            <a href="/front/DoAn2/#" class="button">Mua ngay</a>
                    </div>
                  
                </div>

            </li>
  
            

            
        </ul> --}}

        </div>






    </div>
    {{-- <script>
        function formatCurrency(num) {
             return '₫' + num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }
        var number = 123456;
        var formatted = formatCurrency(number);
        document.getElementById('price').innerHTML = formatted;
    </script> --}}
@endsection
