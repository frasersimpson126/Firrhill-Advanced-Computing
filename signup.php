<?php
session_start();
require("connect.php");


if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if (empty($email)) {
        $result =  "<p class='error'>Please enter your email address.</p>";
    } 
    else {
        
        $sql = "SELECT email FROM Subscribers WHERE email = '$email'";
        $stmt = mysqli_query($conn, $sql);

        if (mysqli_num_rows($stmt) > 0) {
            $result = "<p class='error'>You are already signed up.</p>";
        } else {

            $sql = "INSERT INTO Subscribers (email) VALUES ('$email')";
            mysqli_query($conn, $sql);

            
            $result =  "<p>Thank you for signing up for our newsletter!</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono" rel="stylesheet" />
    <link rel="icon" href="icon.png" />
</head>

<body>
<!-- navbar -->
    <nav>
      <ul>
        <li><a href="./index.php">home</a></li>
        <li><a href="./signup.php">Sign up</a></li>
        <li><a href="./members.php">members</a></li>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <li id="right"><a href="./logout.php">Log out</a></li>
        <?php else: ?>
        <li id="right"><a href="./login.php">Log in</a></li>
        <?php endif; ?>
      </ul>
    </nav>


    <div class="content-wrapper">
        <h1>AH Comp - Sign Up</h1>

        <h2 class="center">Sign up to join our newsletter</h2>
        <form action="signup.php" method="post" class="center">
            <label>Email:</label><br>
            <input type="text" name="email" placeholder = "someone@something.com"><br><br>

            <button type="submit">Submit</button>
        </form>
        <?php if (isset($result)) {echo $result;} ?>
        
    </div>

        <footer>
      <hr />
      <p>here are some useful links:</p>
      <a href="https://achieve.hashtag-learning.co.uk">Achieve</a>
      <a href="https://ah.scotpapers.com/">Past Papers</a>
      <a href="https://www.firrhillcomp.com/ahrevision/index">Firrhill Comp</a>
    </footer>
</body>

</html>

