<?php
require_once "connect.php";
$id=$_GET['id'];
$sql = "DELETE FROM donor WHERE d_id=$id ";
 if($conn->query($sql)==TRUE)
        {
            echo "<script>window.location='../donor.php'</script>";
        }
        else{
            echo 'ERROR';
        }