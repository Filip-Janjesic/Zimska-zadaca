<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>

    <div class="grid-container">
    <link rel="stylesheet" type="text/css" href="app.css">
    <?php include_once __DIR__ . '/template/head.php'; ?>
    <?php include_once __DIR__ .'/template/titlebar.php'; ?>
    </div>

  </head>
  <body>
    <div class="grid-container" style= "padding: 2em;">

      <div class="centered1"style= "font-size: 2em;">
        Login successful <br>
        Welcome <?php echo $_GET["name"]; ?><br>
        Your email address is: <?php echo $_GET["email"]; ?>
      </div>                    
    <img src="../pictures/Pozadina2.jpg" alt="Pozadina" width="1000px" height="1000px">         
    
    <div class="grid-x grid-margin-x">
      <div class= "backButton">
        <a href="index.php">Back</a>
      </div> 
    </div>

    <hr>
    <?php include_once __DIR__ .'/template/footer.php'; ?>
    </div>
     <?php include_once __DIR__ .'/template/skripte.php'; ?>
  </body>
</html>