<?php
session_start();

// Include the userdata.php file
include "userdata.php"; // Loads $userinfos array

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get submitted data
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];
    $submittedCaptcha = $_POST['captcha']; // Captcha entered by the user

    $isValidUser = false;
    $isUsernameCorrect = false;
    $isPasswordCorrect = false;

    // Check if the username and password match
    foreach ($userinfos as $user) {
        if ($user['username'] === $submittedUsername) {
            $isUsernameCorrect = true;
            if ($user['password'] === $submittedPassword) {
                $isPasswordCorrect = true;
                $isValidUser = true;
                break;
            }
        }
    }

    // Validate user credentials and CAPTCHA
    if ($isValidUser && $submittedCaptcha === $_SESSION["code"]) {
        $_SESSION['logged_in'] = 'yes'; // Successful login
        header("location: index.php");
        exit();
    } else {
        // Determine the specific error message
        if (!$isUsernameCorrect) {
            $_SESSION['error_msg'] = 'Incorrect username or username not registered.';
        } elseif (!$isPasswordCorrect) {
            $_SESSION['error_msg'] = 'Incorrect password.';
        } elseif ($submittedCaptcha !== $_SESSION["code"]) {
            $_SESSION['error_msg'] = 'Incorrect CAPTCHA.';
        } else {
            $_SESSION['error_msg'] = 'Invalid username, password, or CAPTCHA.';
        }
        
        // Redirect back to the login page with an error message
        header("location: index.php?page=login");
        exit();
    }
}
?>
