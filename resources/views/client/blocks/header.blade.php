

<nav>
    <div class="nav-left">
            <a href="{{ route('home')}}" style="text-decoration: none">
                <h1 class="logo {{ Request::route()->getName() === 'home'}}">Earth</h1>
            </a>
        <ul>
            <li class="messenger">
                <div class="icon-mes" onclick="messengerMenuToggle()">
                    <i class="fa-regular fa-comment-dots"></i>
                </div>
                <div class="messenger-menu">
                    <!-- search-messenger -->
                    <div class="container-ms">
                        <div id="search-messenger">
                            <button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input type="text" name="" id="search-mes" placeholder="Search friends...">
                            
                        </div>
                        <div class="messenger-menu-inner">
                            <div class="online-list">
                                <div class="online">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                                <div class="des">
                                    <h5>Alison Mina</h5>
                                    <p>Hello , my friends hihihihihiihihihih</p>
                                </div>
                            </div>
                            <!-- text -->
                            <div class="online-list">
                                <div class="online">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                                <div class="des">
                                    <h5>Jackson</h5>
                                    <p>Hello , my friends hihihfriendsfriends</p>
                                </div>
                            </div>
                            <div class="online-list">
                                <div class="online">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                                <div class="des">
                                    <h5>Ned</h5>
                                    <p>Hello , my friends friends friends</p>
                                </div>
                            </div>
                            <div class="online-list">
                                <div class="online">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                                <div class="des">
                                    <h5>Alison Mina</h5>
                                    <p>Hello , my friends hihihihihi</p>
                                </div>
                            </div>
                        
                            <div class="online-list">
                                <div class="online">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                                <div class="des">
                                    <h5>Alison Mina</h5>
                                    <p>Hello , my friends hihihihihiihihihih</p>
                                </div>
                            </div>
                            <div class="online-list">
                                <div class="online">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                                <div class="des">
                                    <h5>Jackson</h5>
                                    <p>Hello , my friends hihihfriendsfriends</p>
                                </div>
                            </div>
                            <div class="online-list">
                                <div class="online">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                                <div class="des">
                                    <h5>Ned</h5>
                                    <p>Hello , my friends friends friends</p>
                                </div>
                            </div>
                            <div class="online-list">
                                <div class="online">
                                    <img src="{{asset('img/1.jpg')}}" alt="">
                                </div>
                                <div class="des">
                                    <h5>Alison Mina</h5>
                                    <p>Hello , my friends hihihihihi</p>
                                </div>
                            </div>
                            <!-- text -->
                        </div>
                    </div>
                </div>
            </li>
            <!-- --------------------------------------------------------------- -->
            <li><i class="fa-regular fa-bell"></i></li>
        </ul>
    </div>
    <div class="nav-right">
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search...">
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
                    <img class="{{ Request::route()->getName() === 'profile'}}" src="{{asset('img/user-m.png')}}" alt="">
                    <a href="{{ route('profile')}}" style="text-decoration: none">
                        <p class="name-profile">HoVo</p>
                    </a>
            </div>
            <hr>
            <div class="user-profile">
                <i class="fa-regular fa-message"></i>
                    <div>
                        <p>Give Feedback</p>
                        <a href="#">Help us to improve the new design</a>
                    </div>
            </div>
            <hr>
            <div class="settings-links">
                <i class="fa-solid setting-icon fa-gear"></i>
                <a href="#">Settings & Privacy <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <div class="settings-links">
                <i class="fa-solid fa-circle-question"></i>
                <a href="#">Help & Support <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <!-- <div class="settings-links">
                <i class="fa-solid fa-moon"></i>
                <a href="#">Display & Accessibility <i class="fa-solid fa-chevron-right"></i></a>
            </div> -->
            <div class="settings-links">
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="#">Logout<i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</nav>

