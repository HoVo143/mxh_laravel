{{-- chat  --}}
<div class="sidebars_chat" id="sidebars_chat">
    <div class="wrapper_ms">
        <section class="chat-area">
            <header>
                {{-- <a href="" class="back-icon"><i class="fas fa-arrow-left"></i></a> --}}
                <img src="{{asset('img/user1.webp')}}" alt="" class="old">
                <div class="details">
                    <span class="user_chat">Danh Nguyen</span>
                    <p class="onlines">Hoạt động 21 phút trước</p>
                </div>
                <div class="call_chat">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="callvideo_chat" id="callvideo_chat">
                    <i class="fa-solid fa-video old_camera" id="show-meet"></i>
                </div>
                <div class="close_chat" onclick="onclickShowChat()">
                    <span> &times; </span>
                </div>
            </header>
            <div class="chat-box">
                {{-- minh` --}}
                <div class="chat outgoing">
                    <div class="details">
                        <div class="sent_image">
                            <img src="" alt="">
                            {{-- nhấp vào xem ảnh --}}
                            <div id="myModal" class="modal">
                                <span class="close_image">&times;</span>
                                <img class="modal-content new" id="img012" id="new">
                                <div id="caption"></div>
                            </div>
                        </div>
                        <p>helo xin chao ban cong danh minh la vo cong ho
                            ban chao lai minh di ban cong danh
                        </p>
                    </div>
                </div>
                {{-- ban be   --}}
                <div class="chat incoming">
                    {{-- logo --}}
                    <img src="{{asset('img/user1.webp')}}" alt="" >
                    <div class="details">
                        <div class="sent_image">
                            <img id="myImg" src="{{asset('img/web-developer.jpg')}}" alt="">
                            {{-- nhấp vào xem ảnh --}}
                            <div id="myModal" class="modal">
                                <span class="close_image">&times;</span>
                                <img class="modal-content new" id="img012" id="new">
                                <div id="caption"></div>
                            </div>
                        </div>
                        <p>helo xin chao ban cong danh minh la vo cong ho
                        ban chao lai minh di ban cong danh
                        </p>
                    </div>
                </div> 

                {{-- text --}}
                {{-- minh` --}}
                <div class="chat outgoing">
                    <div class="details">
                        <div class="sent_image">
                            <img src="{{asset('img/ho_vo.jpg')}}" alt="">
                            {{-- nhấp vào xem ảnh --}}
                            <div id="myModal" class="modal">
                                <span class="close_image">&times;</span>
                                <img class="modal-content new" id="img012" id="new">
                                <div id="caption"></div>
                            </div>
                        </div>
                        <p>helo xin chao ban cong danh minh la vo cong ho
                            ban chao lai minh di ban cong danh
                        </p>
                    </div>
                </div>
                
            </div>

            <form action="#" class="typing-area" autocomplete="off">
                {{-- hiện ảnh lên --}}
                <div id="image-wrappers">
                    <div class="image-container">
                        {{-- <i id="close_fileimg" class="fa-solid fa-xmark"></i> --}}
                    </div>
                </div>
                <!-- nút chọn file hình ảnh -->
                <label class="file-upload">
                    <i class="fa-solid fa-file-image"></i>
                    <input type="file" class="image_chat" id="image-selector" accept=".png, .jpg, .jpeg, .gif">
                </label>
 
                {{-- id bản thân mình nhắn --}}
                <input type="text" name="outgoing_id" value="" hidden>
                {{-- end id bản thân mình nhắn --}}

                {{-- id bạn bè nhắn --}}
                <input type="text" name="incoming_id" value="" hidden>
                {{-- end id bạn bè nhắn --}}

                {{-- ô nhập chữ nhắn --}}
                <input type="text" name="message" class="input-field" placeholder="nhắn cho bạn bè...">
                {{-- end ô nhập chữ nhắn --}}

                <button><i class="fa-solid fa-paper-plane"></i></button>
            </form>
        </section>
    </div>
</div>


<style>
    /* chat area css code */
.sidebars_chat{
    margin-left: 15px;
    background-color: var(--bg-color);
    border: 2px solid var(--border-color);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    border-radius: 4px 4px 0 0;
    position:fixed;
    z-index: 3;
    right: 15px;
    height: 505px;
    padding: 10px;
    width: 380px;
    bottom: 0;
    display: none;
}
.sidebars_chat_show{
    display: block;
}
#image-wrappers{
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
    /* padding: 8px; */
    position: absolute;
    z-index: 2;
    bottom: 65px;
    width: 95%;
    height: auto;
    border-top: 1px solid var(--border-color);
    background: rgba(0, 0, 0, 0.6);
}

.image-container {
    margin-top: 8px;
    margin-left:10px;
    margin-bottom:8px;  
    display: none;
    position: relative;
    width: 100px;
    height: 100px;
    background-size: cover;
    background-position: center;
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.delete-button {
  position: absolute;
  right: 3px;
  color: 25px;
  /* background: white; */
  border: none;
  cursor: pointer;
}

.delete-button:hover{
    opacity: .7;
}
.chat-area header{
    position: relative;
    display: flex;
    align-items: center;
    padding-bottom: 10px;
}
.sidebars_chat .call_chat{
    position: absolute;
    right: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    text-align: center;
    border-radius: 50%;
    cursor: pointer;
    width: 28px;
    height: 28px;
    color: salmon;

}
.sidebars_chat .callvideo_chat{
    position: absolute;
    right: 38px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    text-align: center;
    border-radius: 50%;
    cursor: pointer;
    width: 28px;
    height: 28px;
    color: salmon;


}
.sidebars_chat .callvideo_chat .fa-phone-volume{
    color: unset;
}
.sidebars_chat .close_chat{
    position: absolute;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    cursor: pointer;
    width: 28px;
    height: 28px;
}
.sidebars_chat .close_chat span{
    font-size: 35px;
    color: salmon;

}
.chat-area header .close_chat:hover, .call_chat:hover, .callvideo_chat:hover{
    background:  var(--search-color);
}
.chat-area header .onlines{
    margin-top: 2px;
    font-size: 14px;
    color: #999;
}
.chat-area header .back-icon{
    font-size: 18px;
    color: #333;
}
.chat-area header img{
    height: 45px;
    width: 45px;
    margin-right: 10px ;
    cursor: pointer;
    border: unset
}
.chat-area header .user_chat{
    font-size: 17px;
    font-weight: 500;
    color: var(--color-color);
}
.chat-box{
    height: 370px;
    overflow-y:auto ;
    background: var(--body-color);
    padding: 8px;
    box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
                inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
}
.chat-box::-webkit-scrollbar{
    /* width: 0 !important;
    display: none; */
    width:  7px;
}
.chat-box::-webkit-scrollbar-thumb {
    background-color: #bfbfbf;
    border-radius: 5px;
}
.chat-box .chat{
    margin: 15px 0;
}
.chat-box .chat p{
    padding: 8px 16px;
    box-shadow: 0 0 32px rgb(0 0 0 / 8%),
                0 16px 16px -16px rgb(0 0 0 / 10%);
}
.chat-box .outgoing{
    display: flex;
}
.outgoing .details{
    margin-left: auto;
    max-width: calc(100% - 130px);
}
.outgoing .details p {
    /* word-wrap: break-word;  */
    word-wrap: break-word; 
    background: #333;
    color: #fff;
    border-radius: 18px 18px 0 18px;
}
.chat-box .incoming {
    display: flex;
    align-items: flex-end;
}
.chat-box .incoming img{
    height: 35px;
    width: 35px;
    border: unset

}
.incoming .details {
    margin-left: 10px;
    margin-right: auto;
    max-width: calc(100% - 130px);
}
.incoming .details p {
    color: #333;
    background: #fff;
    border-radius: 18px 18px 18px 0;
}

/* chat gui */
.chat-area .typing-area{
    padding: 10px 0px;
    display: flex;
    justify-content: space-between;
}
.typing-area input{
    height: 38px;
    width: calc(100% - 58px);
    font-size: 17px;
    border: 1px solid #ccc;
    padding: 0 13px;
    border-radius: 5px 0px 0px 5px;
    outline: none;
}
.typing-area button{
    width: 55px;
    border: none;
    outline: none;
    background: #333;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    border-radius: 0 5px 5px 0;
}
/* định dạng phần input type file */
input[type="file"] {
  display: none; /* ẩn phần input file trực tiếp */
}

/* định dạng phần nút được thiết kế bằng hình ảnh */
.file-upload i{
    display: flex;
    align-items: center;
    margin-left: 10px;
    width: 35px;
    height: 38px;
    font-size: 30px;
    cursor: pointer; 
    color: var(--color-color);
}

.sent_image img:first-child{
    border-radius: 4px;
    width: 200px;
    height: auto;
    cursor: pointer;
    border: none
}


/* nhấp xem ảnh */
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {

}
/* Add Animation */
/* .modal-content {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
} */
.chat .old {
  /* Loại bỏ các thuộc tính CSS của hình ảnh thứ nhất */
  border-radius: unset;
  border: none;
  box-shadow: none;
}

.chat .modal .new {
    margin: auto;
    display: block;
    width: 80%;
    border-radius: 5px;
    height: auto;
    max-width: 700px;
    margin-bottom: 50px
}

/* The Close Button */
.close_image {
  position: absolute;
  top: 85px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close_image:hover,
.close_image:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>