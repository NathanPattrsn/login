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
    <title>News</title>
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

                  </div>
                </div>
            </div>
        </div>
    </header>
<main>
<section id="s1">
        <h2 id="s1h2">News</h2>
        <div class="row">
            <div class="column">
                <article class="a1">
                    <h3 id="s1h3">Edge Hill University wins three Educate North Awards</h3>
                    <img src="images/ehuawards23.jpg" alt="Edge Hill Awards" id="artimg1" style="width: 30%">
                    <p id="s1p">Edge Hill University was the most decorated institution at this year’s prestigious Educate North Awards, 
                        claiming three awards and a high commendation.<br><br>
                    <a href="edgehillawards.php" id="rmlink">Read More</a>
            </div>
        </article>
        <div class="column">
                <article id="a2">
                    <h3 id="s1h3-2">Edge Hill celebrates students and businesses at careers awards evening</h3>
                    <img src="images/ehucareersawards.jpg" alt="Edge Hill Careers Awards" id="artimg2" style="width: 30%">
                    <p id="s1p2">Edge Hill University held an awards ceremony recognising the students, academics and businesses who have demonstrated 
                        an exceptional commitment to employability.<br><br>
                    <a href="edgehillcareersawards.php" id="rmlink">Read More</a>
        </article>
        </div>
    </section>

    <section id="s1">
        <div class="row">
            <div class="column">
                <article class="a1">
                    <h3 id="s1h3">Edge Hill hosts a FlourishCafé to encourage climate action in the community</h3>
                    <img src="images/ehucafe.jpg" alt="Edge Hill Cafe" id="artimg1" style="width: 30%">
                    <p id="s1p">Edge Hill has invited Ormskirk residents to attend the FlourishCafé, a space for people to discuss their ideas 
                        for protecting the environment and living sustainably.<br><br>
                    <a href="ehucafe.php" id="rmlink">Read More</a>
            </div>
        </article>
        <div class="column">
                <article id="a2">
                    <h3 id="s1h3-2">Youth justice system leaves children at risk of being unheard</h3>
                    <img src="images/ehusystem.jpg" alt="Edge Hill Youth Justice System" id="artimg2" style="width: 30%">
                    <p id="s1p2">New research has found that children whose participation in their own rehabilitation is 
                        supposed to be at the heart of youth justice often feel unheard.<br><br>
                    <a href="ehuyouthjusticesystem.php" id="rmlink">Read More</a>
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