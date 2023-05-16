<div class="write-post-container">
    <div class="user-profile">
        <img src="{{ asset('img/ho_vo.jpg') }}" alt="">
        <div>
            <div class="">
                <a href="{{ route('profile') }}">
                    <p>Hồ Võ</p>
                </a>
            </div>
            <!-- <small>Public <i class="fa-solid fa-caret-down"></i></small> -->
            <div class="custom-select">
                <div class="select">
                    <select name="format" id="format">
                        <option value="Public">Công khai</option>
                        <option value="Private">Chỉ mình tôi</option>
                        <option value="Follower">Bạn bè</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="post-input-container">
        <textarea name="" id="" rows="3" placeholder="Bạn nghĩ gì ?"></textarea>
        <div class="add-post-links">
            <a href="#"><i class="fa-solid fa-video"></i> Video trực tiếp </a>
            <a href="#"><i class="fa-solid fa-camera"></i> Ảnh/Video </a>
            <a href="#"><i class="fa-regular fa-face-laugh"></i> Cảm xúc </a>
            {{-- <div class="post-btn">Post</div> --}}

            <a href="#"><button class="post-input">Đăng</button></a>
        </div>
    </div>
</div>


<!-- post-container chính -->
<div class="post-container">
    <div class="post-row">
        <div class="user-profile">
            <img src="{{ asset('img/ho_vo.jpg') }}" alt="">
            <div>
                <div>
                    <a href="{{ route('profile') }}">
                        <p class="name-user">Hồ Võ</p>
                    </a>
                </div>
                <span class="time">June 24 2021, 13:40 pm</span>
            </div>
        </div>
        <div class="post-right">
            <i class="fas fa-ellipsis-v" onclick="postrighsMenuToggle()"></i>

            <div class="posts" id="postss">
                <div class="post-fas-container" id="post-fas-container">
                    <div class="post-fas">
                        <ul>
                            {{-- <div class="remove-post" ><i class="fa-solid fa-xmark"></i></div> --}}
                            <li><i class="fa-solid fa-bookmark"></i>Lưu bài viết</li>
                            <li><i class="fa-regular fa-calendar-xmark"></i>Ẩn bài viết</li>
                            <li><i class="fa-regular fa-bell"></i>Bật thông báo bài viết này</li>
                            {{-- <li><i class="fa-solid fa-ban"></i>Unfollow</li> --}}
                            <li><i class="fa-solid fa-flag"></i>Báo cáo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-text">
        <p>
            <span>@HoVo</span>
            Mạng xã hội (social network) là
            Một trang web hay nền tảng trực tuyến với rất nhiều dạng thức và tính năng khác nhau,
            giúp mọi người dễ dàng kết nối từ bất cứ đâu.
            <a href="#">#HoVo</a>
            <a href="#">#DanhNguyen</a>
        </p>
    </div>
    {{-- mới nè --}}
    <div class="post-img">
        <div class="container-img">
            <div class="mySlides_img">
                <img src="{{ asset('img/web-developer.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides_img">
                <img src="{{ asset('img/ho_vo.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides_img">
                <img src="{{ asset('img/hoa.jpg') }}" style="width:100%">
            </div>

            <a class="prev1" onclick="plusSlidesImg(-1)">❮</a>
            <a class="next1" onclick="plusSlidesImg(1)">❯</a>

            {{-- list chọn ảnh bên dưới ảnh lớn --}}
            <div class="row1">
                <div class="column1">
                    <img class="demo1 cursor" src="{{ asset('img/web-developer.jpg') }}" style="width:100%"
                        onclick="currentSlideImg(1)" alt="The Woods">
                </div>
                <div class="column1">
                    <img class="demo1 cursor" src="{{ asset('img/ho_vo.jpg') }}" style="width:100%"
                        onclick="currentSlideImg(2)" alt="Cinque Terre">
                </div>
                <div class="column1">
                    <img class="demo1 cursor" src="{{ asset('img/hoa.jpg') }}" style="width:100%"
                        onclick="currentSlideImg(3)" alt="Mountains and fjords">
                </div>
                <div class="column1">
                    <img class="demo1 cursor" src="{{ asset('img/hoa.jpg') }}" style="width:100%"
                        onclick="currentSlideImg(3)" alt="Mountains and fjords">
                </div>
                <div class="column1">
                    <img class="demo1 cursor" src="{{ asset('img/hoa.jpg') }}" style="width:100%"
                        onclick="currentSlideImg(3)" alt="Mountains and fjords">
                </div>
                {{-- dấu nhấn xem thêm --}}
                <div class="column1 full" onclick="document.getElementById('section-cmt').style.display='block'">
                    <div class="full-icon">
                        <i class="fa-solid fa-plus"
                            onclick="document.getElementById('section-cmt').style.display='block'"></i>
                    </div>
                </div>
                {{-- end dấu nhấn xem thêm --}}
            </div>
            {{-- end list chọn ảnh bên dưới ảnh lớn --}}

        </div>
    </div>
    {{-- end mới --}}

    <div class="post-row">
        <div class="activity-icons">
            <div class="like">
                <i class="fa-solid block_heart fa-heart"></i>
                <span>1200</span>
            </div>

            <!-- comment -->
            <div class="comments" onclick="document.getElementById('section-cmt').style.display='block'">
                <i class="fa-solid fa-message"></i>
                <span>500</span>
            </div>
            <!-- end comment -->
            <div class="shares"><i class="fa-solid fa-share"></i> <span>320</span></div>
        </div>
    </div>
    <!-- comment -->
    <div id="section-cmt" class="section-cmt">
        <div class="cmt-btn">
            <div class="container-cmt">
                <div class="name-cmt">
                    <h4>Bài viết của Hồ Võ</h4>
                </div>
                <div class="wrapper_posts">
                    <div class="imgs">
                        <div class="slideshow-container">

                            <div class="mySlides">
                                <img id="myImg" src="{{ asset('img/traicay-1.jpg') }}" alt="">
                            </div>

                            <div class="mySlides">
                                <img id="myImg" src="{{ asset('img/anhbia.jpg') }}" alt="">
                            </div>

                            <div class="mySlides">
                                <img id="myImg" src="{{ asset('img/hoa.jpg') }}" alt="">
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>
                        </div>
                        {{-- click xem ảnh --}}
                        <div id="myModal" class="modal modal_post">
                            <span class="close_image">&times;</span>
                            <img class="modal-content new new-2" id="img012">
                            <div id="caption"></div>
                        </div>
                    </div>
                    <form action="">
                        <div class="view-user">
                            <!-- text cmt -->
                            <div class="user-cmt">
                                <img src="{{ asset('img/ho_vo.jpg') }}" alt="">
                                <div class="name-user">
                                    <div class="user-container">
                                        <div class="name-user-cmt">
                                            <h4>Hồ Võ
                                                {{-- <span class="time"> 
                                                        6 hours 
                                                    </span> --}}
                                            </h4>
                                            <p class="cmtt"> Mạng xã hội (social network) là
                                                Một trang web hay nền tảng trực tuyến với rất nhiều dạng thức và tính
                                                năng khác nhau,
                                                giúp mọi người dễ dàng kết nối từ bất cứ đâu.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="replys-cmt">
                            <div class="icon-cmt">
                                <i class="fa-regular fa-image"></i>
                                <i class="fa-regular fa-face-laugh"></i>
                                <i class="fa-solid fa-camera"></i>
                            </div>
                            <div class="reply-cmt">
                                <img src="{{ asset('img/ho_vo.jpg') }}" alt="">
                                <textarea name="" id="" cols="3" rows="1" placeholder="Viết bình luận..."></textarea>
                                <div class="post-btn">Đăng</div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end comment -->
</div>
