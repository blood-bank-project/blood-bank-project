<?php
require_once "connect.php";
$id=$_GET['id'];
$sql = "UPDATE donation SET status = '1'  WHERE id=$id ";
 if($conn->query($sql)==TRUE)
        {
            echo "<script>window.location='../donation.php'</script>";
        }
        else{
            echo 'ERROR';
        }
?>