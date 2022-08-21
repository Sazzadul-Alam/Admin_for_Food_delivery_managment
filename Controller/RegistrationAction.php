<?php
session_start();
require '../model/admin_data_access.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration PHP</title>
</head>

<body>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $firstName = $firstNameErr = $lastName = $lastNameErr = $gender = $email = $emailErr = $pass = $passErr = $cpass = $cpassErr =$phone = "";


    function sanitize($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($_POST['fname'])) {
        $firstNameErr = "* First Name is required.";
    } else {
        $firstName = sanitize($_POST['fname']);
        
    }

    if (empty($_POST['lname'])) {
        $lastNameErr = "* Last Name is required.";
    } else {
        $lastName = sanitize($_POST['lname']);
       
    }


     $phone = sanitize($_POST['phone']);

    if (empty($_POST["email"])) {
        $emailErr = "* Email is required";
    } else {
        $email = sanitize($_POST["email"]);
    }


    if (empty($_POST['pass'])) {
        $passErr = "* password required.";
    } else {
        $pass = sanitize($_POST['pass']);
        if (strlen($pass) < 4) {
            $passErr = "password should 4 characters minimum";
        }
    }

    if (empty($_POST['cpass'])) {
        $cpassErr = "*confirm password required.";
    } else {
        $cpass = sanitize($_POST['cpass']);
        if ($pass !== $cpass) {
            $cpassErr = "*confirm password doesn't match.";
        }
    }

    if ($firstNameErr || $lastNameErr || $genderErr || $emailErr || $passErr || $cpassErr) {
        $_SESSION['firstNameErr'] = $firstNameErr;
        $_SESSION['lastNameErr'] = $lastNameErr;
        $_SESSION['emailErr'] = $emailErr;
        $_SESSION['passErr'] = $passErr;
        $_SESSION['cpassErr'] = $cpassErr;

        // $_SESSION['email'] = $email;

        header("Location: ../View/registration.php");
        exit();
    } else {

        if (inserRegisterData($firstName, $lastName, $gender,$email, $pass,$phone)) {
            
            header("Location: ../View/login.php");
            session_destroy();
            exit();
        }
    }
} else {
    echo "can not process get request";
}
?>


</body>

</html>