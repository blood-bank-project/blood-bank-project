<?php
header('Content-Type: application/json');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email1'];
    $pass = $_POST['password1'];
	
    // Basic input validation
    if (empty($email) || empty($pass)) {
        echo json_encode(['success' => false, 'error' => 'Email and password are required.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'error' => 'Invalid email format.']);
        exit;
    }
    require_once "connect.php";
        $email = $conn->real_escape_string($email);
        $pass = $conn->real_escape_string($pass);
    try {
       $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if ($pass === $user['password']){
                session_start();
                $_SESSION['loginstatus'] = 'Active';
                $_SESSION['username'] = $user['name'];

                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Invalid email or password.']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid email or password.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => 'Database error: ' . $e->getMessage()]);
    } finally {
       $conn->close();
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?>