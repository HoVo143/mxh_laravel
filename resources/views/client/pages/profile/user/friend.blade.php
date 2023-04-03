@extends('client.layout.indexlayout')
@section('content')
{{-- INFOR USER --}}
@include('client.pages.profile.user.infor')
{{-- END INFOR USER --}}

<div class="profile-infos">
    <div class="info-cols">
        <!-- friends -->
        <div class="profile-friends">
            <div class="title-friends">
                <h3>Bạn bè</h3>
                <div class="sidebar-search">
                    <div id="search-messenger">
                        <button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" name="" id="search-mes" placeholder="Tìm kiếm bạn bè...">             
                    </div>
                </div>
            </div>
            {{-- bản chính --}}
            <div class="friends-friends">
                <div class="div-friends">
                    <a href="{{route('people.profile')}}"><img src="{{asset('img/hoa.jpg')}}"> <p>name friends</p></a>
                    <div class="info-friends">
                        <div class="container-info">
                            <div class="info-top">
                                <div class="imgfriend">
                                    <a href="{{route('people.profile')}}"><img src="{{asset('img/hoa.jpg')}}"></a>
                                </div>
                                <div class="infos">
                                    <h4>Name friends</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-briefcase"></i>Director at 99media Ltd</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-bottom">
                                <button type="button"><i class="fa-solid fa-user-check"></i>Bạn bè</button>
                                <button type="button"> <i class="fa-solid fa-comment-dots"></i> Nhắn tin</button>
                            </div>
                        </div>
                    </div>
                </div>
 
            {{-- end bản chính --}}

    
                {{-- text xoa cai nay --}}
                <div class="div-friends">
                    <img src="{{asset('img/hoa.jpg')}}"> <p>name friends</p>
                    <div class="info-friends">
                        <div class="container-info">
                            <div class="info-top">
                                <div class="imgfriend">
                                    <img src="{{asset('img/hoa.jpg')}}">
                                </div>
                                <div class="infos">
                                    <h4>Name friends</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-briefcase"></i>Director at 99media Ltd</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-bottom">
                                <button type="button"><i class="fa-solid fa-user-check"></i>Friend</button>
                                <button type="button"> <i class="fa-solid fa-comment-dots"></i> Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-friends">
                    <img src="{{asset('img/hoa.jpg')}}"> <p>name friends</p>
                    <div class="info-friends">
                        <div class="container-info">
                            <div class="info-top">
                                <div class="imgfriend">
                                    <img src="{{asset('img/hoa.jpg')}}">
                                </div>
                                <div class="infos">
                                    <h4>Name friends</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-briefcase"></i>Director at 99media Ltd</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-bottom">
                                <button type="button"><i class="fa-solid fa-user-check"></i>Friend</button>
                                <button type="button"> <i class="fa-solid fa-comment-dots"></i> Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-friends">
                    <img src="{{asset('img/hoa.jpg')}}"> <p>name friends</p>
                    <div class="info-friends">
                        <div class="container-info">
                            <div class="info-top">
                                <div class="imgfriend">
                                    <img src="{{asset('img/hoa.jpg')}}">
                                </div>
                                <div class="infos">
                                    <h4>Name friends</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-briefcase"></i>Director at 99media Ltd</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-bottom">
                                <button type="button"><i class="fa-solid fa-user-check"></i>Friend</button>
                                <button type="button"> <i class="fa-solid fa-comment-dots"></i> Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-friends">
                    <img src="{{asset('img/hoa.jpg')}}"> <p>name friends</p>
                    <div class="info-friends">
                        <div class="container-info">
                            <div class="info-top">
                                <div class="imgfriend">
                                    <img src="{{asset('img/hoa.jpg')}}">
                                </div>
                                <div class="infos">
                                    <h4>Name friends</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-briefcase"></i>Director at 99media Ltd</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-bottom">
                                <button type="button"><i class="fa-solid fa-user-check"></i>Friend</button>
                                <button type="button"> <i class="fa-solid fa-comment-dots"></i> Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-friends">
                    <img src="{{asset('img/hoa.jpg')}}"> <p>name friends</p>
                    <div class="info-friends">
                        <div class="container-info">
                            <div class="info-top">
                                <div class="imgfriend">
                                    <img src="{{asset('img/hoa.jpg')}}">
                                </div>
                                <div class="infos">
                                    <h4>Name friends</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-briefcase"></i>Director at 99media Ltd</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                        <li><i class="fa-solid fa-building-columns"></i>Studied at Amity University</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-bottom">
                                <button type="button"><i class="fa-solid fa-user-check"></i>Friend</button>
                                <button type="button"> <i class="fa-solid fa-comment-dots"></i> Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end text xoa cai nay --}}
            </div>
        </div>
    </div>
</div>

@endsection