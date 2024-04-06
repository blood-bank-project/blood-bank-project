<?php
    if(isset($_POST['submit'])){
        require_once "connect.php"; 
        $bloodgroup = mysqli_real_escape_string($conn, $_POST['blood-group']);
        $quantity = mysqli_real_escape_string($conn, $_POST['bloodquantity']);

        $sql_select = "SELECT `$bloodgroup` FROM blood WHERE s_n = 1"; 
        $result = $conn->query($sql_select);
        $row = mysqli_fetch_array($result);
        $old_quantity = $row[$bloodgroup];
        $new_quantity = $old_quantity + $quantity;

        $sql_update = "UPDATE blood SET `$bloodgroup` = $new_quantity WHERE s_n = 1"; 

        if($conn->query($sql_update) === TRUE){
            echo "<script>alert('Blood updated successfully!')</script>"; 
            echo "<script>window.location='../index.php'</script>";
        } else{
            echo "<script>alert('Error updating record: ".$conn->error."')</script>";
        }
    }
?>