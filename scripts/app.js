const loader = document.querySelector("#loading-window")


window.addEventListener("load", loaderFunct)
document.addEventListener("DOMContentLoaded", loaderFunct)

function loaderFunct(){
  loader.style.display = 'none'
}