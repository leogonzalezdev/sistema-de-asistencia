let arrow = document.querySelectorAll(".arrow");
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector("#menuBurger");

for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
  });
}
sidebarBtn.addEventListener("click", () => {
  sidebar.classList.toggle("close");
  if(sidebarBtn.classList.contains('bx-menu')){
    sidebarBtn.classList.remove('bx-menu');
    sidebarBtn.classList.add('bx-x');
  }else{
    sidebarBtn.classList.remove('bx-x');
    sidebarBtn.classList.add('bx-menu');
  }
});
