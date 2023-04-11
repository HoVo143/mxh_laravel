

<div class="write-post-container">
    <div class="user-profile">
        <img src="{{asset('img/ho_vo.jpg')}}" alt="">
        <div>
            <div class="">
                <a href="{{ route('profile')}}"><p>Hồ Võ</p></a>
            </div>
            <!-- <small>Public <i class="fa-solid fa-caret-down"></i></small> -->
            <div class="custom-select">
                <div class="select">
                    <select name="format" id="format">
                        <option value="Public" >Công khai</option>
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
            <img src="{{asset('img/ho_vo.jpg')}}" alt="">
            <div>
                <div >
                    <a href="{{ route('profile')}}"><p class="name-user">Hồ Võ</p></a>
                </div>
                <span class="time">June 24 2021, 13:40 pm</span>
            </div>
        </div>
        {{-- <div class="post-right">
            <i class="fas fa-ellipsis-v" onclick="document.getElementById('post-fas-container').style.display='block'"></i>
            <div class="post-fas-container" id="post-fas-container">
                <div class="post-fas">
                    <ul>
                        <div class="remove-post" onclick="document.getElementById('post-fas-container').style.display='none'"><i class="fa-solid fa-xmark"></i></div>
                        <li><i class="fa-solid fa-bookmark"></i>Save post</li>
                        <li><i class="fa-regular fa-calendar-xmark"></i>Hide posts</li>
                        <li><i class="fa-regular fa-bell"></i>Turn on announce this post</li>
                        <li><i class="fa-solid fa-ban"></i>Unfollow</li>
                        <li><i class="fa-solid fa-flag"></i>Article report</li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div class="post-right" >
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
            <a href="#">#DanhNguyen</a> </p>
    </div>
    <div class="post-img">
        <img src="{{asset('img/1.jpg')}}">
    </div>

    <div class="post-row">
        <div class="activity-icons">
            <div class="like"><i class="fa-solid block_heart fa-heart"></i>
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
                    <form action="">
                        <div class="view-user">
                            <!-- text cmt -->
                            <div class="user-cmt">
                                <img src="{{asset('img/ho_vo.jpg')}}" alt="">
                                <div class="name-user">
                                    <div class="user-container">
                                        <div class="name-user-cmt">
                                            <h4>Hồ Võ 
                                                {{-- <span class="time"> 
                                                    6 hours 
                                                </span> --}}
                                            </h4>
                                            <p class="cmtt">  Mạng xã hội (social network) là
                                                Một trang web hay nền tảng trực tuyến với rất nhiều dạng thức và tính năng khác nhau,
                                                 giúp mọi người dễ dàng kết nối từ bất cứ đâu.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="feedback">
                                        <!-- like -->
                                        {{-- <div class="like"> <i class="fa-regular fa-heart"></i> <span>100</span> </div>
                                        <div class="reply"><span>Reply</span> </div>
                                        <div class="edit" onclick="editbtnMenuToggle()"><span>Edits</span> 
                                            <div class="edit-right">
                                                <div class="dropdown">
                                                    <div class="dropdown-content">
                                                        <span><i class="fa-solid fa-pen-to-square"></i>Edit</span>
                                                        <span><i class="fa-solid fa-trash-can"></i>Remove</span>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="time"> <span> 6 hours </span></div> --}}
                    
                                        <!-- feedback -->
                                        {{-- <div class="fee" onclick="document.querySelector('.timess').style.display='block'"> reply
                                            <div class="timess" id="timess">
                                                 
                                                    <div class="feedback-2">
                                                        <div class="user-cmt-2">
                                                            <img src="{{asset('img/ho_vo.jpg')}}" alt="">
                                                            <div class="name-user">
                                                            <div class="user-container">
                                                                <div class="name-user-cmt">
                                                                    <h4>HoVo 
                                                                        <span class="time"> 
                                                                            6 hours 
                                                                        </span>
                                                                    </h4>
                                                                    <p class="cmtt">youtube channel to watch more videos on 
                                                                        website development and UI designs. 
                                                                    </p>
                                                                </div>
                                                                <div class="edit-right">
                                                                    <div class="dropdown">
                                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                        <div class="dropdown-content">
                                                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                                                                            <a href="#"><i class="fa-solid fa-trash-can"></i>Remove</a>
                                                                      
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="feedback">
                                                                <div class="like"> <i class="fa-regular fa-heart"></i> <span>20</span> </div>
                                                            
                                                                <div class="fee"> reply </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="replys-cmt">
                                                        <div class="icon-cmt">
                                                            <i class="fa-regular fa-image"></i>
                                                            <i class="fa-regular fa-face-laugh"></i>
                                                            <i class="fa-solid fa-camera"></i>
                                                        </div>
                                                        <div class="reply-cmt">
                                                            <img src="{{asset('img/ho_vo.jpg')}}" alt="">
                                                            <textarea name="" id="" cols="3" rows="1" placeholder="write a comment..."></textarea>
                                                            <button class="post-btn">Post</button>
                                                        </div>
                                                    </div>
                                            </div> 
                                        </div> --}}

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
                                <img src="{{asset('img/ho_vo.jpg')}}" alt="">
                                <textarea name="" id="" cols="3" rows="1" placeholder="Viết bình luận..."></textarea>
                                <div class="post-btn">Đăng</div>
             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- end comment -->
</div>



        <!-- Xóa cái post-container này-->
        <div class="post-container">
            <div class="post-row">
                <div class="user-profile">
                    <img src="{{asset('img/ho_vo.jpg')}}" alt="">
                    <div>
                        <p class="name-user">Hồ Võ</p>
                        <span class="time">June 24 2021, 13:40 pm</span>
                    </div>
                </div>
                <a href="#"><i class="fas fa-ellipsis-v"></i></a>
            </div>
            <div class="post-text">
                <p>
                    <span>@HoVo</span> 
                    Mạng xã hội (social network) là
                    Một trang web hay nền tảng trực tuyến với rất nhiều dạng thức và tính năng khác nhau,
                     giúp mọi người dễ dàng kết nối từ bất cứ đâu.
                    <a href="#">#HoVo</a>
                    <a href="#">#DanhNguyen</a> </p>
            </div>
            <div class="post-img">
                <img src="{{asset('img/web-developer.jpg')}}">
            </div>

            <div class="post-row">
                <div class="activity-icons">
                    <div class="like"> <i class="fa-solid fa-heart"></i> <span>1000</span> </div>
                    <div class="comments"> <i class="fa-solid fa-message"></i> <span>200</span></div>
                    <div class="shares"><i class="fa-solid fa-share"></i> <span>20</span></div>
                </div>
            </div>
        
        </div>
