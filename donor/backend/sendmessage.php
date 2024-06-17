<?php
if(isset($_POST['submit'])){
    require_once "connect.php";    
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    $sql = "INSERT INTO contact VALUES ('','$name','$phone','$email','$message')";
    $result = mysqli_query($conn,$sql);
    if($result){   
        echo "<script>window.location='../index.php'</script>";
    }
    else{
        echo 'ERROR';
    }

}

?>