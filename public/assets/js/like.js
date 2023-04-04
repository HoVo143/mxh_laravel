
const nutTym = document.querySelector('.block_heart');

let nutTymLove = false;

// nut Tym
nutTym.addEventListener("click", function(){
    if(nutTymLove){
        nutTymLove = false;
        nutTym.removeAttribute("style");
    }
    else {
        nutTymLove = true;
        nutTym.style.color = "red";
    }
})