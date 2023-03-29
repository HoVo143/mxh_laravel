// function openCity(cityName) {
//     var i, tabcontent;
//     tabcontent = document.getElementsByClassName("tabs");
//     for (i = 0; i < tabcontent.length; i++) {
//       tabcontent[i].style.display = "none";
//     }
//     document.getElementById(cityName).style.display = "block";
// }


const tabBtns = document.querySelectorAll('.tab_img li');
const tabContent = document.querySelectorAll('.tabs');
const handleTabBtnClick = (tab) =>{
    tabContent.forEach((p) => {
        p.classList.remove('active');
    })
    tabBtns.forEach((li) => {
        li.classList.remove('active'); /* xóa các class  có active */ 
    });

    tab.classList.add('active');
    
    const target = tab.getAttribute('data-target');

    const activeTab = document.querySelector(target);
    activeTab.classList.add('active');

}
tabBtns.forEach((btn)=>{
  btn.addEventListener('click', () => {
      handleTabBtnClick(btn);
  })
})