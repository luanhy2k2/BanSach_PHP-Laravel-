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
                                    <form action="{{ route('tacgia.edit' ) }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Mã tác giả:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="id" type="text" id="id-edit" placeholder="Mã tác giả"
                                                    class="col-xs-10 col-sm-5" />
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Tên tác giả:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="name" id="name-edit" type="text" placeholder="Tên tác giả"
                                                    class="col-xs-10 col-sm-5" />
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Địa chỉ:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="diaChi" id="diachi-edit" type="text" placeholder="Địa chỉ"
                                                    class="col-xs-10 col-sm-5" />
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Email:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="email" id="email-edit" type="text" placeholder="email"
                                                    class="col-xs-10 col-sm-5" />
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
                                            <button type="submit" class="btn-form">Sửa tác giả</button>
                                        </div>

                                    </form>
                                </div>

                                <!-- Modal footer -->


                            </div>
                        </div>
                    </div>