<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminUsername = "admin";
    $adminPassword = "admin123";

    $userUsername = "user";
    $userPassword = "user123";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $adminUsername && $password == $adminPassword) {
        header("Location: admin_panel.php");
        exit;
    } 

    elseif ($username == $userUsername && $password == $userPassword) {
        header("Location: index.php");
        exit;
    } 
    else {
        $error_message = "Invalid username or password. Please try again.";
    }
}
?>

<section class="container">
    <div class="login-container">
        <div class="circle circle-one"></div>
        <div class="form-container">
            <h1 class="opacity">LOGIN</h1>
            <form action="#" method="post">
                <input type="text" placeholder="USERNAME" name="username" />
                <input type="password" placeholder="PASSWORD" name="password"/>
                <button class="opacity" type="submit">SUBMIT</button>
            </form>
            <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
        </div>
        <div class="circle circle-two"></div>
    </div>
    <div class="theme-btn-container"></div>
</section>

</body>
</html>
