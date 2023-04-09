@extends('client.pages.groups.group')

@section('btn_group')

    <div class="containers_member">
        {{-- Quản trị viên & người kiểm duyệt --}}
        <div class="wrapper_member">
            <div class="names_h4">
                <h4>Quản trị viên & người kiểm duyệt</h4>
                <span> · </span>
                <p>3</p>
            </div>
            <div class="wrappers_main">
                <div class="main_member">
                    <div class="title_member">
                        <a href="">
                            <div class="img_member">
                                <img src="{{asset('img/user-m.png')}}" alt="">
                            </div>
                        </a>
                            <div class="name_member">
                                <a href=""><h4>Cong danh</h4></a>
                                <p class="color_qtv">Quản trị viên</p>
                            </div>
                    </div>
                    <div class="btn_member">
                        <button><span><i class="fa-solid fa-plus"></i><i class="fa-solid fa-user"></i></span>Thêm bạn bè</button>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="wrappers_main">
                <div class="main_member">
                    <div class="title_member">
                        <a href="">
                            <div class="img_member">
                                <img src="{{asset('img/user-m.png')}}" alt="">
                            </div>
                        </a>
                            <div class="name_member">
                                <a href=""><h4>Ho Vo</h4></a>
                                <p class="color_qtv">Quản trị viên</p>
                            </div>
                    </div>
                    <div class="btn_member">
                        <button><span><i class="fa-solid fa-plus"></i><i class="fa-solid fa-user"></i></span>Thêm bạn bè</button>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="wrappers_main">
                <div class="main_member">
                    <div class="title_member">
                        <a href="">
                            <div class="img_member">
                                <img src="{{asset('img/user-m.png')}}" alt="">
                            </div>
                        </a>
                            <div class="name_member">
                                <a href=""><h4>Ho Vo</h4></a>
                                <p class="color_qtv">Người kiểm duyệt</p>
                            </div>
                    </div>
                    <div class="btn_member">
                        <button><span><i class="fa-solid fa-plus"></i><i class="fa-solid fa-user"></i></span>Thêm bạn bè</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end Quản trị viên & người kiểm duyệt --}}


        <div class="wrapper_member">
            <div class="names_h4">
                <h4>Thành viên</h4>
                <span> · </span>
                <p>3.250</p>
            </div>
            {{-- search --}}
            <div class="search_member" >
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="input_member" placeholder="Tìm kiếm..." onkeyup="inputMember()">
            </div>
            {{-- end search --}}

            <div class="searchs_mb">
                <ul id="ul_member">
                    <li>
                        <div class="main_member">
                            <div class="title_member">
                                <a href="">
                                    <div class="img_member">
                                        <img src="{{asset('img/user-m.png')}}" alt="">
                                    </div>
                                </a>
                                    <div class="name_member">
                                        <a href=""><h4>Ho Vo</h4></a>
                                        <p>20 ban chung</p>
                                    </div>
                            </div>
                            <div class="btn_member">
                                <button><span><i class="fa-solid fa-plus"></i><i class="fa-solid fa-user"></i></span>Thêm bạn bè</button>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="main_member">
                            <div class="title_member">
                                <a href="">
                                    <div class="img_member">
                                        <img src="{{asset('img/user-m.png')}}" alt="">
                                    </div>
                                </a>
                                <div class="name_member">
                                    <a href=""><h4>Cong Danh</h4></a>
                                    <p>20 ban chung</p>
                                </div>
                            </div>
                            <div class="btn_member">
                                <button><span><i class="fa-solid fa-check"></i></span>Bạn bè</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection