<?php
    $id=$_GET['id'];
        require_once "connect.php";

        $sql="DELETE FROM donation where id=$id";
        $row=$conn->query($sql);
        if($conn->query($sql)==TRUE)
        {
            echo "<script>window.location='../donation.php'</script>";
        }
        else{
            echo 'ERROR';
        }
    
?>