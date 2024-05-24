<?php
if(isset($_POST['submit']))
{
    require_once "connect.php";
    $name = $_POST['fname'];
    $phone = $_POST['phone'];
    $bgroup = $_POST['blood-group'];
    $message = $_POST['message'];

    if(is_uploaded_file($_FILES['file']['tmp_name']))
    {

        // // Get the file information from the form
        // if(($_FILES["course_image"]["type"]!="image/jpg") &&
        //     ($_FILES["course_image"]["type"]!="image/jpeg") &&
        //     ($_FILES["course_image"]["type"]!="image/gif") &&
        //     ($_FILES["course_image"]["type"]!="image/png"))
        // {
        //     echo "<script>alert('File type not matched')</script>";
        //     echo "<script>window.location='create_course.php'</script>";
        // }else if(($_FILES["course_image"]["size"])> 10000000)
        // {
        //     echo "<script>alert('File size is bigger')</script>";
        //     echo "<script>window.location='create_course.php'</script>";
        // }else{
       $target_file = basename($_FILES['file']["name"]);
    $extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $path = '../files/' . rand(1111, 9999) . '_' . time() . '.' . $extension;  
    $result = move_uploaded_file($_FILES['file']['tmp_name'], $path);
    }
        $sql = "INSERT INTO request (name,file,phone,bgroup,message) VALUES ('$name','$path','$phone','$bgroup','$message')";

        if($conn->query($sql)==TRUE)
        {
            echo "<script>window.location='../request.php'</script>";
        }
        else{
            echo 'ERROR';
        }
 }

?>