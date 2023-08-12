<div class="modal" id="add">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm tác giả</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('tacgia.add') }}" method="get">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã tác giả:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="id" type="text" id="id" placeholder="Mã tác giả"
                                class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Tên tác giả:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="name" type="text" placeholder="Tên tác giả"
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
                            <label for="txtright">Email:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="email" type="text" placeholder="email"
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
                        <button type="submit" class="btn-form">Thêm tác giả</button>
                    </div>

                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>