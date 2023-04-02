@extends('client.layout.indexlayout')
@section('content')
{{-- INFOR USER --}}
@include('client.pages.profile.user.infor')
{{-- END INFOR USER --}}

<div class="profile-infos">
    <div class="info-cols">
        <!-- image -->
        <div class="profile-image">
            <div class="title-image">
                <h3>Ảnh</h3>
            </div>
            {{-- <div class="tab_img">
                <button class="tablinks" data-target="#images">Your picture</button>
                <button class="tablinks" data-target="#albums">Your Albums</button>
            </div> --}}
            <ul class="tab_img">
                <li data-target="#content_1">
                    <p>Ảnh của bạn</p>
                </li>
                <li data-target="#content_2">
                    <p>Albums của bạn</p>
                </li>
            </ul>
            {{-- image cua ban --}}
    
            <div class="tabs active" id="content_1">
                <div class="tabcontent" >
                    {{-- ảnh  --}}
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                        <div class="edit">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                             {{-- hover edit img --}}
                            <div class="edit_img">
                                <ul class="dropdown-menu">
                                    <li><i class="fa-solid fa-trash-can"></i>Xóa ảnh</li>
                                    <li><i class="fa-solid fa-user"></i>Đặt làm ảnh đại diện</li>
                                </ul>
                            </div>
                             {{-- end hover edit img --}}
                            
                        </div>
                       
                    </div>
                    {{-- end ảnh  --}}
    
    
    
                    {{-- text xoa cai nay --}}
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                        <div class="edit">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </div>
                    </div>
                    
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                        <div class="edit">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </div>
                    </div>
                    
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                        <div class="edit">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </div>
                    </div>
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                        <div class="edit">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </div>
                    </div> 
                    
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                        <div class="edit">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </div>
                    </div>
                    {{-- end text xoa cai nay --}}
                </div>
            </div>
    
            {{-- albums cua ban --}}
            <div class="tabs" id="content_2">
                <div class="tabcontent">
    
                    {{-- add albums --}}
                    <div class="albums">
                        <div class="add_ablums" onclick="document.getElementById('id01').style.display='block'"> <i class="fa-solid fa-plus"></i></div>
                        <p class="name">Thêm albums</p>
                        {{-- add --}}
                    </div>
                    <div id="id01" class="modalalbums">
                        <form class="modal-content animate" action="" method="get">     
                            <h2>Thêm albums</h2>              
                            <div class="container_albums">
                                <label for="addalbums"><b>Tên albums</b></label>
                                <input type="text" name="addalbums" id="addalbums">
                        
                                {{-- <label for="file"><b>Upload photos or albums</b></label> --}}
                                <input type="file" name="file" id="file_albums">
                                
                                <button type="submit" class="post_albums">Lưu albums</button>
                            </div>
                        
                            <div class="container_albums cancel">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy bỏ</button>
                        
                            </div>
                        </form>
                    </div>
                    {{-- end add albums --}}
                    {{-- hiện albums --}}
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <div class="edit_album">
                            <i class="fa-solid remove_album fa-ellipsis"></i>
                            {{-- hover edit_album --}}
                            <div class="edit_albums">
                                <ul class="dropdown-menus">
                                    <li><span><i class="fa-solid remove_albums fa-trash-can"></span></i><span>Xóa albums</span></li>
                                
                                </ul>
                            </div>
                             {{-- end hover edit_album --}}
                        </div>
                        <p class="name">Ảnh bìa</p>
                    </div>
                    {{-- end hiện albums --}}
        
                    {{-- text xoa cai nay --}}
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <div class="edit_album">
                            <i class="fa-solid remove_album fa-ellipsis"></i>
                            {{-- hover edit_album --}}
                            <div class="edit_albums">
                                <ul class="dropdown-menus">
                                    <li><span><i class="fa-solid remove_albums fa-trash-can"></span></i><span>Xóa albums</span></li>
                                
                                </ul>
                            </div>
                             {{-- end hover edit_album --}}
                        </div>
                        <p class="name">Ảnh đại diện</p>
                    </div> 
                    
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <div class="edit_album">
                            <i class="fa-solid remove_album fa-ellipsis"></i>
                            {{-- hover edit_album --}}
                            <div class="edit_albums">
                                <ul class="dropdown-menus">
                                    <li><span><i class="fa-solid remove_albums fa-trash-can"></span></i><span>Xóa albums</span></li>
                                
                                </ul>
                            </div>
                             {{-- end hover edit_album --}}
                        </div>
                        <p class="name">Tải lên từ điện thoại</p>
                    </div>
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <div class="edit_album">
                            <i class="fa-solid remove_album fa-ellipsis"></i>
                            {{-- hover edit_album --}}
                            <div class="edit_albums">
                                <ul class="dropdown-menus">
                                    <li><span><i class="fa-solid remove_albums fa-trash-can"></span></i><span>Xóa albums</span></li>
                                
                                </ul>
                            </div>
                             {{-- end hover edit_album --}}
                        </div>
                        <p class="name">Ảnh đại diện</p>
                    </div> 
                    
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <div class="edit_album">
                            <i class="fa-solid remove_album fa-ellipsis"></i>
                            {{-- hover edit_album --}}
                            <div class="edit_albums">
                                <ul class="dropdown-menus">
                                    <li><span><i class="fa-solid remove_albums fa-trash-can"></span></i><span>Xóa albums</span></li>
                                
                                </ul>
                            </div>
                             {{-- end hover edit_album --}}
                        </div>
                        <p class="name">Tải lên từ điện thoại</p>
                    </div>
                    {{-- end text xoa cai nay --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection