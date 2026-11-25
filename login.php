<?php
session_start();
require('connect.php');

if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users
            WHERE username = '$username'
            AND Password = '$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: members.php');
        exit;
    } else {
        $error = 'Incorrect username or password.';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono" rel="stylesheet" />
    <link rel="icon" href="icon.png" />
</head>

<body>
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
    <h1>AH Comp - Login</h1>



    <form action="login.php" method="post" class="center">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Log In</button>
    </form>
    
    <?php if (isset($error)) { ?>
        <p class='error'><?= $error ?></p>
    <?php } ?>
</div>
        <footer>
      <hr />
      <p>here are some useful links:</p>
      <a href="https://achieve.hashtag-learning.co.uk">Achieve</a>
      <a href="https://ah.scotpapers.com/">Past Papers</a>
      <a href="https://www.firrhillcomp.com/ahrevision/">Firrhill Comp</a>
    </footer>
</body>

</html>