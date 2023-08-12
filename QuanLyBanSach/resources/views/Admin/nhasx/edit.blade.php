<div class="modal" id="modal-edit">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Sửa nhà xuất bản</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('nhasx.edit') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã Nhà xuất bản:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="id" type="text" id="id-edit" placeholder="Mã Nhà xuất bản"
                                class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Tên Nhà xuất bản:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input id="name-edit" name="name" type="text" placeholder="Tên Nhà xuất bản"
                                class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Địa chỉ:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="diaChi" id="diachi-edit" type="text" placeholder="Địa chỉ" class="col-xs-10 col-sm-5" />
                        </div>

                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Số điện thoại:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="sdt" id="sdt-edit" type="text" placeholder="Số điện thoại"
                                class="col-xs-10 col-sm-5" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn-form">Sửa nhà xuất bản</button>
                    </div>

                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>
