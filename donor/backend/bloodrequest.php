<?php
if(isset($_POST['submit']))
{
    require_once "connect.php";
    session_start();
    $name = $_POST['fname'];
    $phone = $_POST['phone'];
    $bgroup = $_POST['blood-group'];
    $message = $_POST['message'];
    $user_id =  $_SESSION['user_id'];

    if(is_uploaded_file($_FILES['file']['tmp_name']))
    {
       $target_file = basename($_FILES['file']["name"]);
    $extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $path = '../files/' . rand(1111, 9999) . '_' . time() . '.' . $extension;  
    $result = move_uploaded_file($_FILES['file']['tmp_name'], $path);
    }
        $sql = "INSERT INTO request (name,file,phone,bgroup,message,donor_id) VALUES ('$name','$path','$phone','$bgroup','$message', '$user_id')";

        if($conn->query($sql)==TRUE)
        {
            echo "<script>window.location='../request.php'</script>";
        }
        else{
            echo 'ERROR';
        }
 }

?>