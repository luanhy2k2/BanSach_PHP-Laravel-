@extends('Home.layoutHome')
@section('layout')

<style>
  #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: white;
      color: black;
    }
</style>

<div style="opacity: 0.8;cursor: auto;visibility: visible;" class="bodii">
    <h1 style="background-color: black; color: azure; text-align: center;">
        GIỎ HÀNG
    </h1>
    <br>
    <table id="customers">
        <tbody>
        <tr >
            <th ><span>Hình ảnh</span></th>
            <th style="text-align: left;width: 40%;"> <span>Tiêu đề</span> </th>
            <th style="text-align: left;"><span>Số lượng</span></th>
            <th style="text-align: left;"><span>Giá</span></th>
            <th style="text-align: left;"><span>Tổng cộng</span></th>
            <th style="text-align: left;"><span>Chức năng</span></th>
            
        </tr>
        </tbody>
        <tbody>     
            <tbody>
                @foreach ($cartItems as $item)
              <tr>
                <td>
                  <a href="#">
                    <img style="width: 70px; height: 80px; margin-left:10%" src="/front/DoAn2/image/book/{{ $item->attributes->image }}" >
                  </a>
                </td>
                <td>
                  
                    <p>{{ $item->name }}</p>
                    
                  
                </td>
                <td class="justify-center mt-6 md:justify-end md:flex">
                  <div class="h-10 w-28">
                    <div class="relative flex flex-row w-full h-8">
                      
                      <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id}}" >
                      <input type="number" style="width:50px" name="quantity" value="{{ $item->quantity }}"  />
                      <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                      </form>
                    </div>
                  </div>
                </td>
                <td class="hidden text-right md:table-cell">
                  <span class="text-sm font-medium lg:text-base">
                    {{number_format($item->price)}}đ
                  </span>
                </td>
                <td> ${{ $item->price * $item->quantity }}</td>
                <td class="hidden text-right md:table-cell">
                  <form action="{{ route('cart.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}" name="sanp_id">
                    <button style="border: none; background-color:white"><i class="fa fa-times-circle" style="font-size:30px;color:red;cursor: pointer;"></i></button>
                </form>
                  
                </td>
              </tr>
              @endforeach
               
            </tbody>
        </tbody>
        
    </table>
    <div class="abc">
        
        <div  style="margin-left: 50px;   float: left; text-align: center;">
            <span>Tổng:</span>
            <span style="color: red; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" id="spTong">${{ Cart::getTotal() }}</span> <br>
            <a href="{{route('cart.thanhtoan')}}"><button>Tiến hành thanh toán</button></a>
        </div>
        
    </div>
    

</div>
@endsection