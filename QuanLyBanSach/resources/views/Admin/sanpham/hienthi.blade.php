@extends('Admin.AdminLayout')
@section('layoutAdmin')
    <div class="col-11 col-s-12 content">
        <div style="margin-left: -50px" class="col-4 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Quản lý thông tin sản phẩm
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
                    <i class="fas fas fa-boxes"></i> Danh sách tác phẩm

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

                                    <th>Mã sách</th>
                                    <th>Tên sách</th>
                                    <th>Loại sản phẩm</th>
                                    <th>Nhà sản xuất</th>
                                    <th>Năm sản xuất</th>
                                    <th>size</th>
                                    <th>Số trang</th>
                                    <th>Tác giả</th>
                                 
                                    <th>Tóm tắt</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá cả</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($sanpham as $dm)
                                    <tr>

                                        <td>{{ $dm->sanp_id }}</td>
                                        <td>{{ $dm->sanp_name }}</td>
                                        <td>{{ $dm->loaisp->loai_name }}</td>
                                        <td>{{ $dm->nhasx->nsx_name }}</td>
                                        <td>{{ $dm->namsx }}</td>
                                        <td>{{ $dm->size }}</td>
                                        <td>{{ $dm->soTrang }}</td>
                                        <td>{{ $dm->tg->tG_name }}</td>
                                        
                                     
                                        <td>...</td>
                                        <td><img style="width:100px" src="/front/DoAn2/image/book/{{ $dm->image }}"
                                                alt=""></td>
                                        <td>{{ $dm->giaca->gia }}</td>
                                        <td style="width:30px"> <i data-url="{{ route('sanpham.update', $dm->sanp_id) }}"​
                                                type="button" data-target="#edit" data-toggle="modal" class='fas fa-edit'
                                                style='font-size:18px'></i>
                                        </td>
                                        <td style="width:30px" ><a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('sanpham.delete',$dm->sanp_id)}}"><i  style='font-size:18px; color:black' class="fas fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                                <!-- Display pagination links -->
                               


                            </tbody>


                        </table>
                        <div class="col-12 col-s-12 padding-box">
                            <div class="box-sum">
    
                                <div style="margin-left: 0px; margin-top:-10px" class="box-right">
                                    {{$sanpham->appends(request()->all())->links()}}
                                </div>
                            </div>
                        </div>
                        {{-- {{$sanpham->appends(request()->all())->links()}} --}}



                    </div>
                    
                    @include('Admin.sanpham.edit')
                    @include('Admin.sanpham.add')
                    @include('Admin.sanpham.delete')
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
                        $('#name-edit').val(response.data.sanp_name);
                        $('#id-edit').val(response.data.sanp_id);
                        $('#size-edit').val(response.data.size);
                        $('#tg-edit').val(response.data.tg_id);
                        $('#loai-edit').val(response.data.loai_id);
                        $('#nsx_id-edit').val(response.data.nsx_id);
                        $('#sotrang-edit').val(response.data.soTrang);
                        $('#tomtat-edit').val(response.data.tomTat);
                        $('#namsx-edit').val(response.data.namsx);
                        $('#image-edit').val(response.data.image);
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
