<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/registration.css">
    <!-- js -->
    <script src="./registration.js"></script>
    <title>Registration Form</title>
</head>

<body>
    <?php
    include '../view/header.php';
    ?>

    <section class="main-page">
        <div class="back-btn-and-title">
            <h3><a href="../view/landingPage.php">
                    <-Back </a>
            </h3>
            <h2 class="admin-login-text">Registration Form</h2>
        </div>
        
        <div class="form-div">
            <form action="../controller/RegistrationAction.php" method="post" novalidate
                onsubmit="return emptyInputField()">

                <p class="required">*required field</p>
                <p class="label fname">First Name<span class="required">*</span></p>
                <input class="input-field input-field-required" type="text" id="fname" name="fname">

                <p class="label lname">Last Name<span class="required">*</span></p>
                <input class="input-field input-field-required" type="text" id="lname" name="lname">
                <div>
                    <p class="label gender">Select Gender</p>
                    <input type="radio" id="male" name="gender" value="male">
                    <p class="label male inline">Male</p>
                    <input type="radio" id="female" name="gender" value="female">
                    <p class="label female inline">Female</p>
                    <input type="radio" id="other" name="gender" value="other">
                    <p class="label other inline">Other</p><br>
                </div>
                <br>
                <p class="label phone">phone</p>
                <input class="input-field" type="tel" id="phone" name="phone">

                <p class="label email">Email<span class="required">*</span></p>
                <input class="input-field input-field-required" type="email" id="email" name="email">
                

                <p class="label pass">Password<span class="required">*</span> (4 characters minimum)</p>
                <input class="input-field input-field-required" type="password" id="pass" name="pass">
                <p class="label cpass">Confirm Password<span class="required">*</span></p>
                <input class="input-field input-field-required" type="password" id="cpass" name="cpass">
                
                <br>
                <input class="login-btn btn" type="submit" value="Register">
                <br><br>
            </form>
            <hr>
            <p>Already registerd? log in instead</p>
            <form action="">
                <button class="register-btn btn" type="submit" formaction="../View/login.php">Log in</button>
            </form>

        </div>
    </section>

    <?php
    include '../view/common/footer.php';
    ?>

</body>

</html>