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
                    <p>120 Friends</p>
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
            {{-- <button type="button"><span><i class="fa-solid fa-plus"></i><i class="fa-solid fa-user"></i></span>Friend</button>
            <button type="button"> <i class="fa-solid fa-comment-dots"></i> Message</button> --}}
            {{-- end friends --}}

            {{-- user --}}
            <button type="button" onclick="document.getElementById('EDIT_USER').style.display='block'"> <i class="fa-solid fa-pen"></i> Edit profile</button>
            {{-- end user --}}
        </div>
        {{-- EDIT USER --}}
        <div id="EDIT_USER" class="modal_user">
            <form class="modal_content animate" action="" method="get">     
                <h2>Edit profile</h2>       
                
                <div class="container_edit">
                    {{-- anh user --}}
                    <div>
                        <div class="img_user">
                            <h3>Avatar </h3>
                            <div class="img_container">
                                <img src="{{asset('img/user-m.png')}}" alt="Avatar" class="avatar">
                            </div>   
                        </div>    
                        <input type="file" name="file_user" class="file_user" id="file_avatar">
                    </div>

                    {{-- anh bia --}}
                    <div>
                        <div class="img_user">
                            <h3>Cover image </h3>
                            <div class="cover_imgcontainer">
                                <img src="{{asset('img/web-developer.jpg')}}" alt="cover_img" class="cover_img">
                            </div>   
                        </div>    
                        <input type="file" name="file_user" class="file_cover" id="file_cover">
                    </div>

                    {{-- tieu su --}}
                   <div>
                        <div class="img_user">
                            <h3>Add Life</h3>
                            <textarea name="life" id="life" class="life" cols="50" rows="3" placeholder="Intro..."> </textarea>
                        </div>    
                   </div>

                </div>
                <div class="container_edit">
                    <div class="wrapper_btn">
                        <button type="button" onclick="document.getElementById('EDIT_USER').style.display='none'" class="cancel_btn">Cancel</button>
                        <button type="submit" class="btnPost">Post user</button>
                    </div>
                </div>
            </form>
        </div>
        {{-- END EDIT USER --}}
    </div>
    {{--  --}}
    <div class="profile-details">
        <ul class="pd-bottom">
            <li class="">
                <a href="{{ route('profile')}}">Posts</a>
            </li>
            <li class="">
                <a href="{{ route('introduce')}}">Introduce</a>
            </li>
            <li class="">
                <a href="{{ route('friends')}}">Friends</a>
            </li>
            <li class="">
                <a href="{{ route('image')}}">Image</a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
            </li>
        </ul>
    </div>
</div>

