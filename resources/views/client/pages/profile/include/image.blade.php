<div class="info-cols">
    <!-- image -->
    <div class="profile-image">
        <div class="title-image">
            <h3>Image</h3>
        </div>
        <div class="tab_img">
            <button class="tablinks" onclick="openCity( 'images')">Images</button>
            <button class="tablinks" onclick="openCity( 'albums')">Albums</button>
        </div>

        {{-- image cua ban --}}

        <div class="tabs active" id="images">
            <div class="tabcontent" >
                <div class="div-image">
                    <img src="{{asset('img/hoa.jpg')}}">
                </div>
    
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
                {{-- end text xoa cai nay --}}
            </div>
        </div>

        {{-- albums cua ban --}}
        <div class="tabs" id="albums">
            <div class="tabcontent">
                <div class="albums">
                    <div class="add_ablums"> <i class="fa-solid fa-plus"></i></div>
                    <p class="name">Add albums</p>
                </div>
                
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