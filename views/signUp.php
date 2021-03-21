<?php 
    include('../db.php');
    include('../sign.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie-edge"/>
        <link 
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous"
        > 
        <link rel="stylesheet" href="signUp.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <title>Membership system</title>
    </head>
<body>
<div class="signUp">
    <span><?php echo $err; ?></span>
    <span class="head">Sign Up</span>
    <form method="post" action="signUp.php" class="form">
        <label for="username" >Username:</label>
        <div class="inputEl">
            <input type="text" id="username" name="createUsername" placeholder="Username">
            <i class="fa fa-user icon"></i>
            <div id="errUsername" class="error-text">
                <?php echo $errUsername ?>
            </div>
        </div>
        <label for="email">Email:</label>
        <div class="inputEl">
            <input type="text" id="email" name="createEmail" placeholder="Email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <div id="errEmail" class="error-text">
                <?php echo $errCreateEmail;?>
            </div>
        </div>
        <label for="confirmEmail">Confirm Email:</label>
        <div class="inputEl">
            <input type="text" id="confirmEmail" name="confirmEmail" placeholder="Re-type email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <div id="errConfirmEmail" class="error-text">
                <?php echo $errConfirmEmail;?>
            </div>
        </div>
        <label for="password">Password:</label>
        <div class="inputEl">
            <input type="password" id="password" name="createPassword" placeholder="Password" <?php if(isset($_POST['createPassword'])) { echo 'value="'.$_POST['createPassword'].'"'; } ?>>
            <i class="fa fa-lock icon" aria-hidden="true"></i>
            <div id="errPassword" class="error-text">
                <?php echo $errCreatePassword;?>
            </div>
        </div>
        <label for="confirmPassword">Confirm Password:</label>
        <div class="inputEl">
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-type password">
            <i class="fa fa-lock icon" aria-hidden="true"></i>
            <div id="errConfirmPassword" class="error-text">
                <?php echo $errConfirmPassword;?>
            </div>
        </div>
        <button type="submit" name="signUp">Sign Up</button>
    </form>
</div>
</body>
</html>