
<li class="notification">
    <div class="icon-mes " onclick="notificationMenuToggle()">
        <i class="fa-regular fa-bell"></i>
        <span class="qty_tb">5</span>
    </div>
    <div class="notification-menu">
        <div class="container-ms">
            <div class="notification-menu-inner">
                <div class="notifications">
                    <div class="news">
                        <h3>Lời mời</h3>
                        <a href="{{ route('requests.friend')}}">Xem thêm</a>
                    </div> 
                    {{--  --}}
                    <div class="online-list">
                        <div class="wrapper_sidebar_title">
                            <div class="online-list">
                                <div class="online">
                                    <a href="{{route('people.profile')}}"><img src="{{asset('img/user2.png')}}" alt=""></a>
                                </div>
                                <div class="add_button">
                                    <p>Công Danh</p>
                                    <a href="#"><button class="confim">Chấp nhận</button></a>
                                    <a href="#"><button class="removed">Xóa</button></a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                {{-- -------------------------------new--------------------- --}}
                <div class="notifications">
                    <div class="news">
                        <h3>Mới</h3>
                        <a href="#">Xem thêm</a>
                    </div>
                    <div class="online-list">
                        <div class="online">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                        <p class="dess">
                            <span class="name-post">Alison Mina</span> 
                            <span class="tt">shared 
                                <a href="#" class="name">Jackson</a> post dd dd sss sssss sssss ddd </span>
                        </p>
                    </div>
                    <!-- text -->
                    <div class="online-list">
                        <div class="online">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                        <p class="dess">
                            <span class="name-post">Alison Mina</span> 
                            <span class="tt">shared 
                                <a href="#" class="name">Jackson</a> post dd dd sss sssss sssss ddd </span>
                        </p>
                    </div>
                </div>
                {{-- -------------------------------end new--------------------- --}}

                {{-- -------------------------------before--------------------- --}}
                <div class="notifications">
                    <div class="news">
                        <h3>Trước đó</h3>
                        <a href="#">Xem thêm</a>
                    </div>
                    <div class="online-list">
                        <div class="online">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                        <p class="dess">
                            <span class="name-post">Alison Mina</span> 
                            <span class="tt">shared 
                                <a href="#" class="name">Jackson</a> post dd dd sss sssss sssss ddd </span>
                        </p>
                    </div>
                    
                    {{-- text --}}
                    <div class="online-list">
                        <div class="online">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                        <p class="dess">
                            <span class="name-post">Alison Mina</span> 
                            <span class="tt">shared 
                                <a href="#" class="name">Jackson</a> post dd dd sss sssss sssss ddd </span>
                        </p>
                    </div>
                    
                    {{-- text --}}
                    <div class="online-list">
                        <div class="online">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                        <p class="dess">
                            <span class="name-post">Alison Mina</span> 
                            <span class="tt">shared 
                                <a href="#" class="name">Jackson</a> post dd dd sss sssss sssss ddd </span>
                        </p>
                    </div>
                    {{-- text --}}
                    <div class="online-list">
                        <div class="online">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                        <p class="dess">
                            <span class="name-post">Alison Mina</span> 
                            <span class="tt">shared 
                                <a href="#" class="name">Jackson</a> post dd dd sss sssss sssss ddd </span>
                        </p>
                    </div>
                    {{-- text --}}
                    <div class="online-list">
                        <div class="online">
                            <img src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                        <p class="dess">
                            <span class="name-post">Alison Mina</span> 
                            <span class="tt">shared 
                                <a href="#" class="name">Jackson</a> post dd dd sss sssss sssss ddd </span>
                        </p>
                    </div>
                </div>
                {{-- -------------------------------end before--------------------- --}}

            </div>
        </div>
    </div>
</li> 
