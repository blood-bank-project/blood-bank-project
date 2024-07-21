<?php
require_once "connect.php";

if (isset($_POST['d_id'])) {
    $id = $_POST['d_id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $province = $_POST['province'];
    $municipality = $_POST['municipality'];
    $district = $_POST['district'];
    $tole = $_POST['tole'];
    $ward = $_POST['ward'];

    $sql = "UPDATE donor SET firstname = ?, middlename = ?, lastname = ?, email = ?, phone = ?, province = ?, municipality = ?, district = ?, tole = ?, ward = ? WHERE d_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssssssi', $fname, $mname, $lname, $email, $phone, $province, $municipality, $district, $tole, $ward, $id);

    if ($stmt->execute()) {
        echo "Donor record updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "No data provided.";
}
?>
