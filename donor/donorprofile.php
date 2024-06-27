<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<section id="donorProfile">
    <div class="profile-container">
        <h1>Donor Profile</h1>
        <div class="profile-picture">
            <img src="default-profile.png" alt="Profile Picture" id="profileImage">
            <input type="file" id="uploadImage" accept="image/*" style="display: none;">
        </div>
        <>php
            ?>
            <div class="profile-view" id="profileView">
                <p><strong>Name:</strong> <span id="viewName">John Doe</span></p>
                <p><strong>Email:</strong> <span id="viewEmail">john.doe@example.com</span></p>
                <p><strong>Phone:</strong> <span id="viewPhone">123-456-7890</span></p>
                <p><strong>Address:</strong> <span id="viewAddress">123 Main St, City, Country</span></p>
                <p><strong>Bio:</strong> <span id="viewBio">Donor bio goes here...</span></p>
                <button id="editButton">Edit</button>
            </div>
            <form class="profile-form" id="profileForm" style="display: none;">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="John Doe">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="john.doe@example.com">

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" value="123-456-7890">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="123 Main St, City, Country">

                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio">Donor bio goes here...</textarea>

                <button type="button" id="saveButton">Save Changes</button>
            </form>
    </div>
</section>
<?php
include("includes/footer.php");
?>