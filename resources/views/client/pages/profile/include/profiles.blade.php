<div class="info-col">
    <div class="profile-intro">
        <h3>Intro</h3>
        <p class="intro-text">Believe in youself and you can do unbelievable things.
            <i class="fa-regular bieucam fa-face-laugh"></i></p>
        <hr>
        {{-- <ul>
            <li><i class="fa-solid fa-briefcase"></i>Director at 99media Ltd</li>
            <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
            <li><i class="fa-solid fa-graduation-cap"></i>Went to DPS Delhi</li>
            <li><i class="fa-solid fa-house"></i>Lives in HCM CITY, VIETNAM </li>
            <li><i class="fa-solid fa-location-dot"></i>From HCM CITY, VIETNAM</li>
        </ul> --}}
    </div>
    <div class="profile-intro">
        <div class="title-box">
            <h3>Photos</h3>
            <a href="{{ route('image')}}">All Photos</a>
        </div>
        <div class="photo-box">
            <div><img src="{{asset('img/FullStack.png')}}" alt=""></div>
            <div><img src="{{asset('img/web-developer.jpg')}}" alt=""></div>
            <div><img src="{{asset('img/WebDesign.jpg')}}" alt=""></div>
            <div><img src="{{asset('img/WebsiteExperts.png')}}" alt=""></div>
            <div><img src="{{asset('img/WebDesign.jpg')}}" alt=""></div>
            <div><img src="{{asset('img/FullStack.png')}}" alt=""></div>
            <div><img src="{{asset('img/FullStack.png')}}" alt=""></div>
            
        </div>
    </div>
 
    <div class="profile-intro">
        <div class="title-box">
            <h3>Friends</h3>
            <a href="{{ route('friends')}}">All Friends</a>
        </div>
        <p class="many">120 (10 mutual)</p>
        <div class="friends-box">
            <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
            <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
            <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
            <div><img src="{{asset('img/hoa.jpg')}}"> <p>name friends</p> </div>
            <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
            <div><img src="{{asset('img/WebsiteExperts.png')}}"> <p>name friends</p> </div>
            <div><img src="{{asset('img/web-developer.jpg')}}"> <p>name friends</p> </div>
            <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
            <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
        </div>
    </div>
</div>
<div class="post-col">
    @include('client.pages.profile.include.user_post')
</div>