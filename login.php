<?php
include 'session-file.php';
include 'handlers/login_handler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Ocean</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        .alert{
            color: red;
            margin: auto;
        }
        .pswd_icon_bg{
            background: white;
            height: 32px;
            width: 30px;
            position: absolute;
            display: flex;
            align-content: center;
            overflow: hidden;
            margin: 0 0 0 525px;
        }
        .login-container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favigon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.1-web/css/all.css">
</head>

<body>
   
    <div class="top-content">
        <h1 style="font-size:35px;">Welcome back to Ocean!</h1>
        <p>Login to continue sharing your moments with friends.</p>
        <hr style="width: 50%; color: white; margin-bottom:25px; margin-top:25px;">
    </div>

    <div class="login-container">
        <div class="signin-form">
            <div class="form-top-left">
                <h3 style="padding-top:10px;">Login to Ocean</h3>
                <p style="margin-top:-20px; padding-bottom:10px;">Enter Email and password to log on:</p>
            </div>
            <div class="form-bottom">
                <form action="login.php" method="POST" class="login-form">
                    <!-- Email Address -->
                    <label for="form-email">Email Address</label>
                    <input type="email" name="log_email" placeholder="Email Address" value="<?php if(isset($_SESSION['log_email'])) {
                        echo $_SESSION['log_email'];
                    } ?>" required> <br>
                                        
                    <!-- Password -->
                    <label for="form-password">Password</label>
                    <span class="pswd_icon_bg" onclick="log_pswd_toggale()"><i class="fa-regular fa-eye" id="pswd_show" style="margin: auto;"></i></span>
                    <input type="password" id="login_pswd" name="log_password" placeholder="Password" required> <br>
                    
                    <?php if(in_array("Email or Password was incorrect", $error_array_login)) echo "<p class='alert'>Email or Password was incorrect</p>"; ?>
                    
                    <button type="submit" style="margin: 20px 0" name="login_button">Sign in!</button>
                    
                    <p>Don't have an account? <a href="register.php">Sign up here!</a></p>
                </form>     
            </div>
        </div>
    </div>

    <hr style="color:white; margin-top:50px; width:40%;">

    <!-- Footer -->
    <footer>			
    	<div class="footer"> 
            <a style="text-decoration-line: none; color: #977AFF;" href="admin.php"><i class="fas fa-user-shield"></i> Admin? click here <i class="fas fa-arrow-right"></i></a>
    		<p> ©2020 All Rights Reserved <BR> Website designed and developed by <strong><U>Sindhiya Mahesh</u></strong></p>
    	</div>
    </footer>

    <script>
        function log_pswd_toggale() {
            var x = document.getElementById("login_pswd");
            var img = document.getElementById("pswd_show");
            if (x.type === "password") {
                img.className = "fa-regular fa-eye-slash"
                x.type = "text";
            } else {
                img.className = "fa-regular fa-eye"
                x.type = "password";
            }
        }
    </script>

</body>
</html>
