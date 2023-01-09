<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>  
        <style> 
            input[type=submit], input[type=reset]{
            background-color: #1779ba;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            }
        </style>
        <div class="grid-container">
            <link rel="stylesheet" type="text/css" href="app.css">
            <?php include_once 'template\head.php'; ?>
            <?php include_once 'template\titlebar.php'; ?>
        </div>

    </head>
 
    <body>

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

                <div class="grid-x grid-margin-x">

                    <div class= "backButton">
                        <a href="index.php">Back</a>
                    </div>
                   
                </div>
            <hr>
            <?php include_once 'template\footer.php'; ?> 
            </div>
 

        <?php include_once 'template\skripte.php'; ?>

    </body>
</html>