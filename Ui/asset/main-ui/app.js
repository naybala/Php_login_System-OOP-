const nav = document.querySelector(".navbar-nav")
const navActive = document.querySelectorAll('.nav-link');

nav.addEventListener("click",(e)=>{
    const id = e.target.dataset.id;
   if(id){
    navActive.forEach(function (a) {
        a.classList.remove("active");
      });
      e.target.classList.add("active");
   }
   
});