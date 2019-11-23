<!DOCTYPE html>
<html>

<head>
    <title>Contact - Conselling with Cait</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel=stylesheet type=text/css href="/counsellingwithcait/Styles/navbar.css">
    <link rel=stylesheet type=text/css href="/counsellingwithcait/Styles/contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>
    <div class="customNav">
        <div class="navLink navTitle">
            <a href="/counsellingwithcait/index.html">COUNSELLING WITH CAIT</a>
        </div>
        <div class="navLink navLinkToggle">
            <i class="fas fa-bars"></i>
        </div>
        <nav class="navItem navItemRight">
            <div class="navLink">
                <a href="/counsellingwithcait/about.html">ABOUT</a>
            </div>
            <div class="navLink">
                <a href="/counsellingwithcait/services/index.html">SERVICES</a> </div>
            <div class="navLink">
                <a href="/counsellingwithcait/faq.html">FAQ</a>
            </div>
            <div class="navLink">
                <a href="/counsellingwithcait/contact/index.php">CONTACT</a>
            </div>
        </nav>
    </div>

    <script src="/counsellingwithcait/Scripts/myscripts.js"></script>

    <div class="contactTitle">
        <h1>Contact</h1>
    </div>
    <p class="contactIntro">
        Cait works out of 2 offices, one in Guelph and one in Cambridge. The addresses are displayed below. To book an appointment you can put your name and email address with some information about you in the contact form below, or you can call 647-338-4093.
    </p>
    <div class="mapContainerLeft">
        <h2 class="locationTitle">Guelph</h2>
        <iframe defer class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12286.850802548894!2d-80.2888147541562!3d43.54924517363969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b9074cc451851%3A0x93e0c60dc5bad522!2s212%20Speedvale%20Ave%20W%2C%20Guelph%2C%20ON%20N1H%201C4!5e0!3m2!1sen!2sca!4v1568168973652!5m2!1sen!2sca" width="100%" height="450" frameborder="0" allowfullscreen=""></iframe>
    </div>
    <div class="mapContainerRight">
        <h2 class="locationTitle">Cambridge</h2>
        <iframe defer class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12548.949509907125!2d-80.31378269177512!3d43.360973682140894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882c77c9b4f23827%3A0x652e53d35fb1d8bf!2s30%20Colborne%20St%2C%20Cambridge%2C%20ON%20N1R%201R2!5e0!3m2!1sen!2sca!4v1568167998714!5m2!1sen!2sca" width="100%" height="450" frameborder="0" allowfullscreen=""></iframe>
    </div>

    <form class="contactForm" action='emailScript.php' method="post">
        <div class="labelWrapper first">
            <p class="contactLabel">Full Name</p>
        </div>
        <input type="text" name="name" id="name"><br>
        <div class="labelWrapper">
            <p class="contactLabel">Your Email Address</p>
        </div>
        <input type="text" name="email" id="email"><br>
        <div class="labelWrapper">
            <p class="contactLabel">Message</p>
        </div>
        <textarea name="message" rows="10" cols="30"></textarea>

        <input class="submitButton" type='submit' name='data' value="Send Email">
    </form>
    <?php
        ini_set( 'display_errors', 1 );

        if (isset($_POST['data'])) {
        include 'emailScript.php';
    }
    ?>
</body>

</html>
