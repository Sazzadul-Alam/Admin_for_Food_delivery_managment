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
    <title>Admin Dashboard</title>
</head>
<body>
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

    $q="SELECT * from employee";
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