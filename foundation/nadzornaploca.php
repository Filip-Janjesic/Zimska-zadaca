<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>

    <div class="grid-container">
    <link rel="stylesheet" type="text/css" href="app.css">
    <?php include_once 'template\head.php'; ?>
    <?php include_once 'template\titlebar.php'; ?>
    </div>

  </head>

  
  <body>
  Login successful <?php echo $_GET["name"]; ?><br>


    <div class= "backButton">
        <a href="index.php">Back</a>
    </div>

    <div class="grid-container">
      <hr>
        <?php include_once 'template\footer.php'; ?>
    </div>
        <?php include_once 'template\skripte.php'; ?>
  </body>
</html>