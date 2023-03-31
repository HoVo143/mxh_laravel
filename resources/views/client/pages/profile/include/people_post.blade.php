
<!-- post-container chính -->
<div class="post-container">
    <div class="post-row">
        <div class="user-profile">
            <img src="{{asset('img/hoa.jpg')}}" alt="">
            <div>
                <div >
                    <a href="{{ route('profile')}}"><p class="name-user">CongDanh</p></a>
                </div>
                <span class="time">June 24 2021, 13:40 pm</span>
            </div>
        </div>

        <div class="post-right" >
            <i class="fas fa-ellipsis-v" onclick="postrighsMenuToggle()"></i>
            
            <div class="posts" id="postss">
                <div class="post-fas-container" id="post-fas-container">
                    <div class="post-fas">
                        <ul>
                            {{-- <div class="remove-post" ><i class="fa-solid fa-xmark"></i></div> --}}
                            <li><i class="fa-solid fa-bookmark"></i>Save post</li>
                            <li><i class="fa-regular fa-calendar-xmark"></i>Hide posts</li>
                            <li><i class="fa-regular fa-bell"></i>Turn on announce this post</li>
                            <li><i class="fa-solid fa-ban"></i>Unfollow</li>
                            <li><i class="fa-solid fa-flag"></i>Article report</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-text">
        <p> 
            <span>@CongDanh</span> 
            How did you learn your Web developing skill. 
            OR How are you learning your Web developing skills
    </div>
    <div class="post-img">
        <img src="{{asset('img/web-developer.jpg')}}">
    </div>

    <div class="post-row">
        <div class="activity-icons">
            <div class="like"> <i class="fa-regular fa-heart"></i> <span>1200</span> </div>
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
                        <h4>Article by CongDanh</h4>
                    </div>
                    <form action="">
                        <div class="view-user">
                            <!-- text cmt -->
                            <div class="user-cmt">
                                <img src="{{asset('img/hoa.jpg')}}" alt="">
                                <div class="name-user">
                                    <div class="user-container">
                                        <div class="name-user-cmt">
                                            <h4>CongDanh 
                                                {{-- <span class="time"> 
                                                    6 hours 
                                                </span> --}}
                                            </h4>
                                            <p class="cmtt">youtube channel to watch more videos on 
                                                website development and UI designs. 
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
                                <img src="{{asset('img/user-m.png')}}" alt="">
                                <textarea name="" id="" cols="3" rows="1" placeholder="write a comment..."></textarea>
                                <div class="post-btn">Post</div>
             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- end comment -->
</div>


