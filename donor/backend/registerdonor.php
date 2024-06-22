<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once "connect.php";
    
    // Retrieve and sanitize POST data
    $firstname = trim($_POST['fname']);
    $middlename = trim($_POST['mname']);
    $lastname = trim($_POST['lname']);
    $dobirth = trim($_POST['dob']);
    $emailid = trim($_POST['email']);
    $gen = trim($_POST['gender']);
    $blood = trim($_POST['bgroup']);
    $occ = trim($_POST['occupation']);
    $tel = trim($_POST['phone']);
    $prov = trim($_POST['province']);
    $muni = trim($_POST['municipality']);
    $dis = trim($_POST['district']);
    $tol = trim($_POST['tole']);
    $war = trim($_POST['ward']);
    $pass = trim($_POST['pass']);
    
    // Additional validation can be added here

    // Insert into database if no errors
    $sql = "INSERT INTO donor (firstname, middlename, lastname, dob, email, gender, bgroup, occupation, phone, province, district, municipality, tole, ward, password)
            VALUES ('$firstname', '$middlename', '$lastname', '$dobirth', '$emailid', '$gen', '$blood', '$occ', '$tel', '$prov', '$dis', '$muni', '$tol', '$war', '$pass')";
    
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Data is not inserted. ' . $conn->error]);
    }
    
    $conn->close();
}
?>