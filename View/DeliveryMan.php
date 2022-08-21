<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div>
            <h1>Delivery Man Information</h1>
        </div>  
        <div>
        <body>
    </div>
	<div id="main">
	
    <button id="load">Load data</button>
	<script src="../Controller/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"../Controller/employeedata.php",
					type:"post",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	</script>
</body>

    </div>

        <div>
            <div>
                <h1>Insert Update Delete</h1>
                <form action="../Controller/employeecrud.php" method="post">
                    ID: <br><input type="id" id="id" name="id"><br>
                    Name:<br> <input type="name" id="name" name="name"> <br>
                    Email:<br> <input type="email" id="email" name="email" > <br>
                    Phone:<br><input type="phone" id="phone"name="phone"><br>
                    Address:<br><input type="input-field" id="address"name="address"><br>
                    <input type="radio" name="crud" value="insert">Insert
                    <input type="radio" name="crud" value="update">Update
                    <input type="radio" name="crud" value="delete">Delete <br>
                    
                    <input type="submit" value="Procced" name="add" id="add" >
                    </form>
    
                    
            </div>
        </div>

</body>
</html>