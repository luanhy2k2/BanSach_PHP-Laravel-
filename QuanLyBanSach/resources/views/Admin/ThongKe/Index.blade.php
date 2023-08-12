@extends('Admin.AdminLayout')
@section('layoutAdmin')
<style>
    table tr:first-child {
  border-top: none;
}
</style>
    <div class="col-11 col-s-12 content">
        <div class="col-12 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i style="font-size:15px" class="fas fa-signal">  Thống kê</i> 
                    <hr>
                </div>
                <div class="row">
                    <div class="col-4 col-s-12 padding-box">
                        <div class="box" style="background-color: #9abc32;">
                            <div class="box-left"><i class="fas fa-money"></i></div>
                            <div class="box-right">Tiền bán hàng<br><span style="background:none">{{ $giatien }} đ</span> </div>
                        </div>
                    </div>
                    <div class="col-4 col-s-12 padding-box">
                        <div class="box" style="background-color: #6FB3E0;">
                            <div class="box-left"><i class="fas fa-cloud"></i></div>
                            <div class="box-right">
                                Số đơn hàng: <span style="background:none">{{ $sodonhang }}</span><br>
                                {{-- Số sản phẩm: <span style="background:none">0</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-s-12 padding-box">
                        <div class="box" style="background-color: #D53F;">
                            <div class="box-left"><i class="fas fa-box"></i></div>
                            <div class="box-right">Tổng sản phẩm<br><span style="background:none">{{$tongsp}}</span></div>
                        </div>
                    </div>
                    <div class="col-4 col-s-12 padding-box">
                        <div class="box2" style="border: 1px solid #6FB3E0;">
                            <div class="box2-top" style="border-bottom: 1px solid #6FB3E0;">
                                <i class="fas fa-signal"></i> Hoạt động
                            </div>
                            <div class="box2-bot">
                                <div class="box2-bot-left">Doanh thu hôm nay</div>
                                <div class="box2-bot-right">{{$doanhthuhomnay}}</div>
                                <div class="box2-bot-left">Doanh thu tuần này</div>
                                <div class="box2-bot-right">{{$doanhthutuan}}</div>
                                <div class="box2-bot-left">Doanh thu tháng này</div>
                                <div class="box2-bot-right">{{$doanhthuthang}}</div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-s-12 padding-box">
                        <div class="box2" style="border: 1px solid #E8B110;">
                            <div class="box2-top" style="border-bottom: 1px solid #E8B110;">
                                <i class="fas fa-boxes"></i> Thông tin đơn hàng
                            </div>
                            <div class="box2-bot">
                                <div class="box2-bot-left">Số đơn đặt trong hôm nay</div>
                                <div class="box2-bot-right">{{$sodonhangtrongngay}}</div>
                                <div class="box2-bot-left">Số đơn đã đặt trong tuần</div>
                                <div class="box2-bot-right">{{$sodonhangtrongtuan}}</div>
                                <div class="box2-bot-left">Sắp đơn đã đặt trong tháng</div>
                                <div class="box2-bot-right">{{$sodonhangtrongthang}}</div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-s-12 padding-box">
                        <div class="box2" style="border: 1px solid #9ABC32;">
                            <div class="box2-top" style="border-bottom: 1px solid #9ABC32;">
                                <i class="fas fa-boxes"></i> Thông tin sản phẩm
                            </div>
                            <div class="box2-bot">
                                <div class="box2-bot-left">Sản phẩm</div>
                                <div class="box2-bot-right">{{$tongsp}}</div>
                                <div class="box2-bot-left">Số sản phẩm hết hàng</div>
                                <div class="box2-bot-right">{{$sphethang}}</div>
                                <div class="box2-bot-left">Chưa nhập giá mua</div>
                                <div class="box2-bot-right">0</div>
                                {{-- <div class="box2-bot-left">Hàng chưa phân loại</div>
                                <div class="box2-bot-right">0</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $in = '1' ?>
                    <div style="font-size: 30px" class="title">
                        <br>
                        <i style="font-size: 15px" class="fas fa-box"> Các sản phẩm bán chạy nhất</i> 
                        <hr style="width:250px">
                    </div>
                    <div class="col-11 col-s-12 padding-box">
                        <table style="border: none; margin-left:-50px; " class="table tb">
                            
                            <tbody>
                                @foreach($banchay as $sp)
                              <tr>
                                <td style="text-align: left;border-top:none; text-align:left; "><div style="font-size: 20px; font-weight:450; margin-top:20px; ">{{$in++}}</div></td>
                                <td style="text-align: left; width:200px; border-top:none"><img style="margin-left:0px " src="/front/DoAn2/image/book/{{$sp->image}}"></td>
                                <td style="text-align: left;border-top:none"><div style="font-size: 20px; font-weight:450; margin-top:20px; ">{{$sp->sanp_name}}</div></td>
                                <td style="text-align: left;border-top:none"><div style="font-size: 15px; font-weight:400; margin-top:20px; color :darkgreen ">| Đã bán: {{$sp->SL}}</div></td>
                              </tr>
                              @endforeach
                              
                            </tbody>
                          </table>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
@endsection
