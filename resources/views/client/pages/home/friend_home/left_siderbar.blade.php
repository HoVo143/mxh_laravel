<div class="left_sidebar_friendhome">
    <h2 class="name_friendhome">Bạn bè</h2>
    <div class="imp_links_friendhome">

        <a href="{{ route('home.friend')}}" class=" {{ request()->route()->getName() === 'home.friend' ? 'active': '' }}">
            <span><i class="fa-solid fa-users"></i> Tổng quan</span>
            <span class="nextfr"><i class="fa-solid nexts fa-chevron-right"></i></span>
        </a>
        <a href="{{ route('requests.friend')}}" class="{{ Request::route()->getName() === 'requests.friend' ? 'active': '' }}">
            <span><i class="fa-solid fa-user-large"></i> Lời mời kết bạn</span>
            <span class="nextfr"><i class="fa-solid nexts fa-chevron-right"></i></span>
        </a>
        <a href="#" class="{{ Request::route()->getName() === 'shop' ? 'active': '' }}">
            <span><i class="fa-solid fa-user-plus"></i> Gợi ý</span>
            <span class="nextfr"><i class="fa-solid nexts fa-chevron-right"></i></span>
        </a>
        <a href="#" class="{{ Request::route()->getName() === 'shop' ? 'active': '' }}">
            <span><i class="fa-solid fa-user-check"></i> Tất cả bạn bè</span>
            <span class="nextfr"><i class="fa-solid nexts fa-chevron-right"></i></span>
        </a>
    </div>
</div>