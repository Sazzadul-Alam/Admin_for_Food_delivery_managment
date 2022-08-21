<?php

function get_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}
?>
<?php

    function inserRegisterData($firstName, $lastName, $gender, $email, $pass,$phone)
    {
        $conn = get_connection();

        $q="INSERT INTO admin( First_Name, Last_Name, gender,email, Password,phone) VALUES('".$firstName."', '".$lastName."', '".$gender."', '".$email."', '".$pass."','".$phone."')";
            $result=$conn->query($q);
            header("Location: ../View/login.php");
    }


function login($email, $pass)
{
    $conn = get_connection();

    $sql =  "SELECT * FROM admin WHERE email = '".$email."' and password ='".$pass."'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    var_dump($data);

    if ($data != null) {
        return true;
    } else {
        return false;
    }
}
?>