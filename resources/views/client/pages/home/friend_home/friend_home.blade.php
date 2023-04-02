@extends('client.layout.indexlayout')

@section('title')
    Bạn bè | Earth
@endsection

@section('content')
<div class="container_friendhome">
    <!-- ----------------left_sidebar_friendhome------------ -->
    @include('client.pages.home.friend_home.left_siderbar')
    <!-- ----------------end left_sidebar_friendhome------------ -->

   
    <!-- ----------------right-sidebar------------ -->
    <div class="right_sidebar_friendhome">

    </div>
</div>
@endsection