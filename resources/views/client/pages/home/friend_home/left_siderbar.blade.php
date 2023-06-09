<div class="left_sidebar_friendhome">
    <h2 class="name_friendhome">Bạn bè</h2>
    <div class="imp_links_friendhome">

        <a href="{{ route('home.friend')}}" class=" {{ request()->route()->getName() === 'home.friend' ? 'active': '' }}">
            <span><i class="fa-solid fa-user-group"></i> Tổng quan</span>
            <span class="nextfr"><i class="fa-solid nexts fa-chevron-right"></i></span>
        </a>
        <a href="{{ route('requests.friend')}}" class="{{ Request::route()->getName() === 'requests.friend' ? 'active': '' }}">
            <span><i class="fa-solid fa-right-long"></i> Lời mời kết bạn</span>
            <span class="nextfr"><i class="fa-solid nexts fa-chevron-right"></i></span>
        </a>
        <a href="{{ route('suggestion.friend')}}" class="{{ Request::route()->getName() === 'suggestion.friend' ? 'active': '' }}">
            <span><i class="fa-solid fa-user-plus"></i> Gợi ý kết bạn</span>
            <span class="nextfr"><i class="fa-solid nexts fa-chevron-right"></i></span>
        </a>
        <a href="{{ route('list.friend')}}" class="{{ Request::route()->getName() === 'list.friend' ? 'active': '' }}">
            <span><i class="fa-solid fa-user-check"></i> Tất cả bạn bè</span>
            <span class="nextfr"><i class="fa-solid nexts fa-chevron-right"></i></span>
        </a>
        <a href="{{ route('allgroups.friend')}}" class="{{ Request::route()->getName() === 'allgroups.friend' ? 'active': '' }}">
            <span><i class="fa-solid fa-users-line"></i> Tất cả groups</span>
            <span class="nextfr"><i class="fa-solid nexts fa-chevron-right"></i></span>
        </a>
    </div>
</div>