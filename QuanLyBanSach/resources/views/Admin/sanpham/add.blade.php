<style>
    .mains .row .content .tabcontent .row .padding-box span {
    background-color:aliceblue;
    color: black;
}
}
    </style>
<div class="modal" id="add">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm sản phẩm</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('sanpham.add') }}" method="get">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Mã sách:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="id" type="text" id="id" placeholder="Mã sách" class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Tên sách:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="name" type="text" id="form-field-1" placeholder="Tên sách" class="col-xs-10 col-sm-5" />
                        </div>

                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Size:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="size" type="text" id="form-field-1" placeholder="Size" class="col-xs-10 col-sm-5" />
                        </div>

                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Tác giả:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <select name="tgId" class="col-xs-10 col-sm-10">
                                @foreach ($tg as $tg)
                                    <option value="{{$tg->tG_id}}">{{$tg->tG_name}}</option>
                                @endforeach
                            </select>
                            {{-- <input name="tgId" type="text" id="form-field-1" placeholder="Tác giả" class="col-xs-10 col-sm-5" /> --}}
                        </div>

                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Loại sản phẩm:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <select name="loaiId" class="col-xs-10 col-sm-10">
                                @foreach ($loaisp as $loaisp)
                                    <option value="{{$loaisp->loai_id}}">{{$loaisp->loai_name}}</option>
                                @endforeach
                            </select>
                            {{-- <input name="loaiId" type="text" id="form-field-1" placeholder="Loại sản phẩm" class="col-xs-10 col-sm-5" /> --}}
                        </div>

                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Nhà xuất bản:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <select name="nsxId" class="col-xs-10 col-sm-10">
                                @foreach ($nhasx as $nhasx)
                                    <option value="{{$nhasx->nsx_id}}">{{$nhasx->nsx_name}}</option>
                                @endforeach
                            </select>
                            {{-- <input name="nsxId" type="text" id="form-field-1" placeholder="Nhà xuất bản" class="col-xs-10 col-sm-5" /> --}}
                        </div>

                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Số trang:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="soTrang" type="text" id="form-field-1" placeholder="Số trang" class="col-xs-10 col-sm-5" />
                        </div>

                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Tóm tắt:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                           <textarea style="background-color: " class="col-xs-10 col-sm-5" id = "txtContent" name="tomtat"></textarea>
                            {{-- <input name="tomtat" type="text" id="form-field-1" placeholder="Tóm tắt" class="col-xs-10 col-sm-5" /> --}}
                        </div>

                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Năm sản xuất:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="namsx" type="date" id="form-field-1" placeholder="Năm sản xuất" class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Giá:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="gia" type="text" id="form-field-1" placeholder="Giá sản phẩm" class="col-xs-10 col-sm-5" />
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <label for="txtright">Ảnh:</label>
                        </div>
                        <div class="col-12 col-s-12 padding-box">
                            <input name="image" type="file" id="file" class="col-xs-10 col-sm-5" />
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn-form">Thêm sản phẩm</button>
                        </div>
                        
                    </div>

                    

                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>
<script type="text/javascript">
    CKEDITOR.replace('txtContent');
</script>