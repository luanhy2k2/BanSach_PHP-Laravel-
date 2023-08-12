@extends('Home.layoutHome')
@section('layout')


@if(session()->has('success'))
{{ session()->get('success') }}
@endif
<div class="bodii">
  <h1 style=" text-align: center; background-color: black; color: azure;" >
      Đơn hàng

  </h1>
  <div  style="display: flex; padding:20px">
      <div class="form-nhap">
          <h1 style="text-align: center;">THÔNG TIN THANH TOÁN</h1>
          
          <form action="{{route('cart.thanhtoan1')}}" method="post">
              <div class="row" style="margin-top: 5px;">

                  <div class="col-12 col-s-12">
                      <div style="margin-top: 5px;">
                          <label for="txt_ten"> Họ Tên </label><br>
                          <input name="tenKhachHang" id="txt_ten" type="text">
                      </div>
                  </div>
              </div>
              
              <div class="row" style="margin-top: 5px;">
                  <div class="col-12 col-s-12">
                      <label for="txt_dchi">Địa chỉ:</label><br>
                      <input name="diaChi" type="text" id="txt_dchi">
                  </div>
              </div>
              {{-- <div class="row" style="margin-top: 5px;">
                  <div class="col-12 col-s-12">
                      <label for="txt_email">Email <span style="color: red;" id="s_email"> </span> </label><br>
                      <input name="email" type="email" id="txt_email">
                  </div>
              </div> --}}

              <div class="row" style="margin-top: 5px;">
                  <div class="col-12 col-s-12">
                      <label for="txt_dienthoai">Số điện thoại <span id="s_dienthoai"> </span></label><br>
                      <input name="sdt" type="text" id="txt_dienthoai">
                  </div>
              </div>
              @csrf
              <button type="submit" class="buttoon" >ĐẶT HÀNG</button>
          </form>
      </div>
      <div class="from-thanhtoan" style="margin-left: 15% ;">
          <h1 style="text-align: center ;">ĐƠN HÀNG CỦA BẠN</h1>
          <div class="row thanhtoan">
              <div class="col-6 col-s-12" style="text-align: left;">
                  <label>SẢN PHẨM</label>
              </div>
              <div class="col-6 col-s-12" style="text-align: right;">
                  <label>TỔNG</label>
              </div>
          </div>
          <div id="spham">
            @foreach($cartItems as $item)
              <div class="row thanhtoan">
                  <div class="col-6 col-s-12" style="text-align: left;">
                      <label><img style="width:70px; height:80px" src="/front/DoAn2/image/book/{{ $item->attributes->image }}">  </label>
                  </div>
                  <div class="col-6 col-s-12" style="text-align: right;">
                      <label>{{ $item->price }}</label>
                  </div>
              </div>
            @endforeach
          </div>
          
          <div class="row thanhtoan">
              <div class="col-6 col-s-12" style="text-align: left;">
                  <label>Tổng</label>
              </div>
              <div class="col-6 col-s-12" style="text-align: right;">
                  <label id="tt"></label>đ
              </div>
          </div>
          

      </div>
  </div>
  
  
</div>
@endsection