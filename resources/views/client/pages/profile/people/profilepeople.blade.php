@extends('client.layout.indexlayout')
@section('content')
<body>
    {{-- INFOR PEOPLE --}}
    @include('client.pages.profile.people.infopeople')
    {{-- END INFOR PEOPLE --}}

    <div class="profile-info">
        <div class="info-col">
            <div class="profile-intro">
                <h3>Life</h3>
                <p class="intro-text">CongDanh CongDanh CongDanh CongDanh CongDanh CongDanh CongDanh CongDanh.
                    <i class="fa-regular bieucam fa-face-laugh"></i></p>
                <hr>
            </div>
            <div class="profile-intro">
                <div class="title-box">
                    <h3>Photos</h3>
                    <a href="{{ route('people.image')}}">All Photos</a>
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
                    <h3>Friends</h3>
                    <a href="{{ route('people.friends')}}">All Friends</a>
                </div>
                <p class="many">120 (10 mutual)</p>
                <div class="friends-box">
                    {{-- bản chính --}}
                    <div>
                        <a href="{{route('people.profile')}}">
                            <img src="{{asset('img/user-text.png')}}"> <p>name friends</p> 
                        </a>
                    </div>
                    {{-- end bản chính --}}

                    {{-- xóa cái này  --}}
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/hoa.jpg')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/WebsiteExperts.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/web-developer.jpg')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    <div><img src="{{asset('img/user-text.png')}}"> <p>name friends</p> </div>
                    {{-- end xóa cái này  --}}
                </div>
            </div>
        </div>
        <div class="post-col" style="margin-top: -20px">
            @include('client.pages.profile.include.people_post')
        </div>
    </div>
</body>

@endsection