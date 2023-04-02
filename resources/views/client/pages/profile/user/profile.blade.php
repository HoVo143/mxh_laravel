@extends('client.layout.indexlayout')
@section('content')
<body>
    {{-- INFOR USER --}}
    @include('client.pages.profile.user.infor')
    {{-- END INFOR USER --}}

    <div class="profile-info">
        <div class="info-col">
            <div class="profile-intro">
                <h3>Tiểu sử</h3>
                <p class="intro-text">Believe in youself and you can do unbelievable things.
                    <i class="fa-regular bieucam fa-face-laugh"></i></p>
                <hr>
            </div>
            <div class="profile-intro">
                <div class="title-box">
                    <h3>Hình ảnh</h3>
                    <a href="{{ route('image')}}">Xem thêm</a>
                </div>
                <div class="photo-box">
                    {{-- bản chính --}}
                    <div><img src="{{asset('img/FullStack.png')}}" alt=""></div>
                    {{-- end bản chính --}}

                    {{-- xóa cái này  --}}
                    <div><img src="{{asset('img/web-developer.jpg')}}" alt=""></div>
                    <div><img src="{{asset('img/WebDesign.jpg')}}" alt=""></div>
                    <div><img src="{{asset('img/WebsiteExperts.png')}}" alt=""></div>
                    <div><img src="{{asset('img/WebDesign.jpg')}}" alt=""></div>
                    <div><img src="{{asset('img/FullStack.png')}}" alt=""></div>
                    <div><img src="{{asset('img/FullStack.png')}}" alt=""></div>
                    {{-- end xóa cái này  --}}
                    
                </div>
            </div>
         
            <div class="profile-intro">
                <div class="title-box">
                    <h3>Bạn bè</h3>
                    <a href="{{ route('friends')}}">Xem thêm</a>
                </div>
                <p class="many">120</p>
                <div class="friends-box">
                    {{-- bản chính --}}
                    <div>
                        <a href="{{route('people.profile')}}">
                            <img src="{{asset('img/user-text.png')}}"> <p>Tên bạn bè</p> 
                        </a>
                    </div>
                    {{-- end bản chính --}}

                    {{-- xóa cái này  --}}
                    <div><img src="{{asset('img/user-text.png')}}"> <p>Tên bạn bè</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>Tên bạn bè</p> </div>
                    <div><img src="{{asset('img/hoa.jpg')}}"> <p>Tên bạn bè</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>Tên bạn bè</p> </div>
                    <div><img src="{{asset('img/WebsiteExperts.png')}}"> <p>Tên bạn bè</p> </div>
                    <div><img src="{{asset('img/web-developer.jpg')}}"> <p>Tên bạn bè</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>Tên bạn bè</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>Tên bạn bè</p> </div>
                    {{-- end xóa cái này  --}}
                </div>
            </div>
        </div>
        <div class="post-col">
            @include('client.pages.profile.include.user_post')
        </div>
    </div>
</body>

@endsection