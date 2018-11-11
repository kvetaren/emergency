<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
  <nav>
    <div class="nav-logged">
      <ul>
        <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h3>
      </ul>
        <button><a href="logout.php">Logout</a></button>
    </div
  </nav>
  <header>

  </header>
</body>
</html>
