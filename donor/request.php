<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<section id="body4">
    <div class="title">
        <h1 class="text-center m-4">Want Blood?</h1>
    </div>
    <div class="row request m-4 ">
        <div class="col-md-6">
            <div class="container form-container">
                <h2 class="form-title">Donation form</h2>
                <hr />
                <div class="form container">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="fname" name="fname">
                        </div>
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input type="integer" id="lname" name="lname">
                        </div>
                        <div class="form-group">
                            <label for="unit">No. of Units (in ml)</label>
                            <input type="integer" id="unit" name="unit" required>
                        </div>
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
                            <label for="blood-component">No. of Units:</label>
                            <select name="blood-component">
                                <option value="">Select blood component</option>
                                <option value="WBC">White Blood Cell</option>
                                <option value="RBC">Red Blood Cell</option>
                                <option value="Plasma">Plasma</option>
                                <option value="Platelet">Platelet</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message (In Brief)</label>
                            <textarea id="message" name="message" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="button" value="submit" class="btn btn-danger mt-4 ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 request-text">
            <p>if you are in emergency then contact us directly or contact other blood bank.
                Here is the contact details. <a href="">Click Here.</a>
            </p>
        </div>
    </div>
</section>

<?php
include("includes/footer.php");
?>