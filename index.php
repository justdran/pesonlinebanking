<?php include("templates/php/functions.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/css/index_style.css">
    <title>PESOnline Banking</title>
</head>
<body>
        <?php include("templates/php/logo.php");?>
        <img src="https://media.discordapp.net/attachments/986686544775614474/986690224094609588/PESOnline_logo_with_name.png?width=590&height=499" style="float:right; width: 45%;">
        <div id="login">
            <br><br><br>
            <form method="POST" action="templates/php/functions.php" class="login">
                <font size="24">Log In</font><br><br><br><br>
                <label for="atmNumber">ATM Number</label><br/>
                <input type="text" name="atmNumber" id="atmNumber" required/><br/><br/><br/><br/>
                <label for="atmNumber">Password</label><br/>
                <input type="password" name="password" required/>
                <a href="forgot-password.php#login" name="forgotpassword" id="forgot">Forgot Password?</a><br/><br/><br/>
                <center>
                    <button type="submit" name="login" id="login">LOG IN</button><br/><br/><br/>
                    <div id="signup">Don't have an account? <a href="signup.php#signup">Sign Up!</a></div>
                    <br><br><br>
                </center>
            </form>
        </div>
</body>
</html>