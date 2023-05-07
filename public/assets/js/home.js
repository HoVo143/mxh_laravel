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