    <!-- bayad 5k kung magpaexplain ka  -->
<?php
session_start();
include "userdata.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Get_name = htmlspecialchars(trim($_POST['name']));
    $Get_username = htmlspecialchars(trim($_POST['username']));
    $Get_password = $_POST['password'];
    $Get_confirm_password = $_POST['confirm_password'];
    $Get_captcha = $_POST['captcha'];

    $isUserTaken = false;

    foreach ($userinfos as $user) {
        if ($user['username'] === $Get_username) {
            $isUserTaken = true;
            break;
        }
    }

    // wako kasabot dire nga part jaj
    if ($isUserTaken) {
        $_SESSION['error_msg'] = "Username is already taken. Please try again with a different username.";
    } elseif ($Get_password !== $Get_confirm_password) {
        $_SESSION['error_msg'] = "Passwords do not match. Please try again.";
    } elseif ($Get_captcha != $_SESSION["code"]) { 
        $_SESSION['error_msg'] = "Incorrect CAPTCHA.";
    } else {
        $newUser = [
            'username' => $Get_username,
            'password' => $Get_password,
        ];

        $userinfos[] = $newUser;
        file_put_contents("userdata.php", "<?php \$userinfos = " . var_export($userinfos, true) . "; ?>");

        $_SESSION['success_msg'] = "Registration successful! You can now log in.";
        header("Location: index.php?page=login");
        exit();
    }
    header("Location: index.php?page=signup");
    exit();
}
?>
