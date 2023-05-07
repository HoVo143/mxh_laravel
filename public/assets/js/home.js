var darkBtn = document.getElementById("dark-btn")
darkBtn.onclick = function(){
    darkBtn.classList.toggle("dark-btn-on");
    document.body.classList.toggle("dark-theme");
    
    if(localStorage.getItem("theme") == "light")
    {
        localStorage.setItem("theme", "dark");
    }
    else
    {
        localStorage.setItem("theme", "light");
    }
}
if(localStorage.getItem("theme") == "light")
{
    darkBtn.classList.remove("dark-btn-on");
    document.body.classList.remove("dark-theme");
}
else if(localStorage.getItem("theme") == "dark")
{
    darkBtn.classList.add("dark-btn-on");
    document.body.classList.add("dark-theme");
}
else{
    localStorage.setItem("theme", "light");
}



var modal = document.getElementById('section-cmt');
var clickbtn = document.getElementById('id01'); // albums, mời bb vào group
var EDIT_USER = document.getElementById('EDIT_USER'); //EDIT USER
var searchs_header = document.getElementById('searchss');

window.onclick = function(event) {
    //searchs header
    if (event.target == searchs_header) {
        searchs_header.style.display = "none";
    }
    // comment
    if (event.target == modal) {
        modal.style.display = "none";
    }
    // albums, mời bb vào group
    if (event.target == clickbtn) {
        clickbtn.style.display = "none";
    }
    //EDIT USER
    if (event.target == EDIT_USER) {
        EDIT_USER.style.display = "none";
    }
}

// posts edit comment
var postrigh = document.querySelector(".posts");
function postrighsMenuToggle(){
    postrigh.classList.toggle("post-right-menu-height");
    
}

// home edit
// var editbtn = document.querySelector(".edit-right");
// function editbtnMenuToggle(){
//     editbtn.classList.toggle("edit-menu-height");
    
// }


/// file image của chat
const fileInput = document.querySelector('input[type="file"]');
const fileButton = document.querySelector('.file-upload');
  
fileButton.addEventListener('click', function() {
    fileInput.click();
});


//click vào bạn bè hiện ô chat
const showChat = document.getElementById('sidebars_chat');

function onclickShowChat(){
    showChat.classList.toggle("sidebars_chat_show");
    
}

//click hiện ảnh ở ô chat
var modalChat = document.getElementById("myModal");
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img012");
var captionText = document.getElementById("caption");

img.onclick = function(){
  modalChat.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close_image")[0];

span.onclick = function() { 
  modalChat.style.display = "none";
}



// hiện ảnh lên thẻ div khi chọn file trên ô chat 
const imageSelector = document.getElementById('image-selector');
const imageWrappers = document.getElementById('image-wrappers');
const maxImages = 2;

imageSelector.addEventListener('change', (event) => {
//
  const files = event.target.files;
  const selectedImages = 0; // Khởi tạo biến đếm số lượng ảnh được chọn

  for (const file of files) {
    if (selectedImages >= 5) { // Nếu đã chọn đủ 5 ảnh thì không cho chọn thêm
        break;
    }
    const reader = new FileReader();

    reader.addEventListener('load', (event) => {
        const imageUrl = event.target.result;
        const imageContainer = document.createElement('div');
        imageContainer.className = 'image-container';
        imageContainer.style.display = "block";
        imageContainer.style.backgroundImage = `url(${imageUrl})`;

        //nut xóa
        const deleteButton = document.createElement('div');
        deleteButton.className = 'delete-button';
        deleteButton.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
        deleteButton.addEventListener('click', () => {
            imageContainer.remove();
            selectedImages--; // Giảm biến đếm khi xóa ảnh
        });

        imageContainer.appendChild(deleteButton);
        imageWrappers.appendChild(imageContainer);
        selectedImages++; // Tăng biến đếm khi chọn ảnh mới

    });

    reader.readAsDataURL(file);
  }
});



// tìm kiếm ở bạn bè trong right-sidebar 
const searchFriendsHome = document.querySelector('#search-friends-home');
searchFriendsHome.addEventListener('input', handleSearch);

function handleSearch() {
    const inputs = this.value.toLowerCase();
    const onlineLists = document.querySelectorAll('.online-list');
  
    onlineLists.forEach((onlineList) => {
      const names = onlineList.querySelector('p').textContent.toLowerCase();
      const isMatchs = names.includes(inputs);
  
      onlineList.style.display = isMatchs ? 'flex' : 'none';
    });
  }
  

  // nhúng google meet vào call video
  const meetDiv = document.getElementById("callvideo_chat");
  const showMeetButton = document.getElementById("show-meet");
  
  // Nhúng mã nhúng Google Meet vào thẻ div
  meetDiv.innerHTML = '<iframe src="https://meet.google.com/hqm-ojsu-jrw" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>';
  
  // Ẩn thẻ div khi tài khoản Google chưa đăng nhập
  meetDiv.style.display = "none";
  
  // Hiển thị cuộc họp khi nhấn vào nút "Mở cuộc họp"
  showMeetButton.addEventListener("click", () => {
    meetDiv.style.display = "block";
  });
  

