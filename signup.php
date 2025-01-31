<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$success = isset($_SESSION['success_msg']) ? $_SESSION['success_msg'] : '';
$error = isset($_SESSION['error_msg']) ? $_SESSION['error_msg'] : '';
?>

<div id="signup" class='outerform' style='margin-top: 50px; text-align: center;'>
    <div class='formcontainer'>
        <div class='innerformcontainer' style="padding:10px; text-align: center;">
            <span class='signup'><b>SIGN UP</b></span>
            <div class='forminputs' style="padding:5px; margin: 30px; text-align: center; height: auto;">
                <form action="check_signup.php" method="post">
                    <label for='name'>Name:</label><br>
                    <input title='Enter your name' placeholder="Name" type='text' id='name' name='name' autocomplete="off" required><br> 

                    <label for='username'>Username:</label><br>
                    <input title='Enter your username' placeholder="Username" type='text' id='username' name='username' autocomplete="off" required><br>         

                    <label for='password'>Password:</label><br>
                    <input title='Enter your password' type='password' placeholder="Password" id='password' name="password" autocomplete="off" required><br>

                    <label for='confirm_password'>Confirm Password:</label><br>
                    <input title='Confirm your password' type='password' placeholder="Confirm Password" id='confirm_password' name="confirm_password" autocomplete="off" required><br><br>

                    <label for="captcha">Captcha:</label><br>
                    <img id="imgcap" onclick="reloadCaptcha();" src="inc/captcha.php" alt="CAPTCHA" style="width: 100px; height: 30px; vertical-align: middle; cursor: pointer;"/><br>
                    <input title="enter letter or number above" id="captcha" placeholder="Captcha" name="captcha" required><br><br>

                    <input id='submitbtn' title="Sign Up" type='submit' value='Sign Up'>
                </form>
                <div style="font-size: 11px; color:green; margin-top:10px;"><?php echo $success; ?></div>
                <div style="font-size: 11px; color:yellow; margin-top:10px;"><?php echo $error; ?></div>
            </div>
            <a href='https://app.termly.io/builder/websites/4bb42294-808b-4f56-ab41-5bf69a260344/documents/4445830/General/Platform%20Type'>
                <span class='terms' style="color:#fff; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                    Terms and Conditions
                </span>
            </a>
        </div>
    </div>
</div>

<?php
    unset($_SESSION['success_msg']);
unset($_SESSION['error_msg']);
?>
<link href="css/styleone.css" media="screen" rel="stylesheet" type="text/css">
