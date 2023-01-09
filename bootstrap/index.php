<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <script src='js/bootstrap.min.js'></script>
    <?php include_once __DIR__ . '/template/head.php'; ?>
    <?php include_once __DIR__ .'/template/navbar.php'; ?>
</head>
<body>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Welcome to winter assignment</h1>
        <div class = "login">
          <a href="login.php" target="_blank"> Login </a>
        </div>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>


<hr>
<?php include_once __DIR__ .'/template/footer.php'; ?>

</body>
</html>