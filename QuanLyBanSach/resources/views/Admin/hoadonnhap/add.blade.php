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
                <form action="{{ route('hoadonnhap.addhoadon') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã người dùng:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="maNguoiDung" type="text" id="id" placeholder="Mã người dùng" class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Nhà sản xuất:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="nsx_id" type="text" id="form-field-1" placeholder="Tên sách" class="col-xs-10 col-sm-5" />
                        </div>

                       
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn-form">Thêm hoá đơn</button>
                    </div>

                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>