<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/slider.css" />
    <link rel="stylesheet" href="cssfile_1.css">
</head>
<body class="loginpage">

<!-- header -->
<?php require_once ("header.php"); ?>

    <div class="wrapper">
    
    <div class="log-in-div">
        <div class="form">

        <img src="assets/images/daily.jpg", width="500", height="550">

            <div class="signin-form">
                <form action="loginform.php" method="POST">

                    <div class="signin-title">
                        <h2>Welcome Back!</h2>
                        <p>Log in to continue</p>
                    </div>
                    <br>
                    <div class="form-control">
                        <label>Email Address</label>
                        <input type="text" id="email" name="email" placeholder="Email Address" required>
                    </div>

                    <div class="form-control">
                        <label>Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>

                    <?php
                        if(isset($_GET['error'])==true){
                            echo "<div class='error-message'>";
                            echo "<p>Sorry, your sign-in information is not valid.</p>";
                            echo "</div><br>";
                        }
                    ?>

                    <div class="form-control">
                      
                        <div class="final-sign-in-button">
                            <a href="#"><button class="btn" name="login">Sign In</button></a>
                          </div>

                    </div>

                </form>
      

           </div>        
         </div>

        </div> 

    </div> <!--End of wrapper-->

    <!-- Footer -->
    <?php require_once ("footer.php"); ?>
</body>
</html>