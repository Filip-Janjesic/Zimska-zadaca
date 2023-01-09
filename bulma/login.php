<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/app.css">
    <?php include_once __DIR__ . '/template/head.php'; ?>
    <?php include_once __DIR__ .'/template/navbar.php'; ?>
</head>
<body>
<style> 
    input[type=submit], input[type=reset]{
    background-color: #000;
    border: none;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    }
</style>

<div class="field">
    <div class="control">
        <div class="grid-container" style= "padding: 5em;">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12">                       
                    <form action= "nadzornaploca.php" method="get">
                        Name <input type="text"  name="name">
                        E - mail <input type="text"  name="email">
                        <div class="grid-x grid-margin-x">
                            <br>
                            <input type="submit">
                            <input type="reset">
                        </div>
                    </form>                      
                </div>                   
            </div>
        </div>
    </div>
</div>

<br>
<div class= "backButton">
    <a href="index.php">Back</a>
</div>
<hr>
<?php include_once __DIR__ .'/template/footer.php'; ?>
</body>
</html>