<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<section id="body2">
    <div class="title1">
        <h2>Want to donate Blood?</h2>
        <p>give blood, <span>save life</span></p>
    </div>
    <div class="container-fluid">
        <div class="row donation m-4 ">
            <div class="col-md-6">
                <div class="container form-container">
                    <h2 class="form-title">Donation form</h2>
                    <hr />
                    <div class="form container">
                        <form action="backend/donationregister.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="fname">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="integer" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="unit">No. of Units</label>
                                <input type="integer" id="unit" name="unit" required>
                            </div>
                            <div class="option">
                                <div class="form-group">
                                    <label for="blood-group">Blood Group</label>
                                    <select name="blood-group">
                                        <option value="">Select blood group</option>
                                        <option value="A+">A+ve</option>
                                        <option value="B+">B+ve</option>
                                        <option value="AB+">AB+ve</option>
                                        <option value="O+">O+ve</option>
                                        <option value="A-">A-ve</option>
                                        <option value="B-">B-ve</option>
                                        <option value="AB-">AB-ve</option>
                                        <option value="O-">O-ve</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender">
                                        <option value="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Disease(if any):</label>
                                <textarea id="message" name="message" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="submit" name="submit" class="btn btn-danger mt-4 ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- <p>if you are in emergency then contact us directly or contact other blood bank.
                        Here is the contact details. <a href="">Click Here.</a>
                    </p>
                    <div>
                        <button>Request for blood</button>
                    </div> -->
            </div>
        </div>
    </div>
</section>

<?php
include("includes/footer.php");
?>