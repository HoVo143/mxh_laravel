@extends('client.layout.indexlayout')
@section('content')
{{-- INFOR PEOPLE --}}
@include('client.pages.profile.people.infopeople')
{{-- END INFOR PEOPLE --}}

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
                       
                    </div>
                    {{-- end ảnh  --}}
    
    
    
                    {{-- text xoa cai nay --}}
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                    </div>
                    
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                        
                    </div>
                    
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                        
                    </div>
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                        
                    </div> 
                    
                    <div class="div-image">
                        <img src="{{asset('img/hoa.jpg')}}">
                       
                    </div>
                    {{-- end text xoa cai nay --}}
                </div>
            </div>
    
            {{-- albums cua ban --}}
            <div class="tabs" id="content_2">
                <div class="tabcontent">
    
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
                        <img src="{{asset('img/WebDesign.jpg')}}">
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