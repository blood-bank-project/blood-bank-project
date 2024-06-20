<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "connect.php";
    $errors = [];
    $fname = htmlspecialchars(trim($_POST['fname']));
    $mname = htmlspecialchars(trim($_POST['mname']));
    $lname = htmlspecialchars(trim($_POST['lname']));
    $uname = htmlspecialchars(trim($_POST['uname']));
    $dob = htmlspecialchars(trim($_POST['dob']));
    $email = htmlspecialchars(trim($_POST['email']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $bgroup = htmlspecialchars(trim($_POST['blood']));
    $occupation = htmlspecialchars(trim($_POST['occupation']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $province = htmlspecialchars(trim($_POST['province']));
    $municipality = htmlspecialchars(trim($_POST['municipality']));
    $district = htmlspecialchars(trim($_POST['district']));
    $tole = htmlspecialchars(trim($_POST['tole']));
    $ward = htmlspecialchars(trim($_POST['ward']));
    $password = htmlspecialchars(trim($_POST['pass']));
    $cpassword = htmlspecialchars(trim($_POST['cpass']));

    // Validate inputs
    if (empty($fname)) {
        $errors['fname'] = 'First name is required.';
    }

    if (empty($lname)) {
        $errors['lname'] = 'Last name is required.';
    }

    if (empty($dob)) {
        $errors['dob'] = 'Date of birth is required.';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format.';
    }

    if (empty($gender)) {
        $errors['gender'] = 'Gender is required.';
    }

    if (empty($phone)) {
        $errors['phone'] = 'Phone number is required.';
    }

    if (empty($bgroup)) {
        $errors['bgroup'] = 'Blood group is required.';
    }

    if (empty($province)) {
        $errors['province'] = 'Province is required.';
    }

    if (empty($district)) {
        $errors['district'] = 'District is required.';
    }

    if (empty($municipality)) {
        $errors['municipality'] = 'Municipality is required.';
    }

    if (empty($tole)) {
        $errors['tole'] = 'Tole is required.';
    }

    if (empty($ward)) {
        $errors['ward'] = 'Ward number is required.';
    }

    if (empty($uname)) {
        $errors['uname'] = 'Username is required.';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    } elseif (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters long.';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        $errors['password'] = 'Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character.';
    }

    if ($password !== $cpassword) {
        $errors['cpass'] = 'Passwords do not match.';
    }

    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }

    // Insert into database if no errors
    $sql = "INSERT INTO donor (firstname, middlename, lastname, username, dob, email, gender, bgroup, occupation, phone, province, district, municipality, tole, ward, password)
            VALUES ('$fname', '$mname', '$lname', '$uname', '$dob', '$email', '$gender', '$bgroup', '$occupation', '$phone', '$province', '$district', '$municipality', '$tole', '$ward', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Database error: ' . $conn->error]);
    }

    $conn->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?>