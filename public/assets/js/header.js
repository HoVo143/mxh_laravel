const settingsmenu = document.querySelector(".settings-menu");
const searchBtnMenu = document.querySelector(".messenger-menu");
const notifiBtnMenu = document.querySelector(".notification-menu");


//search home
function messengerMenuToggle(){
    searchBtnMenu.classList.toggle("messenger-menu-height");
    notifiBtnMenu.classList.remove("notification-menu-height");
}
//notification home
function notificationMenuToggle(){
    notifiBtnMenu.classList.toggle("notification-menu-height");
    searchBtnMenu.classList.remove("messenger-menu-height");
}
//setting home
function settingsMenuToggle(){
    settingsmenu.classList.toggle("settings-menu-height");
    
}

// xóa lịch sử tìm kiếm trên thanh search header
const closebtns = document.getElementsByClassName("fa-xmark");
let i;
for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}


const searchBar = document.querySelector(".users .search_messenger input");
const searchBtn = document.querySelector(".users .search_messenger button");
const usersList = document.querySelector(".users .users-list");


searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle('active');
    searchBar.value = "";
}
  