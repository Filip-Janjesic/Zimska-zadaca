<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/app.css">
    <script src='js/bootstrap.min.js'></script>
    <?php include_once __DIR__ . '/template/head.php'; ?>
    <?php include_once __DIR__ .'/template/navbar.php'; ?>
</head>
<body>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">

      <div style= "font-size: 2em;">
        Login successful <br>
        Welcome <?php echo $_GET["name"]; ?><br>
        Your email address is: <?php echo $_GET["email"]; ?>
      </div>                    
    
    <div class="grid-x grid-margin-x">
      <div class= "backButton">
        <a href="index.php">Back</a>
      </div> 
    </div>
</div>

<hr>
<?php include_once __DIR__ .'/template/footer.php'; ?>
</body>
</html>