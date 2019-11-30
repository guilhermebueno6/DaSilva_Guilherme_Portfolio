

(() => {
    console.log('fired!');
    let menuButton = document.querySelector("#burgerMenu"),
    menuDiv = document.querySelector("#navWrapper"),
    closeB = document.querySelector("#closeButton"),
    MM = document.querySelector(".musicMixer img"),
    TyphMedia = document.querySelector(".typhoon img"),
    TSecurity = document.querySelector(".thermo img"),
    main = document.querySelector("main"),
    ThermoPage = document.querySelector("#two"),
    TyphPage = document.querySelector("#one"),
    MusicPage = document.querySelector("#three"),
    closePage1 = document.querySelector("#one .closePage"),
    closePage2 = document.querySelector("#two .closePage"),
    closePage3 = document.querySelector("#three .closePage");
    

    function openMenu(){
        menuButton.style = "display: none;";
        menuDiv.classList.add("showMenu");
     
    }
    function closeMenu(){
        menuDiv.classList.remove("showMenu");
        menuButton.style = "display:block;";
        }
    function openPiece(){
          main.style = "display:none;";
          piece = this.dataset.name;
          if (piece=="ThermoSecurity"){
            ThermoPage.classList.add("fadeIn");
          }else if (piece=="MusicMixer"){
              MusicPage.classList.add("fadeIn");
          }else if(piece=="TyphoonMedia"){
              TyphPage.classList.add("fadeIn");
          }
    }
    function closePiece(){
        ThermoPage.classList.remove("fadeIn");
        MusicPage.classList.remove("fadeIn");
        TyphPage.classList.remove("fadeIn");
        main.style = "display:block;";
    }
    closePage1.addEventListener("click", closePiece);
    closePage2.addEventListener("click", closePiece);
    closePage3.addEventListener("click", closePiece);
    MM.addEventListener("click", openPiece);
    TyphMedia.addEventListener("click", openPiece);
    TSecurity.addEventListener("click", openPiece);
    menuButton.addEventListener("click", openMenu);
    closeB.addEventListener("click", closeMenu);
    
})();