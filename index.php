<?php require "login/loginheader.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tiskijukka</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>

<!-- ICONS -->
  <link rel="apple-touch-icon" sizes="57x57" href="../ico/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../ico/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../ico/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../ico/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../ico/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../ico/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../ico/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../ico/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../ico/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../ico/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../ico/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../ico/favicon-16x16.png">
  <link rel="manifest" href="../ico/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../ico/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

<!-- SCRIPTS -->
  <script>
    fadeAlert(2000);
    getLatestTime();
    getUsernames();
  </script>

<!-- SUCCESSFUL LOGIN -->
  <?php
    if ($_SESSION["fadeAlertCount"] === 0): ?>
      <div class="form-signin">
        <div id="successLogin" class="alert alert-success">You have been <strong>successfully logged in as <?php echo $_SESSION['username'] ?></strong>.</div>
      </div>
      <?php $_SESSION["fadeAlertCount"] = 1; ?>
  <?php else: ?>
  <?php endif; ?>
</head>

<!-- NAVBAR -->
<nav class="navbar navbar-inverse" id="navbar">
  <div class="container-fluid">
    <a href="login/logout.php" id="logoutButton" class="btn btn-default btn-lg btn-square " >Logout</a>
    <div class="navbar-header">
      <a id="navbarTitle" class="navbar-brand"></a>
    </div>
  </div>
</nav>

<!-- BODY -->
<body>
  <div class="container-fluid text-center">

    <div class="row content">

      <!-- Beginning of the left column -->
      <div class="col-sm-6 sidenav" id="leftCol">

        <!-- Profile image -->
        <?php $imgpath = "img/" . $_SESSION['username'] . ".jpg" ?>
        <img src="<?php echo $imgpath ?>" class="img-circle" alt="Cinque Terre" width="180" height="180">
        <br />

        <!-- BUTTON -->
        <input method="POST" type="submit" value="Tiskit tehty!" class="btn btn-success" href="#" id="dishButton" onmousedown="sendToDb()" ></input>
        <br />

        <!-- SCORES -->
        <div id="scoreCount">
          TJ-PISTEET: <br/>
        </div>
      </div> <!-- End of the left column -->

      <!-- Right column - gets the times from the database -->
      <div class="col-sm-6 sidenav" id="rightCol"><?php include ('php/getFromDb.php'); ?></div>

  <!-- FOOTER -->
  <footer class="container-fluid text-center" >
    <div id="footerText">Copyright @ 2017 Anttu Suhonen | Links to my <a target="_blank"  href="https://github.com/anttus/" >GitHub</a> and
      <a target="_blank"  href="https://www.linkedin.com/in/anttu-suhonen/" >LinkedIn</a></div>
  </footer>

</body>
</html>
