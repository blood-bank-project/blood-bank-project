<?php
header('Content-Type: application/json');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
	
    // Basic input validation
    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'error' => 'Email and password are required.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'error' => 'Invalid email format.']);
        exit;
    }
    require_once "connect.php";
    try {
      
        $stmt = $conn->prepare("SELECT * FROM donor WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = mysqli_fetch_array($result);
            if ($email === $user['email']){
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
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => 'Database error: ' . $e->getMessage()]);
    } finally {
        $stmt->close();
        $conn->close();
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?>