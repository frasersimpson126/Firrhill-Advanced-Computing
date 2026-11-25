<?php
session_start();

require("connect.php");
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
} 
?>

<!DOCTYPE html>
<html>

<head>
    <title>All Pupils</title>
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
    <h1>AH Comp - members</h1>
    <h2>Topics</h2>
    <div class="main-section">
        <div class="main-text">
            <h3>WDD:</h3>
            <p>Build dynamic websites using HTML forms, CSS media queries, and PHP for form processing, sessions and MySQL database operations (SELECT, INSERT, UPDATE, DELETE). Design with wireframes and prototypes, then test and evaluate usability.</p>
            <h3>SDD:</h3>
            <p>Design software using linked lists, OOP, UML diagrams and data structures, applying standard algorithms like binary search and bubble sort. Cover the full process - analysis, design, testing and evaluation of fitness for purpose.</p>
        </div>
        <div class="main-photo">
            <img src="./comp1.jpg">
        </div>
    </div>
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