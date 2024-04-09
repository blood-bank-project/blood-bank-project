<?php
if(isset($_POST['submit']))
{
	require_once "connect.php";
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$bgroup=$_POST['blood'];
	$occupation=$_POST['occupation'];
	$phone=$_POST['phone'];
	$tel=$_POST['tel'];
	$nation=$_POST['nation'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$password=$_POST['pass'];
	$cpassword=$_POST['cpass'];

	$sql = "INSERT INTO patient (p_id,firstname,lastname,dob,email,gender,bgroup,occupation,phone,tel,nationality,state,district,password,cpassword) VALUES ('','$fname','$lname','$dob','$email','$gender','$bgroup','$occupation','$phone','$tel','$nation','$state','$district','$password','$cpassword')";

        if($conn->query($sql)==TRUE){
            echo "<script>window.location='../login.php'</script>";
        }
        else {
         echo  "Error: " . $sql . "<br>" . $conn->error;
        }

}

?>