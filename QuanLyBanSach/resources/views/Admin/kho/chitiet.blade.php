@extends('Admin.AdminLayout')
@section('layoutAdmin')

    <div class="col-11 col-s-12 content">
        <div style="margin-left: -50px" class="col-4 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Thông tin kho
                    <hr>
                </div>
                <div class="modal-body">
                    <div class="col-12 col-s-12 padding-box">
                        <label for="txtright">Mã kho:   </label>
                        <span>   {{    $kho->maKho}}</span>
                    </div>
                    <div class="col-12 col-s-12 padding-box">
                        <label for="txtright">Tên kho:   </label>
                        <span>   {{    $kho->tenKho}}</span>
                    </div>
                    
                   

                   
                </div>

            </div>
        </div>
        <div class="col-8 col-s-12 content">
            <div class="tabcontent">
                <div class="title">
                    <i class="fas fas fa-boxes"></i> Danh sách chi tiết kho

                    <hr>
                </div>
                <div class="row">
                    <form>
                        <div class="col-10 col-s-12 padding-box">
                            <input name="key"  type="text" placeholder="Nhập mã, tên thể loại...">
                        </div>
                        <div class="col-2 col-s-12 padding-box">
                            <button type="submit" ><i class="fas fas fa-search"></i> Tìm
                                kiếm</button>
                        </div>
                    </form>

                </div>

                <div class="row">

                    <div class="col-12 col-s-12 padding-box">

                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Mã chi tiết kho</th>
                                 
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                  

                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($ctkho as $dm)
                                    <tr>

                                        <td>{{ $dm->maChiTietKho }}</td>
                                        <td>{{ $dm->sanp_id }}</td>
                                        <td>{{$dm->soLuong}}</td>
                                        <td style="width:30px" ><a onclick="return confirm('Bạn có muốn xóa không?')" 
                                            href="{{route('chitietkho.delete',$dm->maChiTietKho)}}"><i  style='font-size:18px;
                                             color:black' class="fas fa-trash"></i></a></td>
                                       
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
                    {{-- @include('Admin.sanpham.edit')
                    @include('Admin.sanpham.add')
                    @include('Admin.sanpham.delete') --}}
                </div>
            </div>
        </div>
    </div>
@endsection
