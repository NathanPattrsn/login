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
    <title>Edge Hill Uni Students Coaching Qualification</title>
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

    <section class="dragboatrace">
        <img src="images/ehusports.jpg" style="width: 60%;" alt="Sports Team">
        <h2 id="h2s">Sport students enhance their employability with multi-skills coaching qualification</h2>
        <p id="ptext1">Edge Hill Sport students have been provided with the opportunity to complement their degree studies with a multi-skills level 2 coaching qualification. 
            This qualification is designed to prepare you for future employment as independent coaches of multi-skills and physical activity.</p><br>
            <p id="ptext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
            <p id="ptext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
            <p id="ptext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
            <p id="ptext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
            <p id="ptext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
    </section>




<br><br><br><br><br><br>
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