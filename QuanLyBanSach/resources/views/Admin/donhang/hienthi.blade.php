@extends('Admin.AdminLayout')
@section('layoutAdmin')
    <div class="col-11 col-s-12 content">
        <div style="margin-left: -50px" class="col-4 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Quản lý thông tin đơn hàng
                    <hr>
                </div>
                <div>
                    <button style="width:140px;" class="btn-form" type="button" class="btn btn-info btn-lg"
                        data-bs-toggle="modal" data-bs-target="#add">Thêm tác phẩm</button>
                    <button style="width:140px;" class="btn-form" type="button" class="btn btn-info btn-lg"
                        data-bs-toggle="modal" data-bs-target="#myModal">Sửa tác phẩm</button>
                    <button style="width:140px;" class="btn-form" type="button" class="btn btn-info btn-lg"
                        data-bs-toggle="modal" data-bs-target="#delete">Xoá tác phẩm</button>

                </div>

            </div>
        </div>
        <div class="col-8 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Danh sách chi tiết đơn hàng

                    <hr>
                </div>
                <div class="row">
                    <form>
                        <div class="col-10 col-s-12 padding-box">
                            <input name="key" type="text" placeholder="Nhập mã, tên thể loại...">
                        </div>
                        <div class="col-2 col-s-12 padding-box">
                            <button type="submit"><i class="fas fas fa-search"></i> Tìm
                                kiếm</button>
                        </div>
                    </form>

                </div>

                <div class="row">

                    <div class="col-12 col-s-12 padding-box">

                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ngày đặt</th>
                                    <th>Trạng thái</th>
                                    {{-- <th>Trạng thái thanh toán</th> --}}


                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($donhang as $dm)
                                    <tr>

                                        <td>{{ $dm->maDonHang }}</td>
                                        <td>{{ $dm->tenKhachHang }}</td>
                                        <td>{{ $dm->ngayDat }}</td>
                                        <td>{{ $dm->trangThai }}</td>
                                        {{-- <td>{{ $dm->trangThaiThanhToan }}</td> --}}
                                        <td><a href="{{ route('donhang.chitiet', $dm->maDonHang) }}"><i type="button"
                                                    style="color: black" class='fas fa-eye' style='font-size:18px'></i></a>
                                        </td>
                                        <td style="width:30px"><a onclick="return confirm('Bạn có muốn xác thực không?')"
                                                href="{{ route('donhang.xacthuc', $dm->maDonHang) }}"><i
                                                    style='font-size:18px; color:black' class="fas fa-check"></i></a></td>
                                        <td style="width:30px"><a onclick="return confirm('Bạn có muốn xóa không?')"
                                                href="{{ route('donhang.delete', $dm->maDonHang) }}"><i
                                                    style='font-size:18px; color:black' class="fas fa-trash"></i></a></td>
                                        <td style="width:30px"><a
                                                onclick="return confirm('Bạn có muốn thêm hoá đơn không?')"
                                                href="{{ route('donhang.add', $dm->maDonHang) }}"><i
                                                    style='font-size:18px; color:black' class="fas fa-plus"></i></a></td>
                                    </tr>
                                @endforeach



                            </tbody>


                        </table>
                        {{-- {{$sanpham->appends(request()->all())->links()}} --}}



                    </div>
                    <div class="col-12 col-s-12 padding-box">
                        <div class="box-sum">

                            <div class="box-right">
                                <button><i class="fas fa-angle-left"></i></button>
                                <button>1</button>
                                ...
                                <button>4</button>
                                <button><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" charset="utf-8">
                        $(document).ready(function() {



                            $('.fa-check').click(function(e) {

                                var url = $(this).attr('data-url');





                                $.ajax({
                                    //phương thức get
                                    type: 'get',
                                    url: url,
                                    success: function(response) {
                                        //đưa dữ liệu controller gửi về điền vào input trong form edit.
                                        $('#{{ $dm->maDonHang }}').remove();

                                        //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
                                        // $('#form-edit').attr('data-url', '{{ asset('danhmuc/') }}/' +
                                        //     response.data.danhmuc_id)
                                    },
                                    error: function(error) {

                                    }
                                })
                            })


                        })
                    </script>
                    {{-- @include('Admin.sanpham.edit')
                    @include('Admin.sanpham.add')
                    @include('Admin.sanpham.delete') --}}
                </div>
            </div>
        </div>
    </div>
@endsection
