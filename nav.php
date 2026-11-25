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