<?php
include("includes/header.php");
include("includes/navbar.php");
require_once "backend/connect.php";

// Fetch donor data from the database
$d_id = $_GET['id']; // Example donor ID, you can change this as needed or fetch dynamically
$query = "SELECT * FROM donor WHERE d_id = $d_id";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $donor = mysqli_fetch_assoc($result);
} else {
    echo "No donor found.";
    exit;
}
?>

<section id="donorProfile">
    <div class="profile-container">
        <h1>Donor Profile</h1>
        <div class="profile-picture">
            <img src="default-profile.png" alt="Profile Picture" id="profileImage">
            <input type="file" id="uploadImage" accept="image/*" style="display: none;">
        </div>
        
        <div class="profile-view" id="profileView">
            <p><strong>Name:</strong> <span id="viewName"><?php echo $donor['firstname'] . ' ' . $donor['middlename'] . ' ' . $donor['lastname']; ?></span></p>
            <p><strong>Email:</strong> <span id="viewEmail"><?php echo $donor['email']; ?></span></p>
            <p><strong>Phone:</strong> <span id="viewPhone"><?php echo $donor['phone']; ?></span></p>
            <p><strong>Address:</strong> <span id="viewAddress"><?php echo $donor['province'] . ', ' . $donor['municipality'] . ', ' . $donor['district'] . ', ' . $donor['tole'] . ', ' . $donor['ward']; ?></span></p>
            <button id="editButton">Edit</button>
        </div>
        
        <form class="profile-form" id="profileForm" style="display: none;">
            <input type="hidden" id="d_id" name="d_id" value="<?php echo $donor['d_id']; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $donor['firstname'] . ' ' . $donor['middlename'] . ' ' . $donor['lastname']; ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $donor['email']; ?>">

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $donor['phone']; ?>">

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $donor['province'] . ', ' . $donor['municipality'] . ', ' . $donor['district'] . ', ' . $donor['tole'] . ', ' . $donor['ward']; ?>">

            <button type="button" id="saveButton">Save Changes</button>
        </form>
    </div>
</section>

<!-- Custom Popup Modal -->
<div id="customPopup" class="custom-popup">
    <div class="popup-content">
        <span id="popupMessage"></span>
        <button id="closePopup">Close</button>
    </div>
</div>

<script>
document.getElementById('editButton').addEventListener('click', function() {
    document.getElementById('profileView').style.display = 'none';
    document.getElementById('profileForm').style.display = 'block';
});

document.getElementById('saveButton').addEventListener('click', function() {
    var d_id = document.getElementById('d_id').value;
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var address = document.getElementById('address').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'backend/update_donor.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('popupMessage').textContent = 'Profile updated successfully.';
            // Update the profile view with the new data
            document.getElementById('viewName').textContent = name;
            document.getElementById('viewEmail').textContent = email;
            document.getElementById('viewPhone').textContent = phone;
            document.getElementById('viewAddress').textContent = address;

            document.getElementById('profileView').style.display = 'block';
            document.getElementById('profileForm').style.display = 'none';
        } else {
            document.getElementById('popupMessage').textContent = 'Error updating profile.';
        }
        document.getElementById('customPopup').style.display = 'block';
    };
    xhr.send('d_id=' + d_id + '&name=' + name + '&email=' + email + '&phone=' + phone + '&address=' + address + '&bio=' + bio);
});

document.getElementById('closePopup').addEventListener('click', function() {
    document.getElementById('customPopup').style.display = 'none';
});
</script>

<style>
.custom-popup {
    display: none;
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    z-index: 1000;
}
.popup-content {
    text-align: center;
}
#closePopup {
    margin-top: 10px;
}
</style>

<?php
include("includes/footer.php");
?>
