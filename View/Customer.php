<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table ,th ,td{
            border:1px solid black;
        }
        table{
            margin-top:25px;
        }
    </style>
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
            <!-- <a class="nav-link" href="">User List</a> -->
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
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
else
{

    $q="SELECT * from customer";
    $result=$conn->query($q);
    
    if($result->num_rows>0)
	{
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th></tr>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>" .$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td></tr>";
		}
        echo "</table>";
	}
    else
    echo"no table data";
}
?>
</body>
</html>