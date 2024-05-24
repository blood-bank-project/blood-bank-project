<?php
require_once "connect.php";
$id=$_GET['id'];
$sql = "DELETE FROM hotline WHERE h_id=$id ";
 if($conn->query($sql)==TRUE)
        {
            echo "<script>window.location='../hotline.php'</script>";
        }
        else{
            echo 'ERROR';
        }
?>