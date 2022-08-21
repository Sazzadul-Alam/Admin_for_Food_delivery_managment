<?php
session_start();
require '../Model/admin_data_access.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in form</title>
</head>

<body>

    <?php

	$email = $emailErr = $pass = $passErr = $err = $arr1 = $flag = '';

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		function sanitize($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}


		if (empty($_POST['email'])) {
			$emailErr = "* email required.";
			$flag = 0;
		} else {
			$email = sanitize($_POST['email']);
			$flag = 1;
		}
		if (empty($_POST['pass'])) {
			$passErr = "* password required.";
			$flag = 0;
		} else {
			$pass = sanitize($_POST['pass']);
			$flag = 1;
		}
        // echo "flag 1" . $flag;
		if ($flag == 1) {
            // echo "flag 1";
			if (login($email, $pass)) {
				setcookie('flag', 'true', time() + 3600, '/');
				$_SESSION['email'] = $email;
				header("Location: ../View/Homepage.php");
				exit();
			} else {
				$err = "* email/ pass invalid.";
				$_SESSION['err'] = $err;
				header("Location: ../View/login.php");
				exit();
			}
		} else if ($emailErr || $passErr) {
			$_SESSION['emailErr'] = $emailErr;
			$_SESSION['passErr'] = $passErr;
			header("Location: ../View/login.php");
			exit();
		}
	}
	?>

</body>

</html>