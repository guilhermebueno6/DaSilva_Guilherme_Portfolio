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
        <button class="next" onclick="show(+1)">&gt;</button>
        <h3>For this Project, a team of 5 people were required to develop, build and style a full website for a security company with the purpose of launching a new product within the time limit of 24 hours, where the product would be a thermostat that could connect to Voice activation services such as Alexa.<br>
        I was responsible for providing the back end of the website. which we served using Node. I was also responsible for using the images provided from the 3D model built by our team to implement an interactive model of the porduct on our website, where you could use your mouse to rotate the model to see it expand, all using JavaScript.</h3>';
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
        <button class="next" onclick="show(+1)">&gt;</button>
        <h3>For this project, a team of 5 people were supposed to build, style and conceptualize a full website, as well as building an advertizing campaign for it, within the time limit of 24 hours. <br>
        The project was for a Tourism company focused on vacation spots on Ontario. I was responsible for building the back end of the website, using PHP, and also using a RESTful API to integrate the project with its Vue.js Front End. Aside from that, we also had to build functioning Contact forms, which I built using PHPMailer. </h3>';
    }
    if($piece=='MM'){
        $message = '<ul id="carousel">
        <li><img class="img1" src="images/MM1.png" alt="Music Mixer Website Picture"></li>
        </ul>
      <h3>This was an audio focused project, based on JavaScript mainly.
      The Music Mixer is a web App where you can choose how to make your own mix with provided samples of music.
      We made sample tracks and each icon was its own track, if the Icons in a line are combined properly our default songs are played. Although the user is free to make its own music track based on what we provided, they can still just combine the first and second row icons on the Music Mixer to listen to our song.</h3>';
    }
    if($piece=='TM'){
        $message = '<ul id="carousel">
        <li><img class="img1" src="images/typhoon1.png" alt="Typhoon Media Website Picture"></li>
        <li><img class="img2" src="images/typhoon2.png" alt="Typhoon Media Website Picture"></li>
        </ul>
        <button class="prev" onclick="show(-1)">&lt;</button>
        <button class="next" onclick="show(+1)">&gt;</button>
        <h3>This was a team project with 4 people. We were supposed to build a team website for our freelancing company. We were responsible of providing all of the assets as well as building all of the elementson the website. We also made a video to showcase our team and show our workspace</h3>';
    }
    
    if($piece=='BV'){
        $message = '<video autoplay controls onended="rewind()" preload="metadata" src="images/beeVideo.mp4"></video>
        <script>
        function rewind(){
            video = document.querySelector("video");
            video.currentTime = 0;
        }
        </script>
        <h3>This was a Video made to raise awareness on the extinction of Bees that have been occurring for a few years.</h3>';
    }
    if($piece=='HIV'){
        $message = '<ul id="carousel">
        <li><img src="images/HIV1.png" alt="HIV/RHA Connection"></li>
        <li><img src="images/HIV2.png" alt="HIV/RHA Connection"></li>
        <li><img src="images/HIV3.png" alt="HIV/RHA Connection"></li>
        <li><img src="images/HIV4.png" alt="HIV/RHA Connection"></li>
        
        </ul>
        <button class="prev" onclick="show(-1)">&lt;</button>
        <button class="next" onclick="show(+1)">&gt;</button>
        <h3>This project was intended as a pitch for the RHA Connection company, which is an NGO who gives support for people with HIV. Our website has its own custom Map with locations for HIV blood-testing made with the Google Maps API. The back-end serving, which I was responsible for, is integrated with a Vue.js Front-end, which fetches all of the map positions for the HIV testing sites, which are all stored on the database. Admins can also add, alter and delete the markers if they want to. Admins can also add other Admins. </h3>';
    }
    if($piece=='AVaC'){
        $message = '<ul id="carousel">
        <li><img src="images/AVaC1.jpg" alt="Anti Vaping Ads"></li>
        <li><img src="images/AVaC2.jpg" alt="Anti Vaping Ads"></li>
        <li><img src="images/AVaC3.jpg" alt="Anti Vaping Ads"></li>
        </ul>
        <button class="prev" onclick="show(-2)">&lt;</button>
        <button class="next" onclick="show(+2)">&gt;</button>
        <h3>This was an Anti-Vaping campaign for Health canada where we were supposed to raise awareness for vaping lung disease.</h3>';
    }
    if($piece=='AW'){
        $message = '<ul id="carousel">
        <li><img src="images/AW1.png" alt="Anglers Website"></li>
        <li><img src="images/AW2.png" alt="Anglers Website"></li>
        <li><img src="images/AW3.png" alt="Anglers Website"></li>
        <li><img src="images/AW4.png" alt="Anglers Website"></li>
        <li><img src="images/AW5.png" alt="Anglers Website"></li>
        <li><img src="images/AW6.png" alt="Anglers Website"></li>
        <li><img src="images/AW7.png" alt="Anglers Website"></li>
        <li><img src="images/AW8.png" alt="Anglers Website"></li>
        <li><img src="images/AW9.png" alt="Anglers Website"></li>
        <li><img src="images/AW10.png" alt="Anglers Website"></li>
        <li><img src="images/AW11.png" alt="Anglers Website"></li>
        <li><img src="images/AW12.png" alt="Anglers Website"></li>
        <li><img src="images/AW13.png" alt="Anglers Website"></li>
        <li><img src="images/AW14.png" alt="Anglers Website"></li>
        <li><img src="images/AW15.png" alt="Anglers Website"></li>
        <li><img src="images/AW16.png" alt="Anglers Website"></li>
        <li><img src="images/AW17.png" alt="Anglers Website"></li>
        <li><img src="images/AW18.png" alt="Anglers Website"></li>
        <li><img src="images/AW19.png" alt="Anglers Website"></li></ul>
        <button class="prev" onclick="show(-1)">&lt;</button>
        <button class="next" onclick="show(+1)">&gt;</button>
        <h3>This was an update on The TRAA website, an organization located by Thams River in London, ON. The association had an outdated website and reached out to check whether they could get an update on it.</h3>';
    }
    if($piece=='MCMS'){
        $message = '<ul id="carousel">
        <li><img src="images/MCMS1.png" alt="Movies CMS"</li>
        <li><img src="images/MCMS2.png" alt="Movies CMS"</li>
        <li><img src="images/MCMS3.png" alt="Movies CMS"</li>
        <li><img src="images/MCMS4.png" alt="Movies CMS"</li>
        <li><img src="images/MCMS5.png" alt="Movies CMS"</li>
        <li><img src="images/MCMS6.png" alt="Movies CMS"</li>
        <li><img src="images/MCMS7.png" alt="Movies CMS"</li>
        <li><img src="images/MCMS8.png" alt="Movies CMS"</li>
        </ul>
        <button class="prev" onclick="show(-1)">&lt;</button>
        <button class="next" onclick="show(+1)">&gt;</button>
        <h3>This was a proof of concept project, where the content must be provided dynamically through a database. Also you can filter the content through a GET method.</h3>';
    }
    if($piece=='SCW'){
        $message = '<ul id="carousel">
        <li><img src="images/SCW1.png" alt="SportChek Website"</li>
        <li><img src="images/SCW2.png" alt="SportChek Website"</li>
        <li><img src="images/SCW3.png" alt="SportChek Website"</li>
        <li><img src="images/SCW4.png" alt="SportChek Website"</li>
        <li><img src="images/SCW5.png" alt="SportChek Website"</li>
        <li><img src="images/SCW6.png" alt="SportChek Website"</li>
        <li><img src="images/SCW7.png" alt="SportChek Website"</li>
        <li><img src="images/SCW8.png" alt="SportChek Website"</li>
        <li><img src="images/SCW9.png" alt="SportChek Website"</li>
        </ul>
        <button class="prev" onclick="show(-1)">&lt;</button>
        <button class="next" onclick="show(+1)">&gt;</button>
        <h3>This was another proof of concept project, where you are able to filter all of the content on the website and login to your admin account and Add, delete and edit content within the website.</h3>';
    }
    // $message = $message.'<style>
    // ul {
    //     display: flex;
    //     margin: 0;
    //     padding: 0;
    //     overflow: hidden;
    //   }
      
    //   li {
    //     display: block;
    //     list-style: none;
    //   }
      
    //   button.prev, button.next {
    //     display: flex;
    //     align-items: center;
    //     justify-content: center;
    //     font-size: 32px;
    //     color: #FFF;
    //     background-color: #333;
    //     border-radius: 50%;
    //     width: 44px;
    //     height: 44px;
    //   }
    //   button.prev {
    //     position: absolute;
    //     left: 0;
    //     top: 100vh;
    //   }
    //   button.next {
    //     position: absolute;
    //     right: 0;
    //     top: 100vh;
    //   }
    //   img{
    //       height:100vh;
    //   }
    // </style>';
    return $message;
}
?>

