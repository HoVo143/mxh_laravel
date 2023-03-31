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

// comment
// var comment = document.getElementById('timess');
// window.onclick = function(event) {
//     if (event.target == comment) {
//         comment.style.display = "none";
//     }
// }
// comment trong comment
var modal = document.getElementById('section-cmt');
var albums = document.getElementById('id01'); // albums
var EDIT_USER = document.getElementById('EDIT_USER'); //EDIT USER
window.onclick = function(event) {
    // comment
    if (event.target == modal) {
        modal.style.display = "none";
    }
    // albums
    if (event.target == albums) {
        albums.style.display = "none";
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

