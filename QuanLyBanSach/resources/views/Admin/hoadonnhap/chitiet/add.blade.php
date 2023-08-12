<script>
    var editor = CKEDITOR.replace('txtContent', { customConfig: '\front\ckeditor\config.js', });
</script>
<div class="modal" id="add">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm đơn hàng</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('hoadonnhap.addchitiet') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã hoá đơn:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="soHoaDon" type="text" id="id" placeholder="Mã sách" class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã sách:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="sanp_id" type="text" id="id" placeholder="Mã sách" class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Số lượng:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="soLuong" type="text" id="form-field-1" placeholder="Tên sách" class="col-xs-10 col-sm-5" />
                        </div>

                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Đơn giá:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="donGia" type="text" id="form-field-1" placeholder="Size" class="col-xs-10 col-sm-5" />
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
                        <button type="submit" class="btn-form">Thêm chi tiết hoá đơn</button>
                    </div>

                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>