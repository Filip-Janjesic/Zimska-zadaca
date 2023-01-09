<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <script src='js/bootstrap.min.js'></script>
    <?php include_once 'template\head.php'; ?>
    <?php include_once 'template\navbar.php'; ?>
</head>
<body>
<style> 
    input[type=submit], input[type=reset]{
    background-color: green;
    border: none;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    }
</style>
<br>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="grid-container" style= "padding: 5em;">
        <div class="grid-x grid-margin-x">
            <div class="cell small-12">                       
                <form action= "nadzornaploca.php" method="get">
                    Name <input type="text"  name="name">
                    E - mail <input type="text"  name="email">
                    <input type="submit">
                    <input type="reset">
                </form>                      
            </div>                   
        </div>
    </div>
</div>

<br>
<div class= "backButton">
    <a href="index.php">Back</a>
</div>

<hr>
<?php include_once 'template\footer.php'; ?>

</body>
</html>