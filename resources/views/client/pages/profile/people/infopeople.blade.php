@section('title')
    PeoPle | Earth
@endsection
<div class="profile-container">
    <div class="cover-img">
        <img src="{{asset('img/WebsiteExperts.png')}}" alt="">
    </div>
    <div class="profile-details">
        <div class="pd-left">
            <div class="pd-row">
                <img class="pd-img" src="{{asset('img/hoa.jpg')}}" alt="">
                <div>
                    <h3>CongDanh</h3>
                    <p>120 Friends - 20 mutual</p>
                    <div class="friends_details">
                        <a href="{{route('people.profile')}}"><img src="{{asset('img/user1.webp')}}"></a>
                        <a href="{{route('people.profile')}}"><img src="{{asset('img/user1.webp')}}"></a>
                        <a href="{{route('people.profile')}}"><img src="{{asset('img/user1.webp')}}"></a>
                        <a href="{{route('people.profile')}}"><img src="{{asset('img/user1.webp')}}"></a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="pd-right">
            {{-- friend --}}
            <button type="button"><span><i class="fa-solid fa-plus"></i><i class="fa-solid fa-user"></i></span>Friend</button>
            <button type="button"> <i class="fa-solid fa-comment-dots"></i> Message</button>
            {{-- end friends --}}

        </div>
    </div>
    {{--  --}}
    <div class="profile-details">
        <ul class="pd-bottom">
            <li class="">
                <a href="{{ route('people.profile')}}">Posts</a>
            </li>
            <li class="">
                <a href="{{ route('people.introduce')}}">Introduce</a>
            </li>
            <li class="">
                <a href="{{ route('people.friends')}}">Friends</a>
            </li>
            <li class="">
                <a href="{{ route('people.image')}}">Image</a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
            </li>
        </ul>
    </div>
</div>

