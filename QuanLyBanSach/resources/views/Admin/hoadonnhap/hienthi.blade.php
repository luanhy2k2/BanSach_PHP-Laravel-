@extends('Admin.AdminLayout')
@section('layoutAdmin')
    <div class="col-11 col-s-12 content">
        <div style="margin-left: -50px" class="col-4 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Quản lý thông tin hoá đơn nhập
                    <hr>
                </div>
                <div>
                    <button style="width:140px;" class="btn-form" type="button" class="btn btn-info btn-lg"
                        data-bs-toggle="modal" data-bs-target="#add">Thêm hoá đơn</button>
                    <button style="width:140px;" class="btn-form" type="button" class="btn btn-info btn-lg"
                        data-bs-toggle="modal" data-bs-target="#myModal">Sửa hoá đơn</button>
                    <button style="width:140px;" class="btn-form" type="button" class="btn btn-info btn-lg"
                        data-bs-toggle="modal" data-bs-target="#delete">Xoá hoá đơn</button>

                </div>

            </div>
        </div>
        <div class="col-8 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Danh sách hoá đơn bán

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

                                    <th>Mã hoá đơn</th>
                                    <th>Tên nhân viên</th>
                                    <th>Ngày nhập</th>
                                    <th>Nhà xuất bản</th>


                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($hdn as $dm)
                                    <tr>

                                        <td>{{ $dm->soHoaDon }}</td>
                                        <td>{{ $dm->nguoidung->hoTen }}</td>
                                        <td>{{ $dm->ngayNhap }}</td>
                                        <td>{{ $dm->nsx_id }}</td>
                                        
                                        <td><a href="{{ route('hoadonnhap.chitiet', $dm->soHoaDon) }}"><i type="button"
                                                    style="color: black" class='fas fa-eye' style='font-size:18px'></i></a>
                                        </td>
                                        <td style="width:30px"><a onclick="return confirm('Bạn có muốn xóa không?')"
                                                href="{{ route('hoadonban.delete', $dm->soHoaDon) }}"><i
                                                    style='font-size:18px; color:black' class="fas fa-trash"></i></a></td>
                                     
                                        <td style="width:30px"><a onclick="return confirm('Bạn có muốn xuất hoá đơn không?')"
                                                href="{{ route('hoadonban.addhoadon', $dm->soHoaDon) }}"><i
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
                    
                    {{-- @include('Admin.sanpham.edit') --}}
                    @include('Admin.hoadonnhap.add')
                    {{-- @include('Admin.sanpham.delete') --}}
                </div>
            </div>
        </div>
    </div>
@endsection
