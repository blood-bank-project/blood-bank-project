<?php
require_once "connect.php";
$id=$_GET['id'];
$sql = "DELETE FROM admin WHERE aid=$id ";
 if($conn->query($sql)==TRUE)
    {
         echo "<script>window.location='../addadmin.php'</script>";
    }
    else{
        echo 'ERROR';
    }
?>