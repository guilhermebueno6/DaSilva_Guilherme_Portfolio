

(() => {
    console.log('fired!');
    let menuButton = document.querySelector("#burgerMenu"),
    menuDiv = document.querySelector("#navWrapper"),
    closeB = document.querySelector("#closeButton");

    function openMenu(){
        menuButton.style = "display: none;";
        menuDiv.classList.add("showMenu");
     
    }
    function closeMenu(){
        menuDiv.classList.remove("showMenu");
        menuButton.style = "display:block;";
        }

    menuButton.addEventListener("click", openMenu);
    closeB.addEventListener("click", closeMenu);
    
})();