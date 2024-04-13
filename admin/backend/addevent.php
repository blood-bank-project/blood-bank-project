<?php
if(isset($_POST['submit']))
{
require_once "connect.php";
$name=$_POST['ename'];
$date=$_POST['date'];
$location=$_POST['location'];
$organizer=$_POST['organizer'];
$person=$_POST['person'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$status=$_POST['status'];
$message=$_POST['message'];

$sql="INSERT INTO event (name,date,location,organizer,c_person,phone,email,status,description) VALUES ('$name','$date','$location','$organizer','$person','$phone','$email','$status','$message')";

if($conn->query($sql)===true){
    echo "<script>window.location='../event.php'</script>";
        } else{
            echo "<script>alert('Error updating record: ".$conn->error."')</script>";
}
}
?>