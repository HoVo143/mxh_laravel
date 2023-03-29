

<div class="write-post-container">
    <div class="user-profile">
        <img src="{{asset('img/user-m.png')}}" alt="">
        <div>
            <div class="{{ Request::route()->getName() === 'profile'}}">
                <a href="{{ route('profile')}}"><p>HoVo</p></a>
            </div>
            <!-- <small>Public <i class="fa-solid fa-caret-down"></i></small> -->
            <div class="custom-select">
                <div class="select">
                    <select name="format" id="format">
                        <option value="Public" >Public</option>
                        <option value="Private">Private</option>
                        <option value="Follower">Follower</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="post-input-container">
        <textarea name="" id="" rows="3" placeholder="What's on your mind, John?"></textarea>
        <div class="add-post-links">
            <a href="#"><i class="fa-solid fa-video"></i> Live Video </a>
            <a href="#"><i class="fa-solid fa-camera"></i> Photo/Video </a>
            <a href="#"><i class="fa-regular fa-face-laugh"></i> Feling/Activity </a>
            {{-- <div class="post-btn">Post</div> --}}

            <a href="#"><button class="post-input">Post</button></a>
        </div>
    </div>
</div>


<!-- post-container chính -->
<div class="post-container">
    <div class="post-row">
        <div class="user-profile">
            <img src="{{asset('img/user-m.png')}}" alt="">
            <div>
                <div >
                    <a href="{{ route('profile')}}"><p class="name-user">HoVo</p></a>
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
                            <li><i class="fa-solid fa-bookmark"></i>Save post</li>
                            <li><i class="fa-regular fa-calendar-xmark"></i>Hide posts</li>
                            <li><i class="fa-regular fa-bell"></i>Turn on announce this post</li>
                            {{-- <li><i class="fa-solid fa-ban"></i>Unfollow</li> --}}
                            <li><i class="fa-solid fa-flag"></i>Article report</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-text">
        <p> 
            <span>@HoVo</span> 
            How did you learn your Web developing skill. 
            OR How are you learning your Web developing skills
            <a href="#">#HoVo</a>
            <a href="#">#DanhNguyen</a> </p>
    </div>
    <div class="post-img">
        <img src="{{asset('img/1.jpg')}}">
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
                        <h4>Article by HoVo</h4>
                    </div>
                    <form action="">
                        <div class="view-user">
                            <!-- text cmt -->
                            <div class="user-cmt">
                                <img src="{{asset('img/user-m.png')}}" alt="">
                                <div class="name-user">
                                    <div class="user-container">
                                        <div class="name-user-cmt">
                                            <h4>HoVo 
                                                {{-- <span class="time"> 
                                                    6 hours 
                                                </span> --}}
                                            </h4>
                                            <p class="cmtt">youtube channel to watch more videos on 
                                                website development and UI designs. 
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
                                                            <img src="{{asset('img/user-m.png')}}" alt="">
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
                                                            <img src="{{asset('img/user-m.png')}}" alt="">
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



        <!-- Xóa cái post-container này-->
        <div class="post-container">
            <div class="post-row">
                <div class="user-profile">
                    <img src="{{asset('img/user-m.png')}}" alt="">
                    <div>
                        <p class="name-user">HoVo</p>
                        <span class="time">June 24 2021, 13:40 pm</span>
                    </div>
                </div>
                <a href="#"><i class="fas fa-ellipsis-v"></i></a>
            </div>
            <div class="post-text">
                <p>Like and share this video with friends, tag
                    <span>@HoVo</span> 
                    facebook page on your post. Ask your doubts in the comments 
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
