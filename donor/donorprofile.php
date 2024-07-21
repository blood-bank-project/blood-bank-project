<?php
include("includes/header.php");
include("includes/navbar.php");
require_once "backend/connect.php";

// Fetch donor data from the database
$d_id = $_GET['id']; // Example donor ID, you can change this as needed or fetch dynamically
$query = "SELECT * FROM donor WHERE d_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $d_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $donor = $result->fetch_assoc();
} else {
    echo "No donor found.";
    exit;
}
?>

<section id="donorProfile">
    <div class="profile-container">
        <h1>Donor Profile</h1>
        
        <div class="profile-view" id="profileView">
            <p><strong>Name:</strong> <span id="viewName"><?php echo $donor['firstname'] . ' ' . $donor['middlename'] . ' ' . $donor['lastname']; ?></span></p>
            <p><strong>Email:</strong> <span id="viewEmail"><?php echo $donor['email']; ?></span></p>
            <p><strong>Phone:</strong> <span id="viewPhone"><?php echo $donor['phone']; ?></span></p>
            <p><strong>Address:</strong> <span id="viewAddress"><?php echo $donor['province'] . ', ' . $donor['municipality'] . ', ' . $donor['district'] . ', ' . $donor['tole'] . ', ' . $donor['ward']; ?></span></p>
            <button id="editButton">Edit</button>
        </div>

        <form class="profile-form" id="profileForm" style="display: none;" method="post">
            <input type="hidden" id="d_id" name="d_id" value="<?php echo $donor['d_id']; ?>">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" value="<?php echo $donor['firstname']; ?>">
            <label for="mname">Middle Name:</label>
            <input type="text" id="mname" name="mname" value="<?php echo $donor['middlename']; ?>">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" value="<?php echo $donor['lastname']; ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $donor['email']; ?>">

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $donor['phone']; ?>">

            <label for="province">Province:</label>
            <input type="text" id="province" name="province" value="<?php echo $donor['province']; ?>">
            <label for="municipality">Municipality:</label>
            <input type="text" id="municipality" name="municipality" value="<?php echo $donor['municipality']; ?>">
            <label for="district">District:</label>
            <input type="text" id="district" name="district" value="<?php echo $donor['district']; ?>">
            <label for="tole">Tole:</label>
            <input type="text" id="tole" name="tole" value="<?php echo $donor['tole']; ?>">
            <label for="ward">Ward:</label>
            <input type="text" id="ward" name="ward" value="<?php echo $donor['ward']; ?>">

            <button type="submit" id="saveButton" name="submit">Save Changes</button>
        </form>
    </div>
</section>

<script>
document.getElementById('editButton').addEventListener('click', function() {
    document.getElementById('profileView').style.display = 'none';
    document.getElementById('profileForm').style.display = 'block';
});

document.getElementById('profileForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    var formData = new FormData(this);
    
    fetch('backend/update_donor.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text())
      .then(data => {
          console.log(data); 
          if (data.includes("Donor record updated successfully")) {
              location.reload();
          } else {
              alert("Error: " + data);
          }
      })
      .catch(error => console.error('Error:', error));
});
</script>

<?php
include("includes/footer.php");
?>
