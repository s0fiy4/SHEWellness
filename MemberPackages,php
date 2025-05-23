<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHE Wellness Club</title>
    <link rel="stylesheet" href="styles.css">
    
<style>
   
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .top-bar {
        background-color: black;
        color: white;
        padding: 10px;
        text-align: center;
        position: relative;
    }
    .top-bar .close-btn {
        position: absolute;
        right: 10px;
        top: 10px;
        cursor: pointer;
    }
    .nav-cart {
        background-color:#2d5128 ;
        color: white;
        padding: 10px;
        text-align: right;
        position: right;
    }
    .nav-cart a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }
    .header-content {
        background-color: #2d5128 ;
        text-align: center;
        padding: 20px 0;
    }

    .contentHome {
        background-color: white;
        padding: 10px 0;
        text-align: center;
    }

    .nav-bar {
        background-color: #2d5128;
        padding: 10px 0;
        text-align: center;
    }
    .nav-bar a {
        margin: 0 15px;
        text-decoration: none;
        color: white;
        font-weight: bold;
    }
    .container {
        background-color: #ffffff;
        padding: 40px;
        border: 1px solid #e0e0e0;
        text-align: center;
        margin: 20px auto;
        width: 80%;
    }
    .container h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }
    .container p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .content-section {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin: 40px 0;
            flex-wrap: wrap;
        }

        .content-item {
            text-align: center;
            max-width: 300px;
            margin: 20px;
        }

        .content-item img {
            border-radius: 8px;
            width: 100%;
            height: 100%;
        }

        .content-item h4,
        .content-item p,
        .content-item a {
            margin: 10px 0;
            color: #2d5128;
            font-family: Verdana, sans-serif;
        }

        .content-item a {
            text-decoration: none;
            font-weight: bold;
        }

        .content-item a:hover {
            text-decoration: underline;
        }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    
    .footer-container {
            background-color: #2d5128;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

        .footer-content {
            display: flex;
            align-items: center;
        }
        .footer-logo {
            margin-right: 20px;
        }
        .footer-logo img {
            width: 200px;
            height: auto;
        }
        .footer-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-menu li {
            display:list-item;
            margin-right: 20px;
            padding: 5% 0; 
        }

        .footer-menu a {
            text-decoration: none;
            color: rgb(245, 244, 244);
            font-weight:lighter;
        }

        .footer-details {
            text-align: left;
        }
        .footer-details p {
            margin: 5px 0;
        }
        .footer-details a {
            color: white;
            text-decoration: none;
        }
        .footer-details a:hover {
            text-decoration: underline;
        }
</style>
</head>
<body>
    <div class="top-bar">
        <p>Pilates over Lattes! 50% off your first private pilates session / group class with us. Contact us to find out more!</p>
        <span class="close-btn">&times;</span>
    </div>

    <div class="nav-cart">
        <a href="cart.php" >🛒 Cart</a> 
    </div>

    <header>
        <div class="header-content">
            <img src="SHE HEADER.png" alt="Header Image" class="header-image">
        </div>
    </header>

 
    <nav class="nav-bar">
        <div class="nav-content">
            <a href="memberHomePage.php">HOME</a>
            <a href="memberAbout.html">ABOUT US</a>
            <a href="memberPackages.php">WHAT WE OFFER</a>
            <a href="memberFaqs.html">FAQS</a>
            <a href="memberContact.html" >CONTACT</a>
            <a href="memberDonate.html">DONATE</a>
            <a href="memberReviews.html">REVIEWS</a>
            <a href="memberEducation.html">EDUCATION</a>
            <a href="logout.php">LOGOUT</a>
        </div>
    </nav>

<div class="contentHome">
 
    <img src="TREES.jpg" alt='Trees picture' style="margin-top:40px;margin-left:85px;width:250px;height:340px;">
    <img src="PILATES.jpg" alt='Pilates picture' style="margin-top:80px;margin-left:105px;width:350px;height:440px;">
    <img src="HEALTHY FOOD.jpg" alt='Healthy food' style="margin-top:40px;margin-left:125px;width:250px;height:340px;">
    <h1 style="text-align:center;">  About Us <br> <br>  <p style="text-align:center;background-color:#D7E3FC;font-family:Mahalika;font-size:20px;margin-top:3px;">SHE Wellness Club is Malaysia's first members-only health and wellness space dedicated <br>to supporting holistic well-being for women.Women have specific and unique physiological and psychological needs in a world that <br>still often follows a male-centric focus for fitness, nutrition, and mindsets.<br><br> Our club integrates Pilates, nutrition, and mindfulness as three key pillars to foster <br> physical, mental, and emotional wellness for healthy, empowered, resilient women at every age and <br>phase of life.<br><br><br><a href="memberAbout.html" style="color:black;margin-left:10px;background-color:#D7E3FC;">Learn more</a> <br> </p> </h1>
  
    <img src="VISION (3).png" alt='Vision Image' style="height:370px;width:1237px;">

    <div class="container">
        <h1 class="section-title">HOW WE CAN HELP</h1>
        <div class="content-section">
            <div class="content-item">
                <img src="pilates5.png" alt="Pilates">
                <h4>Pilates</h4>
                <p>Be flexible, stronger and graceful in the longer run.</p>
                <a href="bookPilates.php">Learn More</a>
            </div>
            <div class="content-item">
                <img src="mental3.png" alt="Mental Health Consultation">
                <h4>Mental Health Consultation</h4>
                <p>Our consultation can be your getaway.</p>
                <a href="bookMentalHealth.php">Learn More</a>
            </div>
        </div>
    </div>

    <img src="Quotes (1).png"alt='Quote' style="margin-top:50px;width:1263px;height:300px;">
    <h2 style="text-align:center;margin-top:50px;font-family:sans-serif;"> Good Food, Good mood</h2>
    <img src="healthy_food1.jpg" alt='Healthy food 1' style="margin-left:100px;margin-top:10px;height:150px;width:200;">
    <img src="healthy_food2.jpg" alt='Healthy food 2' style="margin-left:100px;margin-top:10px;height:150px;width:200;">
    <img src="healthyfood3.jpeg" alt='Healthy food 3' style="margin-left:100px;margin-top:10px;height:150px;width:200;">
    <img src="healthyfood4.jpg" alt='Healthy food 3' style="margin-left:100px;margin-top:10px;height:150px;width:200;">
   
    <a href="">
    <img src="Join us.png" alt='Join us' style="margin-top:80px;height:650px;width:630px;">
    </a>
    <img src="client_meet.jpg" alt="join our club" style="margin-top:80px;height:650px;width:628px;">

</div>
 
<footer>
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-menu">
                    <ul>
                        <li><strong><u>Menu</u></strong></li>
                        <li><a href="memberHomePage.php">Home</a></li>
                        <li><a href="memberAbout.html">About Us</a></li>
                        <li><a href="memberPackages.php">Packages</a></li>
                        <li><a href="memberContact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-logo">
                    <img src="footerLogo.png" alt="Logo">
                </div>
                <div class="footer-details">
                    <p><strong><u>Get In Touch</u></strong></p>
                    <p>Level 2, The Five @KPD</p>
                    <p>JALAN DUNGUN</p>
                    <p>DAMANSARA HEIGHTS</p>
                    <p><a href="mailto:INFO@shewellnessclub">INFO@shewellnessclub</a></p>
                    <p><a href="tel:+0123456789">+0123456789</a></p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
