@extends('client.layout.indexlayout')

@section('title')
Lời mời kết bạn | Earth
@endsection

@section('content')
<div class="container_friendhome">
    <!-- ----------------left_sidebar_friendhome------------ -->
    @include('client.pages.home.friend_home.left_siderbar')
    <!-- ----------------end left_sidebar_friendhome------------ -->


   
    <!-- ----------------right-sidebar------------ -->
    <div class="right_sidebar_friendhome">
        <div class="wrappers_friendhome">
            <div class="name_addfriend">
                <h3>Lời mời kết bạn</h3>
            </div>
            <div class="containers_right">
                <div class="wrappers_right">
                    <div class="wrapper_friends">
                        <div class="img_friends">
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/hoa.jpg')}}"></a>
                        </div>
                        <div class="nameh2">
                            <h4>name friend friend friend friend</h4>
                            <p>4 bạn chung</p>
                        </div>
                        <div class="btn_add">
                            <button>Chấp nhận</button>
                            <button>Gỡ bỏ</button>
                        </div>
                    </div>
                </div>
                
                {{-- text xoa cai nay --}}
                <div class="wrappers_right">
                    <div class="wrapper_friends">
                        <div class="img_friends">
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/hoa.jpg')}}"></a>
                        </div>
                        <div class="nameh2">
                            <h4>name friend friend friend friend</h4>
                            <p>4 bạn chung</p>
                        </div>
                        <div class="btn_add">
                            <button>Chấp nhận</button>
                            <button>Gỡ bỏ</button>
                        </div>
                    </div>
                </div>
                
                <div class="wrappers_right">
                    <div class="wrapper_friends">
                        <div class="img_friends">
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/hoa.jpg')}}"></a>
                        </div>
                        <div class="nameh2">
                            <h4>name friend friend friend friend</h4>
                            <p>4 bạn chung</p>
                        </div>
                        <div class="btn_add">
                            <button>Chấp nhận</button>
                            <button>Gỡ bỏ</button>
                        </div>
                    </div>
                </div>
                <div class="wrappers_right">
                    <div class="wrapper_friends">
                        <div class="img_friends">
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/hoa.jpg')}}"></a>
                        </div>
                        <div class="nameh2">
                            <h4>name friend friend friend friend</h4>
                            <p>4 bạn chung</p>
                        </div>
                        <div class="btn_add">
                            <button>Chấp nhận</button>
                            <button>Gỡ bỏ</button>
                        </div>
                    </div>
                </div>
                
                <div class="wrappers_right">
                    <div class="wrapper_friends">
                        <div class="img_friends">
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/hoa.jpg')}}"></a>
                        </div>
                        <div class="nameh2">
                            <h4>name friend friend friend friend</h4>
                            <p>4 bạn chung</p>
                        </div>
                        <div class="btn_add">
                            <button>Chấp nhận</button>
                            <button>Gỡ bỏ</button>
                        </div>
                    </div>
                </div>
                <div class="wrappers_right">
                    <div class="wrapper_friends">
                        <div class="img_friends">
                            <a href="{{route('people.profile')}}"><img src="{{asset('img/hoa.jpg')}}"></a>
                        </div>
                        <div class="nameh2">
                            <h4>name friend friend friend friend</h4>
                            <p>4 bạn chung</p>
                        </div>
                        <div class="btn_add">
                            <button>Chấp nhận</button>
                            <button>Gỡ bỏ</button>
                        </div>
                    </div>
                </div>
                {{-- end text xoa cai nay --}}
            </div>
        </div>
        
        
    </div>
</div>
@endsection