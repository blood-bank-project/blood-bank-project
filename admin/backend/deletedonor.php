<?php
require_once "connect.php";
session_start();

$id = intval($_GET['id']); // Ensure id is an integer

// Delete from `donation` table
$sql = "DELETE FROM donation WHERE user_id = $id";
if (!$conn->query($sql)) {
    echo 'ERROR deleting from donation table: ' . $conn->error;
    exit();
}

// Delete from `request` table
$sql = "DELETE FROM request WHERE donor_id = $id";
if (!$conn->query($sql)) {
    echo 'ERROR deleting from request table: ' . $conn->error;
    exit();
}

// Delete from `donor` table
$sql = "DELETE FROM donor WHERE d_id = $id";
if (!$conn->query($sql)) {
    echo 'ERROR deleting from donor table: ' . $conn->error;
    exit();
}

// Redirect after successful deletion
echo "<script>window.location='../donor.php'</script>";

$conn->close();
?>