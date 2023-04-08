@extends('client.layout.indexlayout')
@section('title')
    Group | Earth
@endsection

@section('content')
<div class="container_groups">
    <!-- ----------------left_sidebar_groups------------ -->
    <div class="left_sidebar_groups">

        <div class="wrapper_title_groups">
            <div class="title_img_group">
                <img src="{{asset('img/WebsiteExperts.png')}}" alt="">
            </div>
            <div class="name_groups">
                <h3 class="">Web Developers</h3>
                <p>25 thành viên</p>
                <button class="name_groups_btn">
                    <i class="fa-solid fa-people-group"></i> Đã tham gia 
                    <i class="fa-solid fa-caret-left fa-rotate-270"></i> 
                </button>
            </div>
        </div>
        <div class="wrapper_title_groups">
            <div class="info_groups">
                <div class="profile_title_groups">
                    <h3>Giới thiệu</h3>
                    <p class="text_groups">Chúng tôi phát triển nhóm này nhằm 
                        xây dựng cộng đồng cho code toàn bug. Mục tiêu của chúng tôi là
                        học lập trình qua sai lầm, qua bugs trong code của bạn.
                    </p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="wrapper_title_groups">
            
        </div>
    </div>
    <!-- ----------------end left_sidebar_groups------------ -->


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
                <li>
                    <a class=" {{ request()->route()->getName() === 'group.postgroup' ? 'active': '' }}" 
                        href="{{ route('group.postgroup')}}">Bài viết
                    </a>
                </li>
                <li >
                    <a class="{{ Request::route()->getName() === 'group.member' ? 'active': '' }}" 
                        href="{{ route('group.member')}}">Thành viên
                    </a>
                </li>
                <li>
                    <a class="{{ Request::route()->getName() === 'group.fileimge' ? 'active': '' }}" 
                        href="{{ route('group.fileimge')}}">File phương tiện
                    </a>
                </li>
                <li class="btn_group_add">
                    <button>Mời<i class="fa-solid fa-plus"></i></button>
                </li>
            </ul>
        </div>

        {{--  --}}
        <div class="wrappers_groups">
            
            <div class="main_sidebar_friendhome">
                {{-- post --}}
                @yield('btn_group')
                {{-- @include('client.pages.home.post') --}}
            </div>

            <!-- ----------------right_sidebar_groups------------ -->
            <div class="right_sidebar_groups">
                <div class="info_groups">
                    <div class="profile_title_groups">
                        <div class="title-box">
                            <h3>Chat nhóm</h3>
                            <a href="{{ route('image')}}">Xem thêm</a>
                        </div>
                        <div class="container_chat_groups">
                            <ul class="wrapper_chat_groups">
                                {{--searchs bạn bè --}}
                                <li>
                                    <a href="#">
                                        <div class="chat_groups_list">
                                            <div class="chat_groups_img">
                                                <img src="{{asset('img/hoa.jpg')}}" alt="">
                                            </div>
                                            <div class="chat_groups_h5">
                                                <h5>java script</h5>
                                    
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                {{-- end searchs bạn bè --}}
                
                                {{-- text searchs--}}
                                <li>
                                    <a href="#">
                                        <div class="chat_groups_list">
                                            <div class="chat_groups_img">
                                                <img src="{{asset('img/WebsiteExperts.png')}}" alt="">
                                            </div>
                                            <div class="chat_groups_h5">
                                                <h5>php laravel</h5>
                                    
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                {{-- end text searchs--}}

                                {{-- text searchs--}}
                                <li>
                                    <a href="#">
                                        <div class="chat_groups_list">
                                            <div class="chat_groups_img">
                                                <img src="{{asset('img/WebsiteExperts.png')}}" alt="">
                                            </div>
                                            <div class="chat_groups_h5">
                                                <h5>php laravel</h5>
                                    
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat_groups_list">
                                            <div class="chat_groups_img">
                                                <img src="{{asset('img/WebsiteExperts.png')}}" alt="">
                                            </div>
                                            <div class="chat_groups_h5">
                                                <h5>php laravel</h5>
                                    
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                {{-- end text searchs--}}

                                {{-- text searchs--}}
                                <li>
                                    <a href="#">
                                        <div class="chat_groups_list">
                                            <div class="chat_groups_img">
                                                <img src="{{asset('img/WebsiteExperts.png')}}" alt="">
                                            </div>
                                            <div class="chat_groups_h5">
                                                <h5>php laravel</h5>
                                    
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                {{-- end text searchs--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="info_groups">
                    <div class="profile_title_groups">
                        <div class="title-box">
                            <h3>File phương tiện chia sẻ</h3>
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
                {{--  --}}
            </div> 
            <!-- ----------------end right_sidebar_groups------------ -->
        </div>
    </div>
    

    
    
    
</div>
@endsection