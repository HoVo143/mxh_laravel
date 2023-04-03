@extends('client.layout.indexlayout')

@section('title')
Gợi ý kết bạn | Earth
@endsection

@section('content')
<div class="container_friendhome">
    <!-- ----------------left_sidebar_friendhome------------ -->
    @include('client.pages.home.friend_home.left_siderbar')
    <!-- ----------------end left_sidebar_friendhome------------ -->


   
    <!-- ----------------right-sidebar------------ -->
    <div class="right_sidebar_friendhome">
        {{-- gợi ý --}}
        <div class="wrappers_friendhome">
            <div class="name_addfriend">
                <h3>Gợi ý kết bạn</h3>
                <a href="#"><p>Xem tất cả</p></a>
            </div>
            <div class="containers_right">
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
                            <button>Thêm bạn</button>
                            <button>Xóa</button>
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
                            <button>Thêm bạn</button>
                            <button>Xóa</button>
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
                            <button>Thêm bạn</button>
                            <button>Xóa</button>
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
                            <button>Thêm bạn</button>
                            <button>Xóa</button>
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
                            <button>Thêm bạn</button>
                            <button>Xóa</button>
                        </div>
                    </div>
                </div>
                {{-- end text xoa cai nay --}}
            </div> 
        </div> 
        
    </div>
</div>
@endsection