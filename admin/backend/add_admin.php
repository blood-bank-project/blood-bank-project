<?php
if(isset($_POST['submit']))
{
require_once "connect.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="INSERT INTO admin (name,email,password) VALUES ('$name','$email','$password')";

if($conn->query($sql)===true){
    echo "<script>window.location='../addadmin.php'</script>";
} else{
     echo "<script>alert('Error: ".$conn->error."')</script>";
}
}
?>