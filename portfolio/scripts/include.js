window.addEventListener('DOMContentLoaded', function() {
    var navbar = document.getElementById('navbar');
    var footer = document.getElementById('footer');
  
    var xhr = new XMLHttpRequest();
    
    xhr.open('GET', '../../portfolio/components/navbar.html', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            navbar.innerHTML = xhr.responseText;
            
            // Maintenant que le contenu de la navbar est chargé, vous pouvez sélectionner l'élément .menu-hamb
            const btnHamburger = document.querySelector("#menuhamb");
            const navbarRespon = document.querySelector(".box-nav-mobile")
            btnHamburger.addEventListener("click", funcResponsive)
            function funcResponsive(){
                btnHamburger.classList.toggle("active")
                navbarRespon.classList.toggle("active-menu-respon")
            }
        }
    };
    xhr.send();
  
    // Code pour charger le contenu du footer
    var xhrFooter = new XMLHttpRequest();
    
    xhrFooter.open('GET', '../../portfolio/components/footer.html', true);
    xhrFooter.onreadystatechange = function() {
        if (xhrFooter.readyState === 4 && xhrFooter.status === 200) {
            footer.innerHTML = xhrFooter.responseText;
        }
    };
    xhrFooter.send();
});
