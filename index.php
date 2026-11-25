<?php session_start(); ?>

<!doctype html>
<html>
  <head>
    <title>Home</title>
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
      <h1>Firrhill Comp Society</h1>
      <h3>Advanced Programming</h3>
      <p>
        You'll develop real, complex software using Python - going far beyond Higher level with object-oriented design,
        linked lists, and advanced algorithms.
      </p>
      <h3>Web & Databases</h3>
      <p>
        Build fully working web applications with HTML, CSS, PHP and SQL. This is new territory - databases aren't
        covered at N5 or Higher here, so we hit the ground running.
      </p>
      <h3>University-Ready Skills</h3>
      <p>
        The course develops the kind of analytical, independent thinking expected at degree level. You'll design and
        build your own software project from scratch.
      </p>
    </div>
    
    <footer>
      <hr />
      <p>here are some useful links:</p>
      <a href="achieve.hashtag-learning.co.uk">Achieve</a>
      <a href="https://ah.scotpapers.com/">Past Papers</a>
      <a href="https://www.firrhillcomp.com/ahrevision/">Firrhill Comp</a>
    </footer>
  </body>
</html>
