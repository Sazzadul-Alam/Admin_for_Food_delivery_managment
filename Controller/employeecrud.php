<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="project";
    $adminid=$_POST["id"];
    $adminname=$_POST["name"];
    $adminemail=$_POST["email"];
    $adminphone=$_POST["phone"];
    $adminaddress=$_POST["address"];
    
 
    $con= new mysqli($servername,$username,$password,$dbname); 
    $todo=$_POST["crud"];


if($con->connect_error){
    die("Connection Failed: ".$con->connect_error);
}
else{
    if($todo=="insert"){
        $sql="INSERT INTO employee(Name,Email,Phone,Address) VALUES('".$adminname."','".$adminemail."','".$adminphone."','".$adminaddress."')";
        $result=$con->query($sql);
        header("Location: ../View/DeliveryMan.php");
    }
    elseif($todo=="update"){
        $sql = "UPDATE employee SET Name='".$adminname."',Email='".$adminemail."',Phone='".$adminphone."',Address='".$adminaddress."' WHERE ID='".$adminid."'";
        $result=$con->query($sql);
        header("Location: ../View/DeliveryMan.php");
    }
    elseif($todo=="delete"){
        $sql="DELETE FROM employee WHERE ID='".$adminid."'";
        $result=$con->query($sql);
        header("Location: ../View/DeliveryMan.php");
    }
    else{
        header("Location: ../View/DeliveryMan.php");
    }
    
    
} 
    
    ?>