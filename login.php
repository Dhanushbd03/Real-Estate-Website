<?php
session_start();
include("config.php");
$error = "";
$msg = "";
if (isset($_REQUEST['login'])) {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = sha1($pass);

    if (!empty($email) && !empty($pass)) {
        $sql = "SELECT * FROM user where uemail='$email' && upass='$pass'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        if ($row) {

            $_SESSION['uid'] = $row['uid'];
            $_SESSION['uemail'] = $email;
            header("location:index.php");

        } else {
            $error = "<p class='error-message'>Email or Password doesnot match!</p> ";
        }
    } else {
        $error = "<p class='error-message'>Please Fill all the fields</p>";
    }
}
if (isset($_REQUEST['reg'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $pass = $_REQUEST['pass'];
    $pass = sha1($pass);

    $query = "SELECT * FROM user where uemail='$email'";
    $res = mysqli_query($con, $query);
    $num = mysqli_num_rows($res);

    if ($num == 1) {
        $error = "<p class='error-message'>Email Id already Exist</p> ";
    } else {

        if (!empty($name) && !empty($email) && !empty($phone) && !empty($pass)) {

            $sql = "INSERT INTO user (uname,uemail,uphone,upass) VALUES ('$name','$email','$phone','$pass')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $msg = "<p class='alert alert-success'>Register Successfully</p> ";
            } else {
                $error = "<p class='alert alert-warning'>Register Not Successfully</p> ";
            }
        } else {
            $error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <title>Real Estate |Login</title>
    <style>

    </style>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container" id="container">
        <div class="form-container sign-up" id="signup">
            <form method="post" enctype="multipart/form-data">
                <h1>Create Account</h1>
                <br>
                <?php echo $error; ?>
                <?php echo $msg; ?>
                <input type="text" placeholder="Your Name" name="name">
                <input type="email" name="email" placeholder="Your Email*">
                <input type="tel" name="phone" placeholder="Your Phone*" maxlength="10">
                <input type="password" name="pass" placeholder="Your Password*">
                <button name="reg" value="Register" type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">

            <form method="post">
                <h1>Sign In</h1>
                <br>
                <?php echo $error; ?>
                <?php echo $msg; ?>

                <input type="email" name="email" placeholder="Your Email">
                <input type="password" name="pass" placeholder="Your Password">

                <button name="login" value="Login" type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script>
</body>

</html>