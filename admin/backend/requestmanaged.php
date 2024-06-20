<?php
require_once "connect.php";
$id=$_GET['id'];
$sql = "UPDATE request SET status = '1' WHERE id=$id ";
 if($conn->query($sql)==TRUE)
        {
            echo "<script>window.location='../request.php'</script>";
        }
        else{
            echo 'ERROR';
        }
 ?>