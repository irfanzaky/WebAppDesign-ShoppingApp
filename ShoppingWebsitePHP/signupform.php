<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Store: Sign up</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/catalog.css" />
    <link rel="stylesheet" href="cssfile_form.css">

</head>
<body class="signuppage">
<?php include('header.php'); ?>


    <div class="wrapper">

    <div class="sign-up-div">
    <div class="form">
        <div class="signup-form">
            <form action="registerconfirmation.php" method="POST">

                <div class="signup-title">
                    <h2>Sign Up for Fashion Store</h2>
                    <p>Follow the easy steps.</p>
                </div>

                <div class="form-control">
                    <label>Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your Name" onchange="nameValidation()" required>
                </div>

                <div class="form-control">
                    <label>Email Address</label>
                    <input type="text" id="email" name="email" placeholder="Enter your Email" onchange="emailValidation()" required>
                </div>

                <div class="form-control">
                    <label>Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your Password" onchange="passwordValidation()" required>
                </div>

                <div class="form-control">
                    <label>Address</label>
                    <input type="text" id="address" name="address" placeholder="Enter your Address" onchange="addressValidation()" required>
                </div>

                <div class="form-control">
                    <label>Postal Code</label>
                    <input type="text" id="postal" name="postal" placeholder="Enter your Postal Code" onchange="postalValidation()" required>
                    <p><small>By creating an account with the Fashion Store, you agree with our <b>Terms and Conditions.</b></small></input>
                        </p>
                </div>

                <div class="form-control">
                    
                    <div class="create-account-button">
                        <a href="#"><button class="btn" name="register" onclick="return finalValidation();">Create Account</button></a>
                        </div>

                </div> <!--End of form-control of button-->  

                </form>
      
           </div>   <!--End of signup-form-->   

        </div> <!--End of form-div-->   

    </div> <!--End of sign-up-div-->

    </div> <!--End of wrapper-->

 <!-- Footer -->
 <?php require_once ("footer.php"); ?>

</body>
<script type="text/javascript" src="js/formvalidation.js"></script>
</html>