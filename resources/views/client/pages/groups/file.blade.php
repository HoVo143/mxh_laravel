@extends('client.pages.groups.group')

@section('btn_group')

<div class="containers_file">
    <div class="wrapper_file">
        <div class="name_file">
            <h4>File phương tiện</h4>
            <button>Thêm ảnh</button>
        </div>
        <div class="file_image_container">
            <div class="file_image_wrapper" >
                {{-- ảnh  --}}
                <div class="file_image">
                    <img src="{{asset('img/hoa.jpg')}}">
                </div>
                {{-- end ảnh  --}}
        
        
                {{-- text xoa cai nay --}}
                <div class="file_image">
                    <img src="{{asset('img/hoa.jpg')}}">
                </div>
                <div class="file_image">
                    <img src="{{asset('img/hoa.jpg')}}">
                </div>
                <div class="file_image">
                    <img src="{{asset('img/hoa.jpg')}}">
                </div>
                <div class="file_image">
                    <img src="{{asset('img/hoa.jpg')}}">
                </div>
                <div class="file_image">
                    <img src="{{asset('img/hoa.jpg')}}">
                </div>
                <div class="file_image">
                    <img src="{{asset('img/hoa.jpg')}}">
                </div>
                <div class="file_image">
                    <img src="{{asset('img/hoa.jpg')}}">
                </div>
                {{-- end text xoa cai nay --}}
            </div>
        </div>
    </div>
</div>
@endsection