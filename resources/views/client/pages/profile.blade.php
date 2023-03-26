@extends('client.layout.indexlayout')
@section('title')
    Jack Nicholson | Earth
@endsection
@section('content')
<body>
    <div class="profile-container">
        <div class="cover-img">
            <img src="{{asset('img/anhbia.jpg')}}" alt="">
        </div>
        <div class="profile-details">
            <div class="pd-left">
                <div class="pd-row">
                    <img class="pd-img" src="{{asset('img/user-m.png')}}" alt="">
                    <div>
                        <h3>Jack Nicholson</h3>
                        <p>120 Friends - 20 mutual</p>
                        <div class="friends">
                            <img src="{{asset('img/user1.webp')}}">
                            <img src="{{asset('img/user2.png')}}">
                            <img src="{{asset('img/user3.png')}}">
                            <img src="{{asset('img/user-text.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pd-right">
                <button type="button"><span><i class="fa-solid fa-plus"></i><i class="fa-solid fa-user"></i></span>Friend</button>
                <button type="button"> <i class="fa-solid fa-comment-dots"></i> Message</button>
                <br>
                <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
        </div>
    </div>
    <div class="profile-info">
        <div class="info-col">
            <div class="profile-intro">
                <h3>Intro</h3>
                <p class="intro-text">Believe in youself and you can do unbelievable things.
                    <i class="fa-regular bieucam fa-face-laugh"></i></p>
                <hr>
                <ul>
                    <li><i class="fa-solid fa-briefcase"></i>Director at 99media Ltd</li>
                    <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                    <li><i class="fa-solid fa-graduation-cap"></i>Went to DPS Delhi</li>
                    <li><i class="fa-solid fa-house"></i>Lives in HCM CITY, VIETNAM </li>
                    <li><i class="fa-solid fa-location-dot"></i>From HCM CITY, VIETNAM</li>
                </ul>
            </div>
            <div class="profile-intro">
                <div class="title-box">
                    <h3>Photos</h3>
                    <a href="#">All Photos</a>
                </div>
                <div class="photo-box">
                    <div><img src="{{asset('img/FullStack.png')}}" alt=""></div>
                    <div><img src="{{asset('img/web-developer.jpg')}}" alt=""></div>
                    <div><img src="{{asset('img/WebDesign.jpg')}}" alt=""></div>
                    <div><img src="{{asset('img/WebsiteExperts.png')}}" alt=""></div>
                    <div><img src="{{asset('img/WebDesign.jpg')}}" alt=""></div>
                    <div><img src="{{asset('img/FullStack.png')}}" alt=""></div>
                </div>
            </div>
            <!-- friends -->
            <div class="profile-intro">
                <div class="title-box">
                    <h3>Friends</h3>
                    <a href="#">All Friends</a>
                </div>
                <p class="many">120 (10 mutual)</p>
                <div class="friends-box">
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                </div>
            </div>
        </div>
        <div class="post-col">
            <div class="write-post-container">
                    <div class="user-profile">
                        <img src="{{asset('img/user-m.png')}}" alt="">
                        <div>
                            <p>John Nicholson</p>
                            <small>Public <i class="fa-solid fa-caret-down"></i></small>
                            <!-- 1:28:06 / 2:42:27  https://www.youtube.com/watch?v=NljIHlZRTTE&t=5579s-->
                        </div>
                    </div>
                    <div class="post-input-container">
                        <textarea name="" id="" rows="3" placeholder="What's on your mind, John?"></textarea>
                        <div class="add-post-links">
                            <a href="#"><i class="fa-solid fa-video"></i> Live Video </a>
                            <a href="#"><i class="fa-solid fa-camera"></i> Photo/Video </a>
                            <a href="#"><i class="fa-regular fa-face-laugh"></i> Feling/Activity </a>
                        </div>
                    </div>
                </div>
                <!-- post-container -->
                <div class="post-container">
                    <div class="post-row">
                        <div class="user-profile">
                            <img src="{{asset('img/user-m.png')}}" alt="">
                            <div>
                                <p class="name-user">John Nicholson</p>
                                <span class="time">June 24 2021, 13:40 pm</span>
                            </div>
                        </div>
                        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                    <div class="post-text">
                        <p>Subscribe 
                            <span>@Easy Tutorials</span> 
                            youtube channel to watch more videos on 
                            website development and UI designs. 
                            <a href="#">#EasyTutorials</a>
                            <a href="#">#YoutubeChannel</a> </p>
                    </div>
                    <div class="post-img">
                        <img src="{{asset('img/FullStack.png')}}">
                    </div>

                    <div class="post-row">
                        <div class="activity-icons">
                            <div class="like"> <i class="fa-regular fa-heart"></i> <span>1200</span> </div>
                            <div class="comments"> <i class="fa-solid fa-message"></i> <span>500</span></div>
                            <div class="shares"><i class="fa-solid fa-share"></i> <span>320</span></div>
                        </div>
                    </div>
                </div>

                <!-- post-container -->
                <div class="post-container">
                    <div class="post-row">
                        <div class="user-profile">
                            <img src="{{asset('img/user-m.png')}}" alt="">
                            <div>
                                <p class="name-user">John Nicholson</p>
                                <span class="time">June 24 2021, 13:40 pm</span>
                            </div>
                        </div>
                        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                    <div class="post-text">
                        <p>Like and share this video with friends, tag
                            <span>@Easy Tutorials</span> 
                            facebook page on your post. Ask your doubts in the comments 
                            <a href="#">#EasyTutorials</a>
                            <a href="#">#YoutubeChannel</a> </p>
                    </div>
                    <div class="post-img">
                        <img src="{{asset('img/FullStack.png')}}">
                    </div>

                    <div class="post-row">
                        <div class="activity-icons">
                            <div class="like"> <i class="fa-solid fa-heart"></i> <span>1000</span> </div>
                            <div class="comments"> <i class="fa-solid fa-message"></i> <span>200</span></div>
                            <div class="shares"><i class="fa-solid fa-share"></i> <span>20</span></div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</body>

@endsection