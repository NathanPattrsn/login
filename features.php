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
    <title>Features</title>
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
<section id="s2">
        <h2 id="s2h2">Features</h2>
        <div class="row">
            <div class="column2">
        <article id="a3">
            <h3 id="a3h3">England's teachers' strike causes more disruption</h3>
            <img src="images/teacherstrikeprotest.png" alt="Teacher Strike" id="artimg3" style="width: 30%">
            <p id="s2p">Teachers in schools and sixth form colleges have joined picket lines in 
                England for the fourth day of national strike action.<br><br><br>
            <a href="teacherstrike.php" id="rmlink">Read More</a>
        </div>
        </article>
        <div class="column2">
        <article id="a4">
            <h3 id="a4h3">Raheem Sterling launches university scholarship fund</h3>
            <img src="images/rahsterling.png" alt="Raheem Sterling" id="artimg4" style="width: 35.7%">
            <p id="s2p2">Raheem Sterling has launched a scholarship fund aimed at closing the gap in the number of 
                black British students who go to university.<br><br>
            <a href="sterlingunischolars.php" id="rmlink">Read More</a>
        </article>
        </div>
    </section>

    <section id="s1">
        <div class="row">
            <div class="column">
                <article class="a1">
                    <h3 id="s1h3">Martin Lewis' Money Saving Expert warns university costs to double for many students</h3>
                    <img src="images/martinlewis.jpg" alt="Martin Lewis" id="artimg1" style="width: 30%">
                    <p id="s1p">The cost of university will double for many students under huge changes to how 
                        graduates pay back their student loans.<br><br>
                    <a href="martinlewisunicosts.php" id="rmlink">Read More</a>
            </div>
        </article>
        <div class="column">
                <article id="a2">
                    <h3 id="s1h3-2">Dad who lost both parents at 6 turns life around after breakdown</h3>
                    <img src="images/ehustudent.png" alt="Former Student" id="artimg2" style="width: 30%">
                    <p id="s1p2">New research has found that children whose participation in their own rehabilitation is 
                        supposed to be at the heart of youth justice often feel unheard.<br><br>
                    <a href="dadturnlifearound.php" id="rmlink">Read More</a>
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