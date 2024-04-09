<?php
if(isset($_POST['submit']))
{
	require_once "connect.php";
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="select * from donor where email='$email' and password='$password'";
	$rows=$conn->query($sql);
	if($rows->num_rows>0)
	{
		$data=mysqli_fetch_object($rows);
		session_start();
		$_SESSION['loginstatus']='Active';
		$_SESSION['username']=$data->firstname;
		header('Location:../index.php');
	}else{
		echo "<script>alert('Email or Password Incorrect')</script>";
	    echo "<script>window.location='../login.php'</script>";
	}
}
?>