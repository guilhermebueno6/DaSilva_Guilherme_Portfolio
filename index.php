<?php
require_once 'email.php';


if (isset($_POST['submit'])){
    $message = trim($_POST['message']);
    $email = trim($_POST['email']);
    $name =trim($_POST['name']);

    sendEmail($name, $email, $message);
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/772b1c5ce3.js" crossorigin="anonymous"></script>
    <title>Guilherme Bueno's Portfolio</title>
</head>
<body>
    <?php require 'templates/header.php';?>
    <main>
        <section id="welcomeSection">
        <h1 id="welcomeTxt">Hi, I'm Gui, and I'm a front-end Dev.</h1>
        <img src="images/desktopBG.jpg" alt="Background" id="welcomeHero" class="zoom">
    </section>
    <section id="aboutMe">
        <h1 id="aboutTitle">About Me</h1>
        <div id="profileCircle">
        <img id="profilePic" src="images/ProfilePic.png" alt="Profile Picture Guilherme Bueno">
        </div>
        <p id="aboutBody">My name is Guilherme Sanches Bueno Da Silva (Yes, very long and difficult to say it, I know), but you may refer to me as Gui. I'm 20 years old, and currently a Web developing student and aspiring front-end dev. <br><br>
        I love building web applications from scratch and have a lot of fun using JavaScript. To me, coding in JavaScript is very fun because of this language's versatility.<br><br>
        One of my Hobbies is reading random questions and answers on StackOverflow, or even Web Dev blogs and articles. I'm very passionate about learning and staying current on web development.
        </p>
    </section>
    <section id="resume">
        <h1>My Skills</h1>
        <div id="resumewrapper">
            <div class="resumeBox">
                <h2 class="subtitle"> <i class="fa fa-code" aria-hidden="true"></i> Back-End Skills</h2>
                <ul>
                    <li>Python</li>
                    <li>C++</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>SQL</li>
                </ul>
                
            </div>
            <div class="resumeBox">
                <h2 class="subtitle"><i class="fa fa-sitemap"></i> Front End Building Tools</h2>
                <ul>
                    <li>Node.js</li>
                    <li>Vue.js</li>
                    <li>Sass</li>
                    <li>HTML</li>
                    <li>CSS</li>                 
                </ul>
            </div>
    </section>

    <section id="contactForm">
        <h1>Contact Me!</h1>
        <div class="formGroup">
            <form action="index.php" method="post">
            <label><i class="fa fa-user" aria-hidden="true"></i> Name</label><br>
            <input type="text" name="name" class="" placeholder="Enter Name" id="nameInput">
        </div>
        <div class="formGroup"> 
			<label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label> 
			<input type="email" name="email" class="form-control" placeholder="Enter Email" id="emailInput"> 
		</div>
        <div class="formGroup"> 
			<label><i class="fa fa-comment" aria-hidden="true"></i> Message</label> 
			<textarea rows="3" name="message" class="form-control" placeholder="Type Your Message" id="messageInput"></textarea> 
		</div>
        <div class="formGroup">
            <button name="submit" class="button">Send</button>
            </form>
		</div></div>
    </section>
    <?php require 'templates/footer.php';?>
    </main>
    

    <script src="js/main.js"></script>
</body>
</html>