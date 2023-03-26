@extends('client.layout.indexlayout')

@section('title')
    Earth
@endsection

@section('content')
<div class="container">
    <!-- ----------------left-sidebar------------ -->
<div class="left-sidebar">
    <div class="imp-links">
        <a href="#" class="img-userss">
            <img src="{{asset('img/user-m.png')}}" alt="">HoVo
        </a>
        <a href="#">
            <i class="fa-solid fa-radio"></i> Latest News
        </a>
        <a href="#">
            <i class="fa-solid fa-user-group"></i> Friends
        </a>
        <!-- <a href="#">
            <i class="fa-solid fa-people-group"></i> Group
        </a> -->
        <a href="#">
            <i class="fa-solid fa-shop"></i> Marketplace
        </a>
        <a href="#">
            See More
        </a>
    </div>
    <!-- shortcut -->
    <div class="shortcut-links">
        <p>All Groups</p>
        <a href="#">
            <img src="{{asset('img/web-developer.jpg')}}" alt=""> Web Developers
        </a>
        <a href="#">
            <img src="{{asset('img/WebDesign.jpg')}}" alt=""> Web Design Course
        </a>
        <!-- <a href="#">
            <img src="/assets/img/FullStack.png" alt=""> Full Stack
        </a> -->
        <a href="#" class="all-groups">
            See all groups
        </a>
    </div>
</div>

<!-- ----------------main-content------------ -->
<div class="main-content">
    <!-- <div class="story-gallery">
        <div class="story">
            <i class="fa-solid fa-plus"></i>
            <p>Post Story</p>
        </div>
    </div> -->
    <div class="write-post-container">
        <div class="user-profile">
            <img src="{{asset('img/user-m.png')}}" alt="">
            <div>
                <p>HoVo</p>
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
                    <p class="name-user">HoVo</p>
                    <span class="time">June 24 2021, 13:40 pm</span>
                </div>
            </div>
            <div class="post-right">
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
            </div>
        </div>
        <div class="post-text">
            <p>Subscribe 
                <span>@HoVo</span> 
                youtube channel to watch more videos on 
                website development and UI designs. 
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
                                                    <span class="time"> <!-- time -->
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
                                                        <!-- <a href="#">Link 3</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feedback">
                                            <!-- like -->
                                            <div class="like"> <i class="fa-regular fa-heart"></i> <span>100</span> </div>
                                        
                                            <!-- feedback -->
                                            <div class="fee" onclick="document.querySelector('.timess').style.display='block'"> reply
                                                <div class="timess" id="timess">
                                                        <!-- user feedback-2 -->
                                                        <div class="feedback-2">
                                                            <div class="user-cmt-2">
                                                                <img src="{{asset('img/user-m.png')}}" alt="">
                                                                <div class="name-user">
                                                                <div class="user-container">
                                                                    <div class="name-user-cmt">
                                                                        <h4>HoVo 
                                                                            <span class="time"> <!-- time -->
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
                                                                                <!-- <a href="#">Link 3</a> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="feedback">
                                                                    <div class="like"> <i class="fa-regular fa-heart"></i> <span>20</span> </div>
                                                                    <!-- feedback -->
                                                                    <div class="fee"> reply </div>
                                                                
                                                            </div>
                                                        </div>


                                                        <!-- comment feedback-2 -->
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
                                    <button class="post-btn">Post</button>
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

    <!-- Xóa cái post-container này -->
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
            <img src="{{asset('img/WebDesign.jpg')}}">
        </div>

        <div class="post-row">
            <div class="activity-icons">
                <div class="like"> <i class="fa-solid fa-heart"></i> <span>2500</span> </div>
                <div class="comments"> <i class="fa-solid fa-message"></i> <span>1103</span></div>
                <div class="shares"><i class="fa-solid fa-share"></i> <span>410</span></div>
            </div>
        </div>
     
    </div>
</div>

<!--  load view se de o day -->

<!-- ----------------right-sidebar------------ -->
<div class="right-sidebar">
    <div class="sidebar-title">
        <h4>Events</h4>
        <a href="#">See All</a>
    </div>
    <!-- event -->
    <div class="event">
        <div class="left-event">
            <h3>18</h3>
            <span>March</span>
        </div>
        <div class="right-event">
            <h4>Social Media</h4>
            <p><i class="fa-solid fa-location-dot"></i> Willson Tech Park</p>
            <a href="#">More Info</a>
        </div>
    </div>
    <!-- event -->
    <!-- <div class="event">
        <div class="left-event">
            <h3>22</h3>
            <span>June</span>
        </div>
        <div class="right-event">
            <h4>Mobile Marketing</h4>
            <p><i class="fa-solid fa-location-dot"></i> Willson Tech Park</p>
            <a href="#">More Info</a>
        </div>
    </div> -->
    <!-- ---- -->
    <div class="sidebar-title">
        <h4>Friend request</h4>
        <a href="#">See All</a>
    </div>
    <div class="add-sidebar-title">
        <div class="online-list">
            <div class="online">
                <img src="{{asset('img/user2.png')}}" alt="">
            </div>
            <div class="add">
                <p>Jacksonsss</p>
                <a href="#"><button class="confim">confirm</button></a>
                <a href="#"><button class="removed">removed</button></a>
            </div>
        </div>
        <!-- end text -->
    </div>    
    <div class="hr"></div>
    <!-- ---- -->
    <div class="sidebar-title">
        <h4>Friends</h4>
        <div class="sidebar-search">
            <div id="search-messenger">
                <button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                <input type="text" name="" id="search-mes" placeholder="Search friends...">             
            </div>
        </div>
    </div>
    
    <div class="sidebar-title-chat">
        <div class="online-list">
            <div class="online">
                <img src="{{asset('img/1.jpg')}}" alt="">
            </div>
            <p>Alison Mina</p>
        </div>
        <!-- text -->
        <div class="online-list">
            <div class="online">
                <img src="{{asset('img/img-2.jpg')}}" alt="">
            </div>
            <p>Jackson</p>
        </div>
        <div class="online-list">
            <div class="online">
                <img src="{{asset('img/img-2.jpg')}}" alt="">
            </div>
            <p>Ned</p>
        </div>
        <div class="online-list">
            <div class="online">
                <img src="{{asset('img/img-2.jpg')}}" alt="">
            </div>
            <p>Ned</p>
        </div>
    </div>
    
</div>
</div>
@endsection