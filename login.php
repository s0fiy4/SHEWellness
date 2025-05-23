<?php
session_start();
require 'dbconfig.php'; // Database configuration file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM members WHERE username = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                // Verify the password
                if (password_verify($password, $user['password'])) {
                    $_SESSION['username'] = $username;
                    header("Location: memberhomepage.php");
                    exit;
                } else {
                    $error = "Invalid username or password.";
                }
            } else {
                $error = "Invalid username or password.";
            }
            $stmt->close();
        }
    } else {
        $error = "Please fill in both fields.";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SHE Wellness Club</title>
  <style>
    /* Global Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Georgia', serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background: white;
}

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
    width:100%;
    height:100%;
    object-fit: cover; 
}

.nav-bar {
    background-color: #2D5128; 
    padding: 10px 0;
}

.nav-content {
    display: flex;
    justify-content: center;
    max-width: 1237px;
    margin: 0 auto;
}

.nav-content a {
    color: white;
    margin: 0 10px;
    text-decoration: none;
    font-weight: bold;
}


.header-image-container {
    display: flex;
    justify-content: center;
    background-color: #a25e3c; 
    height:250px;
    width:1279px;
}
  
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    line-height: 1.6;
  }
  
  .container {
    max-width: 600px;
    margin: 20px auto;
    background: #d7e3fc; /* Background color for the container */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  h1, h2, h3 {
    color: #333;
  }
  
  h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
  }
  
  h2 {
    font-size: 1.8em;
    margin-bottom: 20px;
  }
  
  h3 {
    font-size: 1.2em;
    margin-bottom: 10px;
  }
  
  form {
    margin-top: 20px;
  }
  
  .input-box {
    margin-bottom: 15px;
  }
  
  .input-box label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  .input-box input, .input-box select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1em;
  }
  
  .input-box input[type="checkbox"] {
    width: auto;
    margin-right: 10px;
  }
  
  .column {
    display: flex;
    gap: 10px;
  }
  
  
  button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1em;
  }
  
  button[type="submit"]:hover {
    background-color: #45a049;
  }
  
  p {
    margin-top: 10px;
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
<header>
        <div class="header-content">
            <img src="SHE HEADER.png" alt="Header Image" class="header-image">
        </div>
    </header>
    <nav class="nav-bar">
        <div class="nav-content">
            <a href="guestHomePage.html">HOME</a>
            <a href="membership.html">BECOME A MEMBER</a>
            <a href="guestAbout.html">ABOUT US</a>
            <a href="guestPackages.php">WHAT WE OFFER</a>
            <a href="guestFaqs.html">FAQS</a>
            <a href="guestContact.html" class="active">CONTACT</a>
            <a href="guestDonate.html">DONATE</a>
            <a href="guestReviews.html">REVIEWS</a>
            <a href="guestEducation.html">EDUCATION</a>
            <a href="login.php">LOGIN</a>
        </div>
    </nav>
    </header>

  <section class="container">
    <h1 style="text-align: center;">SHE Wellness Club</h1>
    <h2 style="text-align: center;">Member Login</h2>
    <form id="loginForm" class="form" action="login.php" method="POST">
      <div class="input-box">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required>
      </div>
      <div class="input-box">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>
      </div>
      <button type="submit">Login</button>
      <p style="text-align: center;"><a href="register.html">Register</a></p>
      <?php if (isset($error)) { echo '<p style="color:red;text-align:center;">'.$error.'</p>'; } ?>
    </form>
  </section>
  <footer>
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-menu">
                <ul>
                        <li><strong><u>Menu</u></strong></li>
                        <li><a href="guestHomePage.html">Home</a></li>
                        <li><a href="guestAbout.html">About Us</a></li>
                        <li><a href="guestPackages.php">Packages</a></li>
                        <li><a href="guestContact.html">Contact Us</a></li>
                    </ul>
                </div>
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
