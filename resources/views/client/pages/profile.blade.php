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
            {{-- post --}}
            @include('client.pages.home.post')
        </div>
    </div>
</body>

@endsection