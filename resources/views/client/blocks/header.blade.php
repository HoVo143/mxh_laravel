
<nav>
    <div class="nav-left">
            <a href="{{ route('home')}}" style="text-decoration: none">
                <h1 class="logo {{ request()->route()->getName() === 'home'}}">Earth</h1>
            </a>
        <ul>
            {{-- ---------------MESSENGER---------------- --}}
            @include('client.pages.header.messenger')
            {{-- ---------------END MESSENGER---------------- --}}

            {{-- ---------------NOTIFICATION-------------- --}}
            @include('client.pages.header.notification')
            {{-- ---------------END NOTIFICATION-------------- --}}
        </ul>
    </div>
    <div class="nav-right">
        <div class="search-box"  onclick="document.getElementById('searchss').style.display='block'">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="myInput" placeholder="Tìm kiếm..." onkeyup="myFunction()">
        </div>
        <div class="searchss" id="searchss">
            <ul id="myUL">
                {{--searchs bạn bè --}}
                <li>
                    <a href="{{route('people.profile')}}">
                        <div class="searchs_list">
                            <div class="searchs_img">
                                <img src="{{asset('img/hoa.jpg')}}" alt="">
                            </div>
                            <div class="searchs_des">
                                <h5>Công Danh</h5>
                                <p class="search_friend">Bạn bè</p>
                            </div>
                        </div>
                    </a>
                    <i class="fa-solid fa-xmark"></i>
                </li>
                {{-- end searchs bạn bè --}}

                {{-- searchs nhóm --}}
                <li>
                    <a href="{{route('people.profile')}}">
                        <div class="searchs_list">
                            <div class="searchs_img">
                                <img src="{{asset('img/1.jpg')}}" alt="">
                            </div>
                            <div class="searchs_des">
                                <h5>Nhóm fullstack</h5>
                                {{-- <p class="search_friend">Bạn bè</p> --}}
                            </div>
                        </div>
                    </a>
                    <i class="fa-solid fa-xmark"></i>
                </li>
                {{-- end searchs nhóm --}}

                {{-- text searchs--}}
                <li>
                    <a href="{{route('people.profile')}}">
                        <div class="searchs_list">
                            <div class="searchs_img">
                                <img src="{{asset('img/user-m.png')}}" alt="">
                            </div>
                            <div class="searchs_des">
                                <h5>Công Danh</h5>
                                <p class="search_friend">Bạn bè</p>
                            </div>
                        </div>
                    </a>
                    <i class="fa-solid fa-xmark"></i>
                </li>
                {{-- end text searchs--}}
            </ul>
        </div>
        <div class="nav-user-icon" onclick="settingsMenuToggle()">
            <img src="{{asset('img/user-m.png')}}" alt="">
        </div>
    </div>
    <div class="settings-menu">
        <div id="dark-btn" class="dark-btn-on">
            <span></span>
        </div>
        <div class="settings-menu-inner">
            <div class="user-profile">
                    <img class="{{ request()->route()->getName() === 'profile'}}" src="{{asset('img/user-m.png')}}" alt="">
                    <a href="{{ route('profile')}}" style="text-decoration: none">
                        <p class="name-profile">Hồ Võ</p>

                    </a>
            </div>
            <hr>
            <div class="user-profile">
                <i class="fa-regular fa-message"></i>
                    <div>
                        <p>Đóng góp ý kiến</p>
                        <a href="#">Giúp chúng tôi cải thiện trang web tốt hơn</a>
                    </div>
            </div>
            <hr>
            <div class="settings-links">
                <i class="fa-solid setting-icon fa-gear"></i>
                <a href="#">Cài đặt <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <div class="settings-links">
                <i class="fa-solid fa-circle-question"></i>
                <a href="#">Hỗ trợ<i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <!-- <div class="settings-links">
                <i class="fa-solid fa-moon"></i>
                <a href="#">Display & Accessibility <i class="fa-solid fa-chevron-right"></i></a>
            </div> -->
            <div class="settings-links">
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="#">Đăng xuất<i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</nav>
