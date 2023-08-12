@extends('Admin.AdminLayout')
@section('layoutAdmin')
    <div class="col-11 col-s-12 content">
        <div style="margin-left: -50px" class="col-4 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Quản lý thông tin Nhà xuất bản
                    <hr>
                </div>
                <div>
                    <button style="width:140px;" class="btn-form" type="button" class="btn btn-info btn-lg"
                        data-bs-toggle="modal" data-bs-target="#add">Thêm Nhà xuất bản</button>
                    <button style="width:140px;" class="btn-form" type="button" class="btn btn-info btn-lg"
                        data-bs-toggle="modal" data-bs-target="#myModal">Sửa Nhà xuất bản</button>
                    <button style="width:140px;" class="btn-form" type="button" class="btn btn-info btn-lg"
                        data-bs-toggle="modal" data-bs-target="#delete">Xoá Nhà xuất bản</button>

                </div>

            </div>
        </div>
        <div class="col-8 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Danh sách Nhà xuất bản

                    <hr>
                </div>
                <div class="row">
                    <form>
                        <div class="col-10 col-s-12 padding-box">
                            <input name="tenloai" ng-model="tenloai" type="text" placeholder="Nhập mã, tên thể loại...">
                        </div>
                        <div class="col-2 col-s-12 padding-box">
                            <button type="submit" ng-click="TimKiem(tenloai)"><i class="fas fas fa-search"></i> Tìm
                                kiếm</button>
                        </div>
                    </form>

                </div>

                <div class="row">

                    <div class="col-12 col-s-12 padding-box">

                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Mã Nhà xuất bản</th>
                                    <th>Tên Nhà xuất bản</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>


                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($nhasx as $dm)
                                    <tr>

                                        <td>{{ $dm->nsx_id }}</td>
                                        <td>{{ $dm->nsx_name }}</td>
                                        <td>{{ $dm->diaChi }}</td>
                                        <td>{{ $dm->sdt }}</td>
                                        <td style="width:30px"> <i data-url="{{ route('nhasx.update', $dm->nsx_id) }}"​
                                                type="button" data-target="#edit" data-toggle="modal" class='fas fa-edit'
                                                style='font-size:18px'></i>
                                        </td>
                                        <td style="width:30px" ><a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('nhasx.delete',$dm->nsx_id)}}"><i  style='font-size:18px; color:black' class="fas fa-trash"></i></a></td>

                                    </tr>
                                @endforeach



                            </tbody>


                        </table>


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
                    @include('Admin.nhasx.edit')
                    @include('Admin.nhasx.add')
                    @include('Admin.nhasx.delete')
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

                $('#modal-edit').modal('show');

                e.preventDefault();

                $.ajax({
                    //phương thức get
                    type: 'get',
                    url: url,
                    success: function(response) {
                        //đưa dữ liệu controller gửi về điền vào input trong form edit.
                        $('#name-edit').val(response.data.nsx_name);
                        $('#id-edit').val(response.data.nsx_id);
                        $('#diachi-edit').val(response.data.diaChi);
                        $('#sdt-edit').val(response.data.sdt);
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
