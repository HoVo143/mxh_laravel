// IMG
const prevBtn = document.querySelector('.btn.previ');
const nextBtn = document.querySelector('.btn.next');
const slides = document.querySelectorAll('.slide');

let activeIndex = 0;

slides[activeIndex].classList.add('active');

function changeSlide(page){
    slides[activeIndex].classList.remove('active');
    activeIndex = activeIndex + page;
    // lùi từ 0 về 5
    if(activeIndex === -1){
        activeIndex = slides.length - 1;
    }
    if(activeIndex === slides.length){
        activeIndex = 0;
    }
    //
    slides[activeIndex].classList.add('active');
}
// nút lùi <
prevBtn.addEventListener('click',  function () {
    changeSlide(-1);
});
// nút tiếp >
nextBtn.addEventListener('click',  function () {
    changeSlide(1);
});
// tự chạy qua ảnh
setInterval(function(){
    changeSlide(1);
}, 2000);