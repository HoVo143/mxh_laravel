@extends('client.layout.indexlayout')
@section('title')
    Product | Earth
@endsection

@section('content')
    <section class="products">
        <div class="left_product">
            <ul>
                <li><a href="#"><i class="fa-solid fa-bars"></i> Danh mục sản phẩm: </a></li>
                <li><a href="#">Laptop văn phòng</a></li>
                <li><a href="#">Laptop Gaming</a></li>
                <li><a href="#">Apple</a></li>
                <li><a href="#">PC văn phòng </a></li>
                <li><a href="#">PC Gaming</a></li>      
                <li><a href="#">Liên hệ</a></li>
            </ul>
            {{--  --}}
            <ul class="carts">
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</a></li>
            </ul>
        </div>
        <div class="right_product">

            <div class="wrappers_images_product">
                <div class="pdmySlides">
                    <img src="{{asset('img/gaming-gear-2.jpg')}}" style="width:100%" class="img-first">
                    <div class="pdmySlides-title">
                        <h3>managing & <br> protecting wealth</h3>
                        <p>For over 55 years we have been helping medical and dental professionals grow,
                            manage and protect their wealth. Whether you are a young medical student or
                            a well-established professional, our expert consultants are here to guide 
                            you on your financial journey.</p>
                        <button>Get started</button>
                    </div>
                </div>
              
                <div class="pdmySlides">
                  <img src="{{asset('img/gaming-gear-1.jpg')}}" style="width:100%">
                  <div class="pdmySlides-title right">
                    <h3>I am a doctor <br> in training</h3>
                    <p>For over 55 years we have been helping medical and dental professionals grow,
                        manage and protect their wealth. Whether you are a young medical student or
                        a well-established professional, our expert consultants are here to guide 
                        you on your financial journey.</p>
                    <button>Get started</button>
                </div>
                </div>
                <a class="prev" onclick="plusSlidesImgs(-1)">❮</a>
                <a class="next" onclick="plusSlidesImgs(1)">❯</a>
              </div>
            <div class="wrapper_product_list">
                <div class="name_title">
                    <h2>LAPTOP GAMING MỚI</h2>
                    <div class="border_bottom">
                        <span> 
                            <div class="hrs"></div> 
                            <div class="chamleft"></div> 
                            <div class="chamgiua"></div> 
                            <div class="chamright"></div>
                            <div class="hrs"></div> 
                        </span>
                    </div>
                </div>
                <div class="product_list">    
                    <div class="row_product">
                        <div class="item_product">
                            <span class="ribbon">NEW</span>
                            <div class="img_category">
                                <img src="{{asset('img/laptop.webp')}}">
                            </div>
                            <h3>Laptop gaming Gigabyte G5 GD 51VN123SO</h3>
                            
                        </div>
                        <div class="item_product">
                            <span class="ribbon">NEW</span>
                            <div class="img_category">
                                <img src="{{asset('img/laptop.webp')}}">
                            </div>
                            <h3>Laptop gaming Gigabyte G5 GD 51VN123SO</h3>
                        
                        </div>
                        <div class="item_product">
                            <span class="ribbon">NEW</span>
                            <div class="img_category">
                                <img src="{{asset('img/laptop.webp')}}">
                            </div>
                            <h3>Laptop gaming Gigabyte G5 GD 51VN123SO</h3>
                        
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="wrapper_product_list">
                <div class="name_title">
                    <h2>MÀN HÌNH KHUYẾN MÃI HOT - GIAO HÀNG MIỄN PHÍ</h2>
                    <div class="border_bottom">
                        <span> 
                            <div class="hrs"></div> 
                            <div class="chamleft"></div> 
                            <div class="chamgiua"></div> 
                            <div class="chamright"></div>
                            <div class="hrs"></div> 
                        </span>
                    </div>
                    <p>Một số màn hình mới. <a href="#">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a></p>
                </div>


                <div class="product_list">    
                    <div class="row_product_2">
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div>
            </div>

            {{--  --}}
            <div class="wrapper_product_list">
                <div class="name_title">
                    <h2>CHUỘT KHUYẾN MÃI HOT - GIAO HÀNG MIỄN PHÍ</h2>
                    <div class="border_bottom">
                        <span> 
                            <div class="hrs"></div> 
                            <div class="chamleft"></div> 
                            <div class="chamgiua"></div> 
                            <div class="chamright"></div>
                            <div class="hrs"></div> 
                        </span>
                    </div>
                    <p><a href="#">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a></p>
                </div>


                <div class="product_list">    
                    <div class="row_product_2">
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                        <div class="product_items">
                            <a href="#"><img src="{{asset('img/laptop.webp')}}" alt="Denim Jeans" style="width:100%"></a>
                            <a href="#"><h1>Tailored Jeans</h1></a>
                            <p class="price">$19.99</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let slideIndex_img = 1;
        showSlidesImgs(slideIndex_img);

        function plusSlidesImgs(n) {
        showSlidesImgs(slideIndex_img += n);
        }

        function currentSlideImgs(n) {
        showSlidesImgs(slideIndex_img = n);
        }

        function showSlidesImgs(n) {
        let i;
        let slideImgs = document.getElementsByClassName("pdmySlides");
        let dotImgs = document.getElementsByClassName("demo");
        if (n > slideImgs.length) {slideIndex_img = 1}
        if (n < 1) {slideIndex_img = slideImgs.length}
        for (i = 0; i < slideImgs.length; i++) {
            slideImgs[i].style.display = "none";
        }
        for (i = 0; i < dotImgs.length; i++) {
            dotImgs[i].className = dotImgs[i].className.replace(" active", "");
        }
        slideImgs[slideIndex_img-1].style.display = "block";
        dotImgs[slideIndex_img-1].className += " active";
        }
    </script>
@endsection

