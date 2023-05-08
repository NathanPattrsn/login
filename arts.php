<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles2.css">
    <link src="script.js">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Gossip</title>
</head>
<body>
    <header>
        <div class="header-left">
        <a href="index.php"><img src="images/logo.png"  class="logo" alt="Student Magazine Project"></a>
    </div>
        <div class="header-right">
            <div class="navbar">
                <a href="userprof.php" id="accountlink">Profile<i class='fas fa-user-alt' id="proficon" style='font-size:22px'></a></i>
                <a href="news.php">News</a>
                <a href="features.php">Features</a>
                <div class="dropdown">
                  <button class="dropbtn">More
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="gossip.php">Gossip</a>
                    <a href="arts.php">Arts</a>
                    <a href="#">Sports</a>
                  </div>
                </div>
            </div>
        </div>
    </header>
<main>
<section id="s2">
        <h2 id="s2h2">Gossip</h2>
        <div class="row">
            <div class="column2">
        <article id="a3">
            <h3 id="a3h3">‘Bored’ students slammed for having illegal house party during national lockdown</h3>
            <img src="images/ehustudentsillegalparty.png" alt="Article Image" id="artimg3" style="width: 36.5%">
            <p id="s2p">‘Bored’ students who were caught at an illegal house party have been slammed and 
                hailed an "embarrassment" by online readers.<br><br><br>
            <a href="#" id="rmlink">Read More</a>
        </div>
        </article>
        <div class="column2">
        <article id="a4">
            <h3 id="a4h3">Student dressed as Holocaust victim made vile 'gassed joke'</h3>
            <img src="images/ehustudent2.png" alt="Article Image" id="artimg4" style="width: 30%">
            <p id="s2p2">A student union president sparked outrage by dressing as a Holocaust victim at a party then 
                joking on social media about being 'gassed.'<br><br><br>
            <a href="#" id="rmlink">Read More</a>
        </article>
        </div>
    </section>

    <section id="s1">
        <div class="row">
            <div class="column">
                <article class="a1">
                    <h3 id="s1h3">'Beautiful' teenager who went on a Liverpool night out and never came home</h3>
                    <img src="images/ehustudent3.png" alt="Article Image" id="artimg1" style="width: 30%">
                    <p id="s1p">Halle O'Brien's life support machine had to be turned off by her devastated family.<br><br>
                    <a href="dragboatrace.php" id="rmlink">Read More</a>
            </div>
        </article>
        <div class="column">
                <article id="a2">
                    <h3 id="s1h3-2">Boyfriend stuns woman with gesture on graduation day</h3>
                    <img src="images/ehustudent4.png" alt="Article Image" id="artimg2" style="width: 30%">
                    <p id="s1p2">Aoife couldn't believe it when her boyfriend Brad popped the big question ahead of her ceremony.<br><br>
                    <a href="#" id="rmlink">Read More</a>
        </article>
        </div>
    </section>
    <br><br><br><br><br>
</main>

<footer class="footer">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <p>&copy; 2023 University Student Magazine. All rights reserved.</p>
</footer>
</body>
</html>