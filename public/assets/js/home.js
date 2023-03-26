var darkBtn = document.getElementById("dark-btn")
// var fas = document.getElementById('post-fas-container');
// window.onclick = function(event1) {
//     if (event1.target == fas) {
//         fas.style.display = "none";
//     }
// }

var postrigh = document.querySelector(".posts");
// home
function postrighsMenuToggle(){
    postrigh.classList.toggle("post-right-menu-height");
    
}

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
var comment = document.getElementById('timess');
window.onclick = function(event) {
    if (event.target == comment) {
        comment.style.display = "none";
    }
}

// comment trong comment
var modal = document.getElementById('section-cmt');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}