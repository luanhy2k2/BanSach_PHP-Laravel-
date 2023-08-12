<div class="modal" id="modal-edit">
                        <div class="modal-dialog modal-dialog-centered">

                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Sửa thông tin sản phẩm</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="{{ route('sanpham.edit' ) }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Mã sách:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="id" type="text" id="id-edit" placeholder="Mã sách" class="col-xs-10 col-sm-5" />
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Tên sách:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="name" type="text" id="name-edit" placeholder="Tên sách" class="col-xs-10 col-sm-5" />
                                            </div>
                    
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Size:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="size" type="text" id="size-edit" placeholder="Size" class="col-xs-10 col-sm-5" />
                                            </div>
                    
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Tác giả:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="tgId" type="text" id="tg-edit" placeholder="Tác giả" class="col-xs-10 col-sm-5" />
                                            </div>
                    
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Loại sản phẩm:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="loaiId" type="text" id="loai-edit" placeholder="Loại sản phẩm" class="col-xs-10 col-sm-5" />
                                            </div>
                    
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Nhà xuất bản:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="nsxId" type="text" id="loai-edit" placeholder="Nhà xuất bản" class="col-xs-10 col-sm-5" />
                                            </div>
                    
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Số trang:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="soTrang" type="text" id="sotrang-edit" placeholder="Số trang" class="col-xs-10 col-sm-5" />
                                            </div>
                    
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Tóm tắt:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="tomtat" type="text" id="tomtat-edit" placeholder="Tóm tắt" class="col-xs-10 col-sm-5" />
                                            </div>
                    
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Năm sản xuất:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="namsx" type="text" id="namsx-edit" placeholder="Năm sản xuất" class="col-xs-10 col-sm-5" />
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Ảnh:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="image" type="file" id="image-edit" placeholder="Năm sản xuất" class="col-xs-10 col-sm-5" />
                                            </div>
                                            {{-- <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Giá cả:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input ng-model="gia" type="text" id="form-field-1" placeholder="Giá cả" class="col-xs-10 col-sm-5" />
                                            </div> --}}
                    
                                            {{-- <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ảnh đại diện</label>
                                                <div class="col-sm-9">
                                                    <input type="file" file="file" id = "file"/>
                                                </div>
                                            </div> --}}
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn-form">Sửa sản phẩm</button>
                                        </div>

                                    </form>
                                </div>

                                <!-- Modal footer -->


                            </div>
                        </div>
                    </div>