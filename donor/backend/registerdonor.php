<?php

if (isset($_POST['submit'])) {
    require_once "connect.php";
   $fname = ($_POST['fname']);
    $mname = ($_POST['mname']);
    $lname = ($_POST['lname']);
    $dob = ($_POST['dob']);
    $email = ($_POST['email']);
    $gender = ($_POST['gender']);
    $bgroup = ($_POST['blood']);
    $occupation = ($_POST['occupation']);
    $phone = ($_POST['phone']);
    $province = ($_POST['province']);
    $municipality = ($_POST['municipality']);
    $district = ($_POST['district']);
    $tole = ($_POST['tole']);
    $ward = ($_POST['ward']);
    $password = ($_POST['pass']);
    $cpassword = ($_POST['cpass']);
    // Insert into database if no errors
    $sql = "INSERT INTO donor (firstname, middlename, lastname, dob, email, gender, bgroup, occupation, phone, province, district, municipality, tole, ward, password)
            VALUES ('$fname', '$mname', '$lname', '$dob', '$email', '$gender', '$bgroup', '$occupation', '$phone', '$province', '$district', '$municipality', '$tole', '$ward', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location='../../index.php'</script>";
    } else{
          echo  "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>