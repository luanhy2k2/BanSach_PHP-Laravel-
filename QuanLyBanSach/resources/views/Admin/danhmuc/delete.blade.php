<div class="modal" id="delete">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Xoá danh mục</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('danhmuc.delte') }}" method="get">
                    @csrf
                    <div style="margin-top: -20px;" class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã danh mục:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="id" type="text" id="id" placeholder="Mã danh mục"
                                class="col-xs-10 col-sm-5" />
                        </div>
                       
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn-form">Xoá danh mục</button>
                    </div>

                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>