<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- stylesheet -->
    <link rel="stylesheet" href="../View/CSS/nav.css">
    <title>Admin Dashboard</title>
</head>

<body>

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
        <div>
            <div class="dropdown">
                <button class="dropbtn nav-link">Profile</button>
                <div class="dropdown-content">
                    <a href="../View/viewProfile.php">View Profile</a>
                    <a href="../View/updateProfileInfo.php">Edit Profile</a>
                    <a href="../View/changePassword.php">Change Password</a>
                </div>
            </div>
            <a class="nav-link logout" href="login.php">Log out</a>
        </div>
    </nav>
    <section>
        <main>
        <section class="container">
            <div class="flexible-container">
                <div class="half-width info">
                    <h1>Best Food Delivery Service in BD</h1>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply

                        random text. It has roots in a piece of classical Latin literature
                        from 45 BC, making it over 2000 years old</p>
                </div>
                <div class="half-width">
                    <img src="../Resources/victoria-shes-UC0HZdUitWY-unsplash.jpg" alt="">
                </div>
            </div>
        </main>
    </section>
    <?php
    include '../View/Footer.php';
    ?>
</body>

</html>