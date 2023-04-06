@extends('client.layout.indexlayout')
@section('title')
    Group
@endsection

@section('content')
<div class="container_groups">
    <div class="containers_group">
        {{-- anh bia --}}
        <div class="containers_group_img">
            <img src="{{asset('img/web-developer.jpg')}}" alt="">
        </div>
        {{-- end anh bia --}}
        <div class="group_profile">
            <div class="pd-left">
                <div class="group_pd_row">
                    <img class="group_pd_img" src="{{asset('img/WebsiteExperts.png')}}" alt="">
                    <div>
                        <h3>Web Developers</h3>
                        <div class="friends_details">
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/user1.webp')}}"></a>
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/user1.webp')}}"></a>
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/user1.webp')}}"></a>
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/user1.webp')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="group_profile">
            <ul class="pd-bottom">
                <li class="">
                    <a href="{{ route('profile')}}">Bài viết</a>
                </li>
                <li class="">
                    <a href="{{ route('introduce')}}">Giới thiệu</a>
                </li>
                <li class="">
                    <a href="{{ route('friends')}}">Bạn bè</a>
                </li>
                <li class="">
                    <a href="{{ route('image')}}">Ảnh</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                </li>
            </ul>
        </div>

        {{--  --}}
        <div class="wrappers_groups">
            <!-- ----------------right-sidebar------------ -->
            <div class="left_sidebar_groups">

                <div class="info_groups">
                    <div class="profile-intro">
                        <h3>Giới thiệu</h3>
                        <p class="intro_text_groups">Chúng tôi phát triển nhóm này nhằm 
                            xây dựng cộng đồng cho code toàn bug. Mục tiêu của chúng tôi là
                             học lập trình qua sai lầm, qua bugs trong code của bạn.
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
                </div>
            </div> 
            
            <!-- ----------------right-sidebar------------ -->
            <div class="main_sidebar_friendhome">
                {{-- post --}}
                @include('client.pages.home.post')
            </div>
        </div>
    </div>
    

    
    <!-- ----------------left_sidebar_friendhome------------ -->
    <div class="right_sidebar_groups">
        <h2 class="name_friendhome">Bạn bè</h2>
        
    </div>
    <!-- ----------------end left_sidebar_friendhome------------ -->
    
</div>
@endsection