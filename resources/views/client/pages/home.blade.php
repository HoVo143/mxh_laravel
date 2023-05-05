@extends('client.layout.indexlayout')
@section('title')
    Earth
@endsection

@section('content')
<div class="container">
    <!-- ----------------left-sidebar------------ -->
    <div class="left-sidebar">
        <div class="imp-links">
            <a href="{{ route('profile')}}" class="img-userss">
                <img src="{{asset('img/ho_vo.jpg')}}" alt="">Hồ Võ
            </a>
            <a href="{{ route('home.friend')}}">
                <i class="fa-solid fa-user-group "></i> Bạn Bè
            </a>
            <!-- <a href="#">
                <i class="fa-solid fa-people-group"></i> Group
            </a> -->
            <a href="#">
                <i class="fa-solid fa-gamepad"></i> Games
            </a>
            <a href="{{ route('home.product')}}">
                <i class="fa-solid fa-shop"></i> Marketplace
            </a>
            
            {{-- <a href="#">
                Xem thêm
            </a> --}}
        </div>
        <!-- shortcut -->
        <div class="shortcut-links">
            <p>Groups</p>
            <a href="{{route('group.postgroup')}}">
                <img src="{{asset('img/web-developer.jpg')}}" alt=""> Web Developers
            </a>
            <a href="{{route('group.postgroup')}}">
                <img src="{{asset('img/WebDesign.jpg')}}" alt=""> Web Design Course
            </a>
            <a href="{{route('group.postgroup')}}">
                <img src="{{asset('img/FullStack.png')}}" alt=""> Full Stack
            </a>
            <a href="{{route('allgroups.friend')}}" class="all-groups">
                Xem thêm
            </a>
        </div>
    </div>

    <!-- ----------------main-content------------ -->
    <div class="main-content">
        {{-- post --}}
        @include('client.pages.home.post')
    </div>

    <!--  load view se de o day --> 

    <!-- ----------------right-sidebar------------ -->
    <div class="right-sidebar">

        {{-- loi moi ket ban --}}
        {{-- <div class="sidebar-title">
            <h4>Lời mời kết bạn</h4>
            <a href="{{ route('requests.friend')}}">Xem thêm</a>
        </div> 
        <div class="add_sidebars">
            <div class="add-sidebar-title">
                <div class="online-list">
                    <div class="online">
                        <a href="{{route('people.profile')}}"><img src="{{asset('img/user2.png')}}" alt=""></a>
                    </div>
                    <div class="add">
                        <p>Công Danh</p>
                        <a href="#"><button class="confim">Chấp nhận</button></a>
                        <a href="#"><button class="removed">Xóa</button></a>
                    </div>
                </div>
            </div>    
        </div> --}}
        {{-- end loi moi ket ban --}}
        
        
        <!-- ---- -->
        <div class="sidebar-title">
            <h4>Bạn bè</h4>
            <div class="sidebar-search">
                <div id="search-messenger">
                    <button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <input type="text" name="" id="search-mes" placeholder="Tìm kiếm bạn bè...">             
                </div>
            </div>
        </div>
        
        <div class="sidebar-title-chat">
            {{-- bản chính --}}
            <div class="online-list">
                <div class="online">
                    {{-- link nè --}}
                    <a href="{{route('people.profile')}}">
                        <img src="{{asset('img/1.jpg')}}">
                    </a>
                </div>
                <p>Alison Mina</p>
            </div>
            {{-- end bản chính --}}


            {{-- text xoa cai nay --}}
            <div class="online-list">
                <div class="online">
                    <img src="{{asset('img/img-2.jpg')}}">
                </div>
                <p>Jackson</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="{{asset('img/img-2.jpg')}}">
                </div>
                <p>Ned</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="{{asset('img/img-2.jpg')}}">
                </div>
                <p>Ned</p>
            </div>
            {{-- end text xoa cai nay --}}

        </div>

        <div class="hr"></div>
        <div class="sidebars_ms">
            <div class="wrapper_ms">
                <section class="chat-area">
                    <header>
                        {{-- <a href="" class="back-icon"><i class="fas fa-arrow-left"></i></a> --}}
                        <img src="{{asset('img/user1.webp')}}" alt="">
                        <div class="details">
                            <span>Danh Nguyen</span>
                            <p class="onlines">Đang hoạt động</p>
                        </div>
                    </header>
                    <div class="chat-box">
                        {{-- minh` --}}
                        <div class="chat outgoing">
                            <div class="details">
                                <p>helo xin chao ban cong danh minh la vo cong ho
                                    ban chao lai minh di ban cong danh
                                </p>
                            </div>
                        </div>
                        {{-- ban be   --}}
                        <div class="chat incoming">
                            <img src="{{asset('img/user1.webp')}}" alt="">
                            <div class="details">
                                <p>helo xin chao ban cong danh minh la vo cong ho
                                ban chao lai minh di ban cong danh
                                </p>
                            </div>
                        </div> 
                        {{-- minh` --}}
                        <div class="chat outgoing">
                            <div class="details">
                                <p>helo xin chao ban cong danh minh la vo cong ho
                                    ban chao lai minh di ban cong danh
                                </p>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="typing-area" autocomplete="off">
                        <input type="text" name="outgoing_id" value="" hidden>
                        <input type="text" name="incoming_id" value="" hidden>
                        <input type="text" name="message" class="input-field" placeholder="type a message here...">
                        <button><i class="fab fa-telegram-plane"></i></button>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection