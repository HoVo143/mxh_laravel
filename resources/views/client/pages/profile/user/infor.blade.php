@section('title')
    HoVo | Earth
@endsection
<div class="profile-container">
    <div class="cover-img">
        <img src="{{asset('img/anhbia.jpg')}}" alt="">
    </div>
    <div class="profile-details">
        <div class="pd-left">
            <div class="pd-row">
                <img class="pd-img" src="{{asset('img/user-m.png')}}" alt="">
                <div>
                    <h3>HoVo</h3>
                    <p>120 Friends - 20 mutual</p>
                    <div class="friends">
                        <img src="{{asset('img/user1.webp')}}">
                        <img src="{{asset('img/user2.png')}}">
                        <img src="{{asset('img/user3.png')}}">
                        <img src="{{asset('img/user-text.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="pd-right">
            {{-- friend --}}
            {{-- <button type="button"><span><i class="fa-solid fa-plus"></i><i class="fa-solid fa-user"></i></span>Friend</button>
            <button type="button"> <i class="fa-solid fa-comment-dots"></i> Message</button> --}}
            {{-- end friends --}}

            {{-- user --}}
            <button type="button"> <i class="fa-solid fa-pen"></i> Edit profile</button>
            {{-- end user --}}
        </div>
    </div>
    {{--  --}}
    <div class="profile-details">
        <ul class="pd-bottom">
            <li class="{{ request()->route()->getName() === 'profile' ? 'active': '' }}">
                <a href="{{ route('profile')}}">Posts</a>
            </li>
            <li class="{{ Request::route()->getName() === 'introduce' ? 'active': '' }}">
                <a href="{{ route('introduce')}}">Introduce</a>
            </li>
            <li class="{{ Request::route()->getName() === 'friends' ? 'active': '' }}">
                <a href="{{ route('friends')}}">Friends</a>
            </li>
            <li class="class="{{ Request::route()->getName() === 'image' ? 'active': '' }}">
                <a href="{{ route('image')}}">Image</a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
            </li>
        </ul>
    </div>
</div>