<?php
if(isset($_POST['submit']))
{
require_once "connect.php";

$name=$_POST['fname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$unit=$_POST['unit'];
$bloodgroup=$_POST['blood-group'];
$gender=$_POST['gender'];
$message=$_POST['message'];

$sql = "INSERT INTO donation (id,name,phone,email,address,bloodunit,bloodgroup,gender,disease) VALUES ('','$name','$phone','$email','$address','$unit','$bloodgroup','$gender','$message')";

    if($conn->query($sql)==TRUE){
            echo "<script>window.location='../donor.php'</script>";
    }
        else {
     echo  "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>