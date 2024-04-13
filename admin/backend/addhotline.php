<?php
if(isset($_POST['submit']))
{
require_once "connect.php";
$name=$_POST['bname'];
$location=$_POST['location'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$phone3=$_POST['phone3'];

$sql="INSERT INTO hotline (name,location,phone1,phone2,phone3) VALUES ('$name','$location','$phone1','$phone2','$phone3')";

if($conn->query($sql)===true){
    echo "<script>window.location='../hotline.php'</script>";
        } else{
            echo "<script>alert('Error updating record: ".$conn->error."')</script>";
}
}
?>