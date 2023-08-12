<div class="modal" id="add">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm Nhà xuất bản</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('nhasx.add') }}" method="get">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã nhà xuất bản:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="id" type="text" id="id" placeholder="Mã Nhà xuất bản"
                                class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Tên Nhà xuất bản:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="name" type="text" placeholder="Tên Nhà xuất bản"
                                class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Địa chỉ:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="diaChi" type="text" placeholder="Địa chỉ"
                                class="col-xs-10 col-sm-5" />
                        </div>
                       
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Số điện thoại:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="sdt" type="text" placeholder="Số điện thoại"
                                class="col-xs-10 col-sm-5" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn-form">Thêm nhà xuất bản</button>
                    </div>

                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>