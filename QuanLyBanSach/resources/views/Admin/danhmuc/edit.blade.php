<div class="modal" id="modal-edit">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Sửa danh mục</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{route('danhmuc.edit')}}" id="form-edit" method="POST" role="form">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã danh mục:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="id" type="text" class="col-xs-10 col-sm-5" id="id-edit" placeholder="Nhập vào mã danh mục">
                            
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Tên danh mục:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="name" type="text" class="col-xs-10 col-sm-5" id="name-edit" placeholder="Nhập vào tên danh mục">
                            
                        </div>
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
{{-- <div class="modal" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="" id="form-edit" method="POST" role="form">
                <div class="modal-header">
                    <h4 class="modal-title">Cập nhật</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Mã danh mục</label>
                        <input type="text" class="form-control" id="id-edit" placeholder="Nhập vào mã danh mục">
                    </div>



                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" class="form-control" id="name-edit" placeholder="Nhập vào tên danh mục">
                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>

                </div>
            </form>
        </div>
    </div>
</div> --}}
