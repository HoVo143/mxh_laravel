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
                <h3>Image</h3>
            </div>
            {{-- <div class="tab_img">
                <button class="tablinks" data-target="#images">Your picture</button>
                <button class="tablinks" data-target="#albums">Your Albums</button>
            </div> --}}
            <ul class="tab_img">
                <li data-target="#content_1">
                    <p>Your picture</p>
                </li>
                <li data-target="#content_2">
                    <p>Your Albums</p>
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
                                    <li><i class="fa-solid fa-trash-can"></i>Delete photos</li>
                                    <li><i class="fa-solid fa-user"></i>Set as Avatar</li>
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
                        <p class="name">Add albums</p>
                        {{-- add --}}
                    </div>
                    <div id="id01" class="modalalbums">
                        <form class="modal-content animate" action="" method="get">     
                            <h2>Add albums</h2>              
                            <div class="container_albums">
                                <label for="addalbums"><b>Albums name</b></label>
                                <input type="text" name="addalbums" id="addalbums">
                        
                                {{-- <label for="file"><b>Upload photos or albums</b></label> --}}
                                <input type="file" name="file" id="file_albums">
                                
                                <button type="submit" class="post_albums">Post albums</button>
                            </div>
                        
                            <div class="container_albums cancel">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        
                            </div>
                        </form>
                    </div>
                    {{-- end add albums --}}
    
    
    
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <p class="name">cover image</p>
                    </div>
        
                    {{-- text xoa cai nay --}}
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <p class="name">avatar</p>
                    </div> 
                    
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <p class="name">upload from mobile</p>
                    </div>
                    <div class="albums">
                        <img src="{{asset('img/hoa.jpg')}}">
                        <p class="name">Notable photo</p>
                    </div>
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <p class="name">upload from mobile</p>
                    </div>
                    <div class="albums">
                        <img src="{{asset('img/WebDesign.jpg')}}">
                        <p class="name">Notable photo</p>
                    </div>
                    {{-- end text xoa cai nay --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection