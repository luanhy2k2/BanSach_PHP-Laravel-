{{-- <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Sửa loại sản phẩm</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('loaisp.edit') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã loại sản phẩm:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="id" type="text" value="" id="id"
                                placeholder="Mã loại sản phẩm" class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Tên loại sản phẩm:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="name" type="text" placeholder="Tên loại sản phẩm"
                                class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã danh mục:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="danhMucId" type="text" placeholder="Mã danh mục"
                                class="col-xs-10 col-sm-5" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn-form">Sửa loại sản phẩm</button>
                    </div>

                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div> --}}

<div class="modal" id="modal-edit">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Sửa loại sản phẩm</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{route('loaisp.edit')}}" id="form-edit" method="POST" role="form">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã loại sản phẩm:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="id" type="text"  id="id-edit"
                                placeholder="Mã loại sản phẩm" class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Tên loại sản phẩm:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input id="name-edit" name="name" type="text" placeholder="Tên loại sản phẩm"
                                class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã danh mục:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input id="danhmuc-edit" name="danhMucId" type="text" placeholder="Mã danh mục"
                                class="col-xs-10 col-sm-5" />
                        </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn-form">Sửa danh mục</button>
                    </div>

                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>