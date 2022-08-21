<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- stylesheet -->
    <link rel="stylesheet" href="./css/nav.css">
    <title>view profile</title>
</head>

<body>
    <?php
    require '../Model/admin_data_access.php';  
    $conn = get_connection();
    $sql =  "SELECT * FROM admin";

    $result = $conn->query($sql);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
        $firstName = $data['First_Name'];
        $lastName = $data['Last_Name'];
        $gender = $data['gender'];
        $phone = $data['phone'];
        $email = $data['email'];
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

    <div style="margin: 40px;">
        <h3>View profile</h3>

        <label for="First_Name">First Name: </label> <?php echo $firstName; ?> <br>
        <label for="Last_Name">Last Name: </label><?php echo $lastName; ?><br>
        <label for="gender">Gender: </label><?php echo $gender; ?><br>
        <label for="phone">phone: </label><?php echo $phone; ?><br>
        <label for="email">Email: </label><?php echo $email; ?><br>
        <br>
    </div>




</body>

</html>