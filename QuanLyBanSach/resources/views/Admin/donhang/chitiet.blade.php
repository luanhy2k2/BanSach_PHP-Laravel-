@extends('Admin.AdminLayout')
@section('layoutAdmin')
    <div class="col-11 col-s-12 content">
        <div style="margin-left: -50px" class="col-4 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Thông tin khách hàng
                    <hr>
                </div>
                <div class="modal-body">
                    <div class="col-12 col-s-12 padding-box">
                        <label for="txtright">Tên khách hàng: </label>
                        <span> {{ $khachhang->tenKhachHang }}</span>
                    </div>
                    <div class="col-12 col-s-12 padding-box">
                        <label for="txtright">Địa chỉ: </label>
                        <span> {{ $khachhang->diaChi }}</span>
                    </div>
                    <div class="col-12 col-s-12 padding-box">
                        <label for="txtright">Số điện thoại: </label>
                        <span> {{ $khachhang->sdt }}</span>
                    </div>
                    <div class="col-12 col-s-12 padding-box">
                        <label for="txtright">Email: </label>
                        <span> {{ $khachhang->email }}</span>
                    </div>




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

                                    <th>Mã chi tiết dơn hàng</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá cả</th>

                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($donhang as $dm)
                                    <tr>

                                        <td>{{ $dm->maChiTietDonHang }}</td>
                                        <td>{{ $dm->maDonHang }}</td>
                                        <td>{{ $dm->sanp_name }}</td>
                                        <td>{{ $dm->soLuong }}</td>
                                        <td>{{ $dm->gia }}</td>
                                        <td style="width:30px"> <i data-url="{{ route('chitiet.update', $dm->maChiTietDonHang) }}"​
                                                type="button" data-target="#edit" data-toggle="modal" class='fas fa-edit'
                                                style='font-size:18px'></i>
                                        </td>
                                        <td style="width:30px" ><a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('chitietdonhang.delete',$dm->maChiTietDonHang)}}"><i  style='font-size:18px; color:black' class="fas fa-trash"></i></a></td>
                                        <td style="width:30px"> <a href="{{ route('chitiet.update', $dm->maChiTietDonHang) }}"​
                                                style='font-size:18px'><i type="button" style="color: black"
                                                    class='fas fa-eye' style='font-size:18px'></i></a>
                                        </td>

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
                    @include('Admin.donhang.chitiet.edit')
                    @include('Admin.donhang.chitiet.add')

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {


            // $('#form-add').submit(function(e) {

            //     e.preventDefault();

            //     var url = $(this).attr('data-url');

            //     $.ajax({
            //         type: 'post',
            //         url: url,
            //         data: {
            //             hoten: $('#hoten-add').val(),
            //             gioitinh: $('#gioitinh-add').val(),
            //             ngaysinh: $('#ngaysinh-add').val(),
            //             sdt: $('#sdt-add').val(),
            //             diachi: $('#diachi-add').val(),
            //         },
            //         success: function(response) {
            //             toastr.success(response.message)
            //             $('#modal-add').modal('hide');
            //             console.log(response.data)
            //             $('tbody').prepend('<tr><td id="' + response.data.id + '">' + response
            //                 .data.id + '</td><td id="hoten-' + response.data.id + '">' +
            //                 response.data.hoten + '</td><td id="gioitinh-' + response.data
            //                 .id + '">' + response.data.gioitinh + '</td><td id="ngaysinh-' +
            //                 response.data.id + '">' + response.data.ngaysinh +
            //                 '</td><td id="sdt-' + response.data.id + '">' + response.data
            //                 .sdt + '</td><td id="diachi-' + response.data.id + '">' +
            //                 response.data.diachi +
            //                 '</td><td><button data-url="{{ asset('') }}studentajax/' +
            //                 response.data.id +
            //                 '"​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button><button style="margin-left: 5px;" data-url="{{ asset('') }}studentajax/' +
            //                 response.data.id +
            //                 '"​ type="button" data-target="#edit" data-toggle="modal" class="btn btn-warning btn-edit">Edit</button><button style="margin-left: 5px;" data-url="{{ asset('') }}studentajax/' +
            //                 response.data.id +
            //                 '"​ type="button" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-delete">Delete</button></td></tr>'
            //                 );


            //         },
            //         error: function(jqXHR, textStatus, errorThrown) {
            //             //xử lý lỗi tại đây
            //         }
            //     })
            // })

            $('.btn-delete').click(function() {
                var url = $(this).attr('data-url');
                var _this = $(this);
                if (confirm('Bạn có chắc muốn xoá không?')) {
                    $.ajax({
                        type: 'delete',
                        url: url,
                        success: function(response) {
                            toastr.success('Delete student success!')
                            _this.parent().parent().remove();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            //xử lý lỗi tại đây
                        }
                    })
                }
            })

            $('.fa-edit').click(function(e) {

                var url = $(this).attr('data-url');

                $('#ct-edit').modal('show');

                e.preventDefault();

                $.ajax({
                    //phương thức get
                    type: 'get',
                    url: url,
                    success: function(response) {
                        //đưa dữ liệu controller gửi về điền vào input trong form edit.
                        $('#soluong-edit').val(response.data.soLuong);
                        $('#sanpham-edit').val(response.data.sanp_id);
                        $('#gia-edit').val(response.data.gia);
                        $('#id-edit').val(response.data.maChiTietDonHang);
                        //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
                        // $('#form-edit').attr('data-url', '{{ asset('danhmuc/') }}/' +
                        //     response.data.danhmuc_id)
                    },
                    error: function(error) {

                    }
                })
            })


            // $('#myModal').submit(function(e){
            // 	e.preventDefault();
            // 	var url=$(this).attr('data-url');

            // 	$.ajax({
            // 		type: 'put',
            // 		url: url,
            // 		data: {
            // 			danhmuc_name: $('#danhmuc_name').val(),

            // 		},
            // 		success: function(response) {
            // 			// console.log(response.studentid)
            // 			toastr.success(response.message)
            // 			$('#myModal').modal('hide');
            // 			$('#danhmuc_name-'+response.studentid).text(response.danhmuc.danhmuc_name)

            // 		},
            // 		error: function (jqXHR, textStatus, errorThrown) {
            // 			//xử lý lỗi tại đây
            // 		}
            // 	})
            // })
        })
    </script>
@endsection
