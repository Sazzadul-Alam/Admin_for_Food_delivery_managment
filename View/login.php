<html>
    <head>
        <title>
            Login
        </title>
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            body{
                margin: 0px;
                background-size:100%;
                text-align: center;
                margin: 7px;      
            }
            
        </style>
        <link rel="stylesheet" href="./CSS/login.css">
       
    </head>

    <body>
    <?php
    include '../view/header.php';
    ?>
        <div  class="top">

            <h1>Hello Admin!</h1>
        
        </div>
        <div id="login">
            <h1>Login</h1>
            <!-- onsubmit="return validate()" -->
            <form onsubmit="return validate()" id="form" action="../Controller/LoginAction.php" method="POST">
                <div class="form-control" id="form-control">
                Email: <input type="email" id="email" name="email" > 
                <i id="success" class="fas fa-check-circle"></i>
                <i id="error" class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
                </div>
                <br>
                <div class="form-control1" id="form-control1">
                Password: <input type="password" id="pass" name="pass" > 
                <i id="success1" class="fas fa-check-circle"></i>
                <i id="error1" class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
                </div>
                <br>
                <input type="submit" value="Login" name="btnlogin" id="loginbtn" >
                <br><br>
                <hr>
                <p>New member?</p>
                <a class="link-button" target="_blank" href="Registration.php">Register here</a>
            </form>              
        </div>
        <script>
            function validate()
			{
				var adminemail=document.getElementById('email');
				var password=document.getElementById('password');
				if(adminemail.value=="" || password.value=="")
				{
					alert('Email or Password cannot be empty');
					return false;
				}
				else
				  return true;
			}
		</script>
        <!-- <script src="../Controller/validation.js"></script> -->

    </body>
</html>
<?php
    include 'Footer.php';
?>