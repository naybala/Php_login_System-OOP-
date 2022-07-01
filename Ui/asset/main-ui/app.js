const sections = document.querySelectorAll('section[id]');
function scrollActive(){
    const scrollY = window.pageYOffset
    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 100;
        const sectionId = current.getAttribute('id')
        const sectionActive =document.querySelector('.navbar-nav a[href*=' + sectionId + ']');
        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            sectionActive.classList.add("active");
        }else{
            sectionActive.classList.remove("active");
        }
    })
}
window.addEventListener('scroll', scrollActive);





// const nav = document.querySelector(".navbar-nav")
// const navActive = document.querySelectorAll('.nav-link');
// nav.addEventListener("click",(e)=>{
//     const id = e.target.dataset.id;
//    if(id){
//     navActive.forEach(function (a) {
//         a.classList.remove("active");
//       });
//       e.target.classList.add("active");
//    }
   
// });




