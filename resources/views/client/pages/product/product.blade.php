@extends('client.layout.indexlayout')
@section('title')
    Product | Earth
@endsection

@section('content')
    <section class="products">
        <div class="left_product">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li class="product"><a href="#">Sản phẩm:</a>
                    <ul class="product_list">
                        <li><a href="#">Trái cây nhập khẩu</a></li>
                        <li><a href="#">Trái cây Việt Nam</a></li>
                        <li><a href="#">Quà biếu tặng</a></li>
                        <li><a href="#">Đồ uống nhập khẩu </a></li>
                        <li><a href="#">Bánh kẹo </a></li>
                    </ul>
                </li>   
                    
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="right_product">
            <div class="wrapper_img">
                <div class="previ btn">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="next btn">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="slide active">
                    <img src="{{asset('img/traicay-1.jpg')}}" alt="anhtrangchu">
                </div>
                <div class="slide">
                    <img src="{{asset('img/traicay-2.jpg')}}" alt="anhtrangchu">
                </div>
                <div class="slide">
                    <img src="{{asset('img/traicay-5jpg.jpg')}}" alt="anhtrangchu">
                </div>
            </div>

            <div class="wrapper_product_list">
                <div class="categories">    
                    <div class="row_product">
                        <div class="item_product">
                            <div class="img_category">
                                <img src="{{asset('img/trainho.jpg')}}">
                            </div>
                            <h3>NHO MI</h3>
                            <p>
                                Chùm nho to, trái to ngọt, nhiều nước, ngọt và giòn, cuốn tươi xanh.
                            </p>
                        </div>
                        <div class="item_product">
                            <div class="img_category">
                                <img src="{{asset('img/traichuoi.jpg')}}">
                            </div>
                            <h3>CHUOI</h3>
                            <p>Được nhiều khách hàng lựa chọn bởi mùi vị và chất lượng, phù hợp là món quà ý nghĩa.</p>
                            {{-- <p><button>Add to Cart</button></p> --}}
                        </div>
                        <div class="item_product">
                            <div class="img_category">
                                <img src="{{asset('img/traidau.gif')}}">
                            </div>
                            <h3>DAU TAY</h3>
                            <p>Loại trái cây nhập khẩu chứa nhiều dưỡng chất, được nhập từ các nước như Úc, Mỹ, Canada, New Zealand.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="wrapper_product_list">
                <div class="name_categories">
                    <h2>TRÁI CÂY NHẬP KHẨU</h2>
                    <div class="border_bottom">
                        <span> 
                            <div class="hrs"></div> 
                            <div class="chamleft"></div> 
                            <div class="chamgiua"></div> 
                            <div class="chamright"></div>
                            <div class="hrs"></div> 
                        </span>
                    </div>
                    <p>Một số loại trái cây ngon</p>
                </div>


                <div class="categories">    
                    <div class="row_product">
                        <div class="item_product">
                            <div class="img_category">
                                <img src="{{asset('img/trainho.jpg')}}">
                            </div>
                            <h3>NHO MI</h3>
                            <p>
                                Chùm nho to, trái to ngọt, nhiều nước, ngọt và giòn, cuốn tươi xanh.
                            </p>
                        </div>
                        <div class="item_product">
                            <div class="img_category">
                                <img src="{{asset('img/traichuoi.jpg')}}">
                            </div>
                            <h3>CHUOI</h3>
                            <p>Được nhiều khách hàng lựa chọn bởi mùi vị và chất lượng, phù hợp là món quà ý nghĩa.</p>
                            {{-- <p><button>Add to Cart</button></p> --}}
                        </div>
                        <div class="item_product">
                            <div class="img_category">
                                <img src="{{asset('img/traidau.gif')}}">
                            </div>
                            <h3>DAU TAY</h3>
                            <p>Loại trái cây nhập khẩu chứa nhiều dưỡng chất, được nhập từ các nước như Úc, Mỹ, Canada, New Zealand.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection

