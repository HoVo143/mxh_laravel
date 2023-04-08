@extends('client.pages.groups.group')

@section('btn_group')

    <div class="profile-details">
        <ul class="pd-bottom">
            <li class="">
                <a href="{{ route('profile')}}">Bài viết</a>
            </li>
            <li class="">
                <a href="{{ route('introduce')}}">Giới thiệu</a>
            </li>
            <li class="">
                <a href="{{ route('friends')}}">Bạn bè</a>
            </li>
            <li class="">
                <a href="{{ route('image')}}">Ảnh</a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
            </li>
        </ul>
    </div>
@endsection