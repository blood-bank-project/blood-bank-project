<?php
require_once "connect.php";
$id=$_GET['id'];
$sql = "DELETE FROM contact WHERE id=$id ";
 if($conn->query($sql)==TRUE)
        {
            echo "<script>window.location='../contact.php'</script>";
        }
        else{
            echo 'ERROR';
        }
?>