<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
    <header>
      <nav>
        <div class="main-wrapper">
          <ul>
            <li><a href = "index.php">Alerte</a></li>
          </ul>
          <div class="nav-login">
            <form>
                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <input type="submit" class="btn btn-primary" value="Login">
            </form>

          </div>
        </div>
      </nav>
    </header>

  </body>
</html>
