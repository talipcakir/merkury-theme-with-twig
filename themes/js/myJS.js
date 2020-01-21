function openNav() {
  document.getElementById("myLeftNav").style.width = "250px";
  document.getElementById("head-LR").style.marginLeft = "220px";
  document.getElementById("main-LR").style.marginLeft = "220px";
  document.getElementById("openNavB").style.display ="none";
  document.getElementById("closeNavB").style.display ="block";
}
function closeNav() {
  document.getElementById("myLeftNav").style.width = "10px";
  document.getElementById("head-LR").style.marginLeft = "1rem";
  document.getElementById("main-LR").style.marginLeft = "1rem";
  document.getElementById("openNavB").style.display ="block";
  document.getElementById("closeNavB").style.display ="none";
}
function startControl(){
  if($(window).width() >= 767 ) {
  openNav();
  }
  else
  closeNav();
}