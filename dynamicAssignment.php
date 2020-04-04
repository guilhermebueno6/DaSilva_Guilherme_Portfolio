<?php 


function getMyAssignment($piece){
    
    if($piece=='H1'){
        $message = '<ul id="carousel">
        <li><img class="img1" src="images/thermo1.png" alt="Typhoon Media Website Picture"></li>
        <li><img class="img1" src="images/thermo2.png" alt="Typhoon Media Website Picture"></li>
        <li><img class="img1" src="images/thermo3.png" alt="Typhoon Media Website Picture"></li>
        <li><img class="img1" src="images/thermo4.png" alt="Typhoon Media Website Picture"></li>
        <li><img class="img1" src="images/thermo5.png" alt="Typhoon Media Website Picture"></li>
        <li><img class="img1" src="images/thermo6.png" alt="Typhoon Media Website Picture"></li>
        <li><img class="img1" src="images/thermo7.png" alt="Typhoon Media Website Picture"></li>
        </ul>
        <button class="prev" onclick="show(-1)">&lt;</button>
        <button class="next" onclick="show(+1)">&gt;</button>';
    }
    if($piece=='H2'){
        $message = '<ul id="carousel">
        <li><img src="images/OS1.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS2.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS3.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS4.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS5.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS6.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS7.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS8.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS9.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS10.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS11.jpg" alt="Ontario Summer Tourism Website"></li>
        <li><img src="images/OS12.jpg" alt="Ontario Summer Tourism Website"></li>
        </ul>
        <button class="prev" onclick="show(-1)">&lt;</button>
        <button class="next" onclick="show(+1)">&gt;</button>';
    }
    if($piece=='MM'){
        $message = '<ul id="carousel">
        <li><img class="img1" src="images/MM1.png" alt="Typhoon Media Website Picture"></li>
        </ul>
      ';
    }
    if($piece=='TM'){
        $message = '<ul id="carousel">
        <li><img class="img1" src="images/typhoon1.png" alt="Typhoon Media Website Picture"></li>
        <li><img class="img2" src="images/typhoon2.png" alt="Typhoon Media Website Picture"></li>
        </ul>
        <button class="prev" onclick="show(-1)">&lt;</button>
        <button class="next" onclick="show(+1)">&gt;</button>';
    }
    
    if($piece=='BV'){
        $message = '<video autoplay controls onended="rewind()" preload="metadata" src="images/beeVideo.mp4"></video>
        <script>
        function rewind(){
            video = document.querySelector("video");
            video.currentTime = 0;
        }
        </script>';
    }
    if($piece=='HIV'){
        $message = '<ul id="carousel">
        <li><img src="images/HIV1.png" alt="HIV/RHA Connection"></li>
        <li><img src="images/HIV2.png" alt="HIV/RHA Connection"></li>
        <li><img src="images/HIV3.png" alt="HIV/RHA Connection"></li>
        <li><img src="images/HIV4.png" alt="HIV/RHA Connection"></li>
        
        </ul>
        <button class="prev" onclick="show(-1)">&lt;</button>
        <button class="next" onclick="show(+1)">&gt;</button>';
    }
    if($piece=='AVaC'){
        $message = '<ul id="carousel">
        <li><img src="images/AVaC1.jpg" alt="Anti Vaping Ads"></li>
        <li><img src="images/AVaC2.jpg" alt="Anti Vaping Ads"></li>
        <li><img src="images/AVaC3.jpg" alt="Anti Vaping Ads"></li>
        </ul>
        <button class="prev" onclick="show(-2)">&lt;</button>
        <button class="next" onclick="show(+2)">&gt;</button>';
    }
    if($piece=='AW'){
        $message = '<ul id="carousel">';
    }
    if($piece=='MCMS'){
        $message = '<ul id="carousel">';
    }
    if($piece=='SCW'){
        $message = '<ul id="carousel">';
    }
    $message = $message.'<style>
    ul {
        display: flex;
        margin: 0;
        padding: 0;
        overflow: hidden;
      }
      
      li {
        display: block;
        list-style: none;
      }
      
      button.prev, button.next {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        color: #FFF;
        background-color: #333;
        border-radius: 50%;
        width: 44px;
        height: 44px;
      }
      button.prev {
        position: absolute;
        left: 0;
        top: 100vh;
      }
      button.next {
        position: absolute;
        right: 0;
        top: 100vh;
      }
      img{
          height:100vh;
      }
    </style>';
    return $message;
}
?>

