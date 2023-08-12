<div class="modal" id="ct-edit">
                        <div class="modal-dialog modal-dialog-centered">

                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Sửa thông tin chi tiết đơn hàng</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="{{ route('chitiet.edit' ) }}" method="post">
                                        
                                        <div class="modal-body">
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Mã chi tiết:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="id" type="text" id="id-edit" placeholder="Mã sách" class="col-xs-10 col-sm-5" />
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Mã sách:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="name" type="text" id="sanpham-edit" placeholder="Mã sách" class="col-xs-10 col-sm-5" />
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Số lượng:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="soLuong" type="text" id="soluong-edit" placeholder="Mã sách" class="col-xs-10 col-sm-5" />
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <label for="txtright">Giá cả:</label>
                                            </div>
                                            <div class="col-12 col-s-12 padding-box">
                                                <input name="gia" type="text" id="gia-edit" placeholder="Mã sách" class="col-xs-10 col-sm-5" />
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
                                        @csrf
                                        <div class="modal-footer">
                                            <button type="submit" class="btn-form">Sửa sản phẩm</button>
                                        </div>

                                    </form>
                                </div>

                                <!-- Modal footer -->


                            </div>
                        </div>
                    </div>