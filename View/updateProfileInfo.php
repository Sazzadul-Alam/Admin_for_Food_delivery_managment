<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- stylesheet -->
    <link rel="stylesheet" href="./CSS/nav.css">
    <link rel="stylesheet" href="./CSS/main.css">
    <!-- js -->
    <script src="updateInfo.js"></script>
    <title>Update info</title>
</head>

<body>
    <?php
    require '../Model/admin_data_access.php';  

    $conn = get_connection();

    $sql =  "SELECT * FROM admin";

    $result = $conn->query($sql);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
        $fname = $data['First_Name'];
        $lname = $data['Last_Name'];
        $phone = $data['phone'];
    }

    ?>

    <!-- common nav -->
    <nav class="navigation">
        <h3 class="logo"> <a href="Homepage.php">FDS</a></h3>
        <div>
            <div class="dropdown">
                <button class="dropbtn nav-link">User List</button>
                <div class="dropdown-content">
                    <a href="Customer.php">Customer</a>
                    <a href="Resturant.php">Resturant</a>
                    <a href="DeliveryMan.php">Delivery Man</a>
                </div>
            </div>
            <a class="nav-link" href="">Issues</a>
        </div>
        </div>
        <div>
            <div class="dropdown">
                <button class="dropbtn nav-link">Profile</button>
                <div class="dropdown-content">
                    <a href="../view/viewProfile.php">View Profile</a>
                    <a href="../view/updateProfileInfo.php">Edit Profile</a>
                    <a href="../view/changePassword.php">Change Password</a>
                </div>
            </div>
            <a class="nav-link logout" href="login.php">Log out</a>
        </div>
    </nav>
    <!-- nav end -->



    <div class="form-div">
        <form action="../controller/updateProfileInfoAction.php" method="post" novalidate
            onsubmit="return emptyInputFieldforupdateinfo()">

            Email:
            <input class="input-field input-field-required" type="email" id="email" name="email"
                value="<?php echo $_SESSION["email"] ?>" <disabled><br>

            First Name:
            <input class="input-field input-field-required" type="text" id="fname" name="fname"
                value="<?php echo $fname ?>"><br>
            Last Name:
            <input class="input-field input-field-required" type="text" id="lname" name="lname"
                value="<?php echo $lname ?>">

            <br>
            phone:
            <input class="input-field" type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                value="<?php echo $phone ?>"><br>
            <input class="login-btn btn" type="submit" value="update">
        </form>

    </div>
</body>

</html>