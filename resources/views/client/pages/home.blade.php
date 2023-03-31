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
                <img src="{{asset('img/user-m.png')}}" alt="">HoVo
            </a>
            <a href="{{ route('friends')}}">
                <i class="fa-solid fa-user-group "></i> Friends
            </a>
            <!-- <a href="#">
                <i class="fa-solid fa-people-group"></i> Group
            </a> -->
            <a href="#">
                <i class="fa-solid fa-gamepad"></i> Games
            </a>
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
            <a href="#">
                <img src="{{asset('img/FullStack.png')}}" alt=""> Full Stack
            </a>
            <a href="#" class="all-groups">
                See all groups
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
                    <a href="{{route('people.profile')}}"><img src="{{asset('img/user2.png')}}" alt=""></a>
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
            {{-- bản chính --}}
            <div class="online-list">
                <div class="online">
                    {{-- link nè --}}
                    <a href="{{route('people.profile')}}">
                        <img src="{{asset('img/1.jpg')}}" alt="">
                    </a>
                </div>
                <p>Alison Mina</p>
            </div>
            {{-- end bản chính --}}


            {{-- text xoa cai nay --}}
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
            {{-- end text xoa cai nay --}}

        </div>
        
    </div>
</div>
@endsection