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
                <h2 class="form-title">Fill the form for blood</h2>
                <hr />
                <div class="form-container">
                    <form action="backend/bloodrequest.php" method="post" enctype="multipart/form-data">
                        <div class="form-field">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="fname" placeholder="Your name">
                            </div>
                            <div class="form-group ">
                                <label for="phone">Phone</label>
                                <input type="integer" id="phone" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-field">
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
                                <label for="file">Requisition form</label>
                                <input type="file" id="file" name="file" placeholder="Hospital form">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" placeholder="Any disease?"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="submit" name="submit" id="button" class="btn btn-danger mt-4 ">
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