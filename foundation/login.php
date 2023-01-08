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

        <form data-abide novalidate>
            <div class="grid-container" style= "padding: 5em;">
                <div class="grid-x grid-margin-x">
                    <div class="cell">
                        <div data-abide-error class="alert callout" style="display: none;">
                            <p><i class="fi-alert"></i> There are some errors in your form.</p>
                        </div>
                    </div>
                </div>

                <div class="grid-x grid-margin-x">
                    <div class="cell small-12">
                        <label>Username
                            <input type="text" placeholder="username" aria-describedby="exampleHelpTextNumber" required pattern="text">
                            <span class="form-error">
                            Yo, you had better fill this out, it's required.
                            </span>
                        </label>
                        <p class="help-text" id="exampleHelpTextNumber">Here's how you use this input field!</p>
                    </div>

                    <div class="cell small-12">
                        <label>Password
                            <input type="password" id="password" placeholder="password" aria-describedby="exampleHelpTextPassword" required >
                            <span class="form-error">
                            I'm required!
                            </span>
                            <p class="help-text" id="exampleHelpTextPassword">Enter a password please.</p>
                        </label>
                    </div>

                    <div class="cell small-12">
                        <label>Re-enter Password
                            <input type="password" placeholder="yeti4preZ" aria-describedby="exampleHelpText2" required pattern="alpha_numeric" data-equalto="password">
                            <span class="form-error">
                            Hey, passwords are supposed to match!
                            </span>
                        </label>
                        <p class="help-text" id="exampleHelpText2">This field is using the `data-equalto="password"` attribute, causing it to match the password field above.</p>
                    </div>
                </div>

                <div class="grid-x grid-margin-x">

                    <fieldset class="cell medium-6">
                        <a class="button" href="nadzornaploca.php">Submit</a>
                    </fieldset>

                    <fieldset class="cell medium-6">
                        <button class="button" type="reset" value="Reset">Reset</button>
                    </fieldset>

                    <div class= "backButton">
                        <a href="index.php">Back</a>
                    </div>
                   
                </div>
            <hr>
            <?php include_once 'template\footer.php'; ?> 
            </div>
        </form>

        <?php include_once 'template\skripte.php'; ?>

    </body>
</html>