<?php
session_start();

require('admin_data_access.php');



function update($fname, $lname, $phone)
{
    $conn = get_connection();
    $email = $_SESSION["email"];

    $sql = "UPDATE admin SET First_Name='$fname', Last_Name='$lname', phone='$phone' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
        return 0;
    }

    $conn->close();

    return 1;
}