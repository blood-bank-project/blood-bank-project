<?php
header('Content-Type: application/json');    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

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

    // Escape the input values
    $email = $conn->real_escape_string($email);
    $pass = $conn->real_escape_string($pass);

    try {
        // Construct and execute the SQL query directly
        $sql = "SELECT * FROM donor WHERE email = '$email' AND password = '$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc(); // Use fetch_assoc instead of mysqli_fetch_array
            if ($user['password'] === $pass) {
                session_start();
                $_SESSION['loginstatus'] = 'Active';
                $_SESSION['username'] = $user['firstname'];
                $_SESSION['lastname'] = $user['lastname'];
                $_SESSION['gender'] = $user['gender'];
                $_SESSION['user_id'] = $user['d_id'];

                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Invalid email or password.']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid email or password.']);
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => 'Database error: ' . $e->getMessage()]);
    } finally {
        $conn->close();
    }
}
?>