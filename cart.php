<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Assuming the user ID is stored in session after login
$username = $_SESSION['username'];

// Database connection parameters
$servername = "localhost";
$db_username = "root";
$password = "";
$dbname = "wellness";

// Create connection
$conn = new mysqli($servername, $db_username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all booking details for the logged-in user, including class names
$sql = "SELECT b.*, c.class_name 
        FROM bookings b
        JOIN classes c ON b.class_id = c.class_id
        WHERE b.username = ?
        ORDER BY b.booking_id DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

$bookings = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
} else {
    echo "<p>No bookings found for user.</p>";
    exit();
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="styles.css">
    <style>
       header {
        display: flex;
        justify-content: center;
        background-color: #2D5128; 
    }

    .header-content {
        width: 1237px;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden; 
    }

    .header-image {
        width: 100%;
        height: 100%;
        object-fit: cover; 
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
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }
        h1 {
            font-family: 'Verdana', sans-serif;
            text-align: center;
            color: #333;
            background-color: white;
            margin-bottom: 20px;
        }
        .booking {
            border-bottom: 1px solid #ccc;
            padding: 20px 0;
            margin-bottom: 20px;
        }
        .booking-details {
            margin-left: 20px;
        }
        .booking-details p {
            margin: 5px 0;
            font-size: 18px;
            color: #555;
        }
        .highlight {
            font-weight: bold;
            color: #000;
        }
        .invoice-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }
        .invoice-footer a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }
        .invoice-footer a:hover {
            text-decoration: underline;
        }
         /* footer */
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
<header>
        <div class="header-content">
            <img src="SHE HEADER.png" alt="Header Image" class="header-image">
        </div>
    </header>

 
    <nav class="nav-bar">
        <div class="nav-content">
            <a href="memberhomepage.php">HOME</a>
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


    <div class="container">
        <h1>My Bookings</h1>
        <?php if (!empty($bookings)): ?>
            <?php foreach ($bookings as $booking): ?>
                <div class="booking">
                    <div class="booking-details">
                        <p>Username: <span class="highlight"><?php echo htmlspecialchars($username); ?></span></p>
                        <p>Class Name: <span class="highlight"><?php echo htmlspecialchars($booking['class_name']); ?></span></p>
                        <p>Duration: <span class="highlight"><?php echo htmlspecialchars($booking['duration']); ?> months</span></p>
                        <p>Start Date: <span class="highlight"><?php echo htmlspecialchars($booking['start_date']); ?></span></p>
                        <p>End Date: <span class="highlight"><?php echo htmlspecialchars($booking['end_date']); ?></span></p>
                        <p>Total Price: <span class="highlight">RM <?php echo htmlspecialchars(number_format($booking['price'], 2)); ?></span></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No bookings found for user.</p>
        <?php endif; ?>
        <div class="invoice-footer">
            <p>Thank you for booking with us!</p>
            <p><a href="memberhomepage.php">Return to Home Page</a></p>
        </div>
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
