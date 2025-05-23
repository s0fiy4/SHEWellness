<?php
session_start();

// Start output buffering
ob_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Assuming the user ID is stored in session after login
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Eat Healthy Session</title>
    <link rel="stylesheet" href="styles.css">
    <style>
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
        .header-container h1, .details-container h2 {
            font-family: 'Verdana', sans-serif;
        }

        .details-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #d7e3fc;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .details-container ol {
            margin-bottom: 10px;
            padding-left: 20px;
        }

        .details-container li {
            display: list-item;
            margin-right: 20px;
            padding: 1% 0;
            font-family: 'Georgia', serif;
        }

        .details-container p {
            margin-bottom: 10px;
            font-family: 'Georgia', serif;
        }

        .register-container, .booking-container {
            text-align: center;
            padding: 20px 0;
        }

        .register-container p, .booking-container p {
            margin-bottom: 0;
        }

        .register-container a, .booking-container a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        .register-container a:hover, .booking-container a:hover {
            text-decoration: underline;
        }

        .form-group {
            margin: 20px 0;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 80%; /* Adjusted width */
            max-width: 500px; /* Optional: Set a max-width */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .form-group select {
            width: 80%; /* Adjusted width */
            max-width: 500px; /* Optional: Set a max-width */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .btn-book {
            width: 80%; /* Adjusted width */
            max-width: 500px; /* Optional: Set a max-width */
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            margin: 0 auto 10px auto; /* Center the button horizontally and add bottom margin */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-book:hover {
            background-color: #45a049;
        }

        .nav-cart {
            background-color:#2d5128 ;
            color: white;
            padding: 10px;
            text-align: right;
            position: right;
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
    <script>
        function calculatePrice() {
            var duration = document.getElementById('duration').value;
            var pricePerSession = 30; 
            var totalPrice = duration * pricePerSession;
            document.getElementById('price').value = 'RM ' + totalPrice;
        }
    </script>
</head>

<body>
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


    <main>
        <div class="w3-container header-container">
            <h1>Book Your Eat Healthy Session</h1>
        </div>

        <div class="w3-container details-container">
            <div class="text">
                <h2>Eat Healthy Sessions</h2>
                <ol>
                    <li><b>Nutritional Guidance:</b> Receive expert advice on balanced nutrition tailored to your health goals.</li>
                    <li><b>Delicious Recipes:</b> Explore and prepare nutritious meals that promote well-being and vitality.</li>
                    <li><b>Personalized Plans:</b> Create sustainable habits with personalized meal plans and dietary tips.</li>
                    <li><b>Interactive Workshops:</b> Engage in interactive sessions that foster a deeper understanding of healthy eating.</li>
                    <li><b>Supportive Community:</b> Join a supportive community of individuals committed to embracing a healthy lifestyle.</li>
                </ol>
                <p>One session provided 2 session, where first session is your start date, and second session is your end date</p>
                <p><b>Rm30</b> per session</p>
                <p>Join our Eat Healthy sessions and discover the transformative power of nourishing your body with wholesome foods.</p>
            </div>
        </div>

        <div class="w3-container booking-container">
            <form method="post" action="">
                <input type="hidden" id="username" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
                <div class="form-group">
                    <label for="duration">Number of Sessions:</label>
                    <input type="number" id="duration" name="duration" min="1" placeholder="e.g., 4" oninput="calculatePrice()" required>
                </div>
                <div class="form-group">
                    <label for="start-date">Start Date:</label>
                    <input type="date" id="start-date" name="start-date" required>
                </div>
                <div class="form-group">
                    <label for="end-date">End Date:</label>
                    <input type="date" id="end-date" name="end-date" required>
                </div>
                <div class="form-group">
                    <label for="price">Total Price:</label>
                    <input type="text" id="price" name="price" readonly required>
                </div>
                <button type="submit" class="btn-book">Book</button>
            </form>
        </div>
    </main>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form data
        $username = $_POST['username'];
        $duration = $_POST['duration'];
        $start_date = $_POST['start-date'];
        $end_date = $_POST['end-date'];
        $price = str_replace('RM ', '', $_POST['price']); // Remove the 'RM ' prefix

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

        // Check if username exists in members table
        $check_username_sql = "SELECT * FROM members WHERE username = ?";
        $check_username_stmt = $conn->prepare($check_username_sql);
        $check_username_stmt->bind_param("s", $username);
        $check_username_stmt->execute();
        $result = $check_username_stmt->get_result();

        if ($result->num_rows > 0) {
            // Username exists, proceed with booking insertion
            $insert_booking_sql = "INSERT INTO bookings (username, duration, start_date, end_date, price) VALUES (?, ?, ?, ?, ?)";
            $insert_booking_stmt = $conn->prepare($insert_booking_sql);
            $insert_booking_stmt->bind_param("sissd", $username, $duration, $start_date, $end_date, $price);

            if ($insert_booking_stmt->execute()) {
                // Redirect to invoice page after successful booking
                header("Location: invoice.php");
                exit();
            } else {
                echo "<div class='w3-container booking-container'>";
                echo "<p>Error: " . $insert_booking_stmt->error . "</p>";
                echo "</div>";
            }

            $insert_booking_stmt->close();
        } else {
            // Username does not exist in members table
            echo "<div class='w3-container booking-container'>";
            echo "<p>Error: Username does not exist. Please check your username and try again.</p>";
            echo "</div>";
        }

        $check_username_stmt->close();
        $conn->close();
    }

    // Flush the output buffer
    ob_end_flush();
    ?>

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
