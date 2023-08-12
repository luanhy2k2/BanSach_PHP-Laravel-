@extends('Admin.AdminLayout')
@section('layoutAdmin')
    <style>
        .Choicefile {
            display: block;
            background: #14142B;
            border: 1px solid #fff;
            color: #fff;
            width: 150px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            padding: 5px 0px;
            border-radius: 5px;
            font-weight: 500;
            align-items: center;
            justify-content: center;
        }

        .Choicefile:hover {
            text-decoration: none;
            color: white;
        }

        #uploadfile,
        .removeimg {
            display: none;
        }

        #thumbbox {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }

        .removeimg {
            height: 25px;
            position: absolute;
            background-repeat: no-repeat;
            top: 5px;
            left: 5px;
            background-size: 25px;
            width: 25px;
            /* border: 3px solid red; */
            border-radius: 50%;

        }

        .removeimg::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            content: '';
            border: 1px solid red;
            background: red;
            text-align: center;
            display: block;
            margin-top: 11px;
            transform: rotate(45deg);
        }

        .removeimg::after {
            /* color: #FFF; */
            /* background-color: #DC403B; */
            content: '';
            background: red;
            border: 1px solid red;
            text-align: center;
            display: block;
            transform: rotate(-45deg);
            margin-top: -2px;
        }
    </style>
    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="app-title">
                    <ul class="app-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
                    </ul>
                    <div id="clock"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Left-->
            <div class="col-md-12 col-lg-6">
                <div class="row">
                    <!-- col-6 -->
                    <div class="col-md-6">
                        <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
                            <div class="info">
                                <h4>Tổng khách hàng</h4>
                                <p><b> khách hàng</b></p>
                                <p class="info-tong">Tổng số khách hàng được quản lý.</p>
                            </div>
                        </div>
                    </div>
                    <!-- col-6 -->
                    <div class="col-md-6">
                        <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
                            <div class="info">
                                <h4>Tổng sản phẩm</h4>
                                <p><b> sản phẩm</b></p>
                                <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
                            </div>
                        </div>
                    </div>
                    <!-- col-6 -->

                    <div class="col-md-6">
                        <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
                            <div class="info">
                                <h4>Tổng đơn hàng</h4>
                                <p><b> đơn hàng</b></p>
                                <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
                            </div>
                        </div>
                    </div>


                    <!-- col-6 -->
                    <div class="col-md-6">
                        <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
                            <div class="info">
                                <h4>Sản phẩm đã đặt</h4>
                                <p><b> sản phẩm</b></p>
                                <p class="info-tong">Số sản phẩm cảnh báo hết cần nhập thêm.</p>
                            </div>
                        </div>
                    </div>
                    <!-- col-12 -->
                    <div class="col-md-12">
                    </div>
                    <!-- / col-12 -->
                    <!-- col-12 -->
                    <div class="col-md-12">
                        <div class="tile">

                            <div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            {{-- <th>Mã Khách Hàng</th> --}}
                                            <th>Ảnh</th>
                                            <th>Số lượng</th>

                                            <th>Đơn giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($sanpham as $item) --}}
                                            <tr>

                                                <td></td>
                                                {{-- <td>{{ $item->Makhachhang }}</td> --}}
                                                {{-- <td><img style="width: 100px;" src="/front/image/{{ $item->Anhdaidien }}"> --}}
                                                </td>
                                                <td></td>

                                                <td>vnđ</td>







                                            </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- / col-12 -->
                </div>
            </div>
            <!--END left-->
            <!--Right-->
            <div class="col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <h3 class="tile-title">Dữ liệu 6 tháng đầu vào</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tile">
                            <h3 class="tile-title">Thống kê 6 tháng doanh thu</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END right-->
        </div>


        <div class="text-center" style="font-size: 13px">
            <p><b>Copyright
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script> Phần mềm quản lý bán hàng | Dev By Trường
                </b></p>
        </div>
        <script type="text/javascript">
            var data = {
              labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
              datasets: [{
                label: "Dữ liệu đầu tiên",
                fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
                strokeColor: "rgb(255, 212, 59)",
                pointColor: "rgb(255, 212, 59)",
                pointStrokeColor: "rgb(255, 212, 59)",
                pointHighlightFill: "rgb(255, 212, 59)",
                pointHighlightStroke: "rgb(255, 212, 59)",
                data: [20, 59, 90, 51, 56, 100]
              },
              {
                label: "Dữ liệu kế tiếp",
                fillColor: "rgba(9, 109, 239, 0.651)  ",
                pointColor: "rgb(9, 109, 239)",
                strokeColor: "rgb(9, 109, 239)",
                pointStrokeColor: "rgb(9, 109, 239)",
                pointHighlightFill: "rgb(9, 109, 239)",
                pointHighlightStroke: "rgb(9, 109, 239)",
                data: [48, 48, 49, 39, 86, 10]
              }
              ]
            };
            var ctxl = $("#lineChartDemo").get(0).getContext("2d");
            var lineChart = new Chart(ctxl).Line(data);
        
            var ctxb = $("#barChartDemo").get(0).getContext("2d");
            var barChart = new Chart(ctxb).Bar(data);
          </script>
          <script type="text/javascript">
            //Thời Gian
            function time() {
              var today = new Date();
              var weekday = new Array(7);
              weekday[0] = "Chủ Nhật";
              weekday[1] = "Thứ Hai";
              weekday[2] = "Thứ Ba";
              weekday[3] = "Thứ Tư";
              weekday[4] = "Thứ Năm";
              weekday[5] = "Thứ Sáu";
              weekday[6] = "Thứ Bảy";
              var day = weekday[today.getDay()];
              var dd = today.getDate();
              var mm = today.getMonth() + 1;
              var yyyy = today.getFullYear();
              var h = today.getHours();
              var m = today.getMinutes();
              var s = today.getSeconds();
              m = checkTime(m);
              s = checkTime(s);
              nowTime = h + " giờ " + m + " phút " + s + " giây";
              if (dd < 10) {
                dd = '0' + dd
              }
              if (mm < 10) {
                mm = '0' + mm
              }
              today = day + ', ' + dd + '/' + mm + '/' + yyyy;
              tmp = '<span class="date"> ' + today + ' - ' + nowTime +
                '</span>';
              document.getElementById("clock").innerHTML = tmp;
              clocktime = setTimeout("time()", "1000", "Javascript");
        
              function checkTime(i) {
                if (i < 10) {
                  i = "0" + i;
                }
                return i;
              }
            }
          </script>
    </main>
@endsection
