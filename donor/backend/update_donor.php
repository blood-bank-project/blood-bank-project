<?php
include("backend/connect.php"); // Include your database configuration file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $d_id = $_POST['d_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Split the name into firstname, middlename, lastname
    $nameParts = explode(' ', $name);
    $firstname = $nameParts[0];
    $middlename = isset($nameParts[1]) ? $nameParts[1] : '';
    $lastname = isset($nameParts[2]) ? $nameParts[2] : '';

    $updateQuery = "UPDATE donor SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', email = '$email', phone = '$phone', province = '$address' WHERE d_id = $d_id";

    if (mysqli_query($conn, $updateQuery)) {
        echo 'Profile updated successfully';
    } else {
        echo 'Error updating profile: ' . mysqli_error($conn);
    }
}
?>
