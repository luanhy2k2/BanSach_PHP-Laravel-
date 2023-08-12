
@extends('Home.form.layoutChiTiet')
@section('layoutChiTiet')
<div class="bodi">
    <div class="container">
        <div class="bookdetailwrap">          
            <div class="bookdetail">
                <a class="image image" href="#">
                    
                    <img style="height:90%; width: 75%;" src="/front/DoAn2/image/book/{{$sanpham->image}}">
                    
                    
                </a>
        
                <div class="info">
        
                    <h1>
                        <a href="#">{{$sanpham->sanp_name}}</a>
                    </h1>

                    <div class="intro">
        
                        <div class="attributes">
                            <ul>
        
                                <li class="dataattr">
                                    Mã sản phẩm:
                                    <a href="#">{{$sanpham->sanp_id}}</a>
                                </li>
                                <li class="dataattr">
                                    Tác giả: 
                                    <a href="#"> {{$sanpham->tG_name}}</a>
                                </li>
                                
                                <li class="dataattr">
                                    Nhà xuất bản:
                                    <a href="/#"> {{$sanpham->nsx_name}} </a>
                                </li>
                            </ul>
        
                            <ul>
                                <li>Số trang: {{$sanpham->soTrang}} </li>
                                <li>Kích thước: {{$sanpham->size}} cm</li>
                                <li>Ngày phát hành: {{$sanpham->namsx}} </li>
                            </ul>
        
                            
        
                        </div>
        
        
                        <div class="action">
        
                                <div class="price">
                                    <p class="oldprice">
                                        Giá bìa:  <span>96.000đ</span>
                                    </p>
                                    
                                    <p>Giá Nhã Nam: <span>{{number_format($sanpham->gia)}}đ</span> (Đã có VAT)</p>
        
        
        
        
                                </div>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $sanpham->sanp_id }}" name="sanp_id">
                                    <input type="hidden" value="{{ $sanpham->sanp_name }}" name="sanp_name">
                                    <input type="hidden" value="{{ $sanpham->gia }}" name="price">
                                    <input type="hidden" value="{{ $sanpham->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="button">Thêm vào giỏ hàng</button>
                                    
                                </form>
                                <a href="#" class="button">Mua ngay</a>
                            
                        </div>
        
                    </div>
        
        
        
        
                </div>
        
        
        
            </div>
            <div class="bookdetailblockcontent">
                <h1> Giới thiệu sách</h1> <br>
                <h4>
                    Sơ lược về tác phẩm
                </h4>
                <p>
                    Cuốn sách này chứa đựng chính xác những gì lâu nay ta vẫn muốn biết về tình yêu: không thiếu ảo tưởng nhưng 
                    cũng đầy sáng suốt, mê đắm nhưng biết giữ khoảng cách, nồng nhiệt và rất hài hước nhưng cùng lúc ngập tràn 
                    phân tích lạnh lùng. Chính khía cạnh “phân tích” này làm nên sự hấp dẫn nhất của Luận về yêu, vì tác giả đã sử 
                    dụng những triết thuyết tưởng chừng khô cứng để tiếp cận tình yêu một cách thấu đáo, từ rất nhiều phương diện, kể cả những phương diện mà những người đang yêu thường muốn giấu kín.
                </p>
                <br>
                <p>
                    Luận về yêu, tác phẩm thời trẻ của Alain de Botton, hiện nay là một nhà văn, triết gia và diễn giả nổi tiếng thế giới, 
                    còn đặc biệt hấp dẫn vì tùy theo tạng riêng của mình, độc giả có thể đọc nó như một tập tiểu luận sâu sắc, hoặc như một cuốn tiểu thuyết vô cùng hấp dẫn và không hề thiếu kịch tính.
                </p>
                <br>
                <h4>
                    Nhận định
                </h4>
                <p>
                    “Trong một cuốn tiểu thuyết đầu tay khéo léo và đầy mỉa mai, có thể nói rằng Alain de Botton đã cầm tiếp ngọn đuốc ở nơi Stendhal để nó lại.”<br>
                    - The New Republic
                </p>
                <br>
                <p>
                    “[Cuốn sách] thông minh, hài hước, tinh tế, có kết cấu khéo léo, rất thông thái, với những soi rọi đặc biệt sáng suốt.” <br>
                    - The Spectator
                </p>
            </div>
        
        
            
                
        </div>
    </div>
                  
                    

    
</div>
@endsection