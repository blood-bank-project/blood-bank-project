<?php
require_once "connect.php";
$id=$_GET['id'];
$sql = "DELETE FROM event WHERE e_id=$id ";
 if($conn->query($sql)==TRUE)
        {
            echo "<script>window.location='../event.php'</script>";
        }
        else{
            echo 'ERROR';
        }
?>