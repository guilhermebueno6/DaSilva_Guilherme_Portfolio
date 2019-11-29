

(() => {
    console.log('fired!');
    let menuButton = document.querySelector("#burgerMenu"),
    menuDiv = document.querySelector("#navWrapper"),
    closeB = document.querySelector("#closeButton");
    var portfolioPiece = document.querySelectorAll(".preview")

    function openMenu(){
        menuButton.style = "display: none;";
        menuDiv.classList.add("showMenu");
     
    }
    function closeMenu(){
        menuDiv.classList.remove("showMenu");
        menuButton.style = "display:block;";
        }
    function openPiece(){
          piece = this.dataset.name
          if(piece==MusicMixer){
              console.log("MM")
          }
          else{
              console.log("not MM")
          }

    }
    portfolioPiece.addEventListener("click", openPiece);
    menuButton.addEventListener("click", openMenu);
    closeB.addEventListener("click", closeMenu);
    
})();