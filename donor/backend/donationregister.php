<?php

if(isset($_POST['submit']))
{
require_once "connect.php";
session_start();
$user_id =  $_SESSION['user_id'];
$name=$_POST['fname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$unit=$_POST['unit'];
$bloodgroup=$_POST['blood-group'];
$gender=$_POST['gender'];
$message=$_POST['message'];

$sql = "INSERT INTO donation (id,name,phone,email,address,bloodunit,bloodgroup,gender,disease,user_id) VALUES ('','$name','$phone','$email','$address','$unit','$bloodgroup','$gender','$message','$user_id')";

    if($conn->query($sql)==TRUE){
            echo "<script>window.location='../donation.php'</script>";
    }
        else {
     echo  "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>