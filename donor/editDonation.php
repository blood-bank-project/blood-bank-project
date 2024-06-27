<?php
include("includes/header.php");
include("includes/navbar.php");
?>
<section id="body10">
    <?php
        require_once "backend/connect.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM donation WHERE id = '$id' ";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($result);
    ?>
    <div class="container form-container editDonation" id="donationForm">
        <h2 class="form-title">Donation form</h2>
        <hr />
        <div class="form container">
            <form action="" method="post">
                <div class="form-group">
                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name"
                            value="<?php echo $data['name'];?>">

                    </div>
                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="integer" id="phone" name="phone" placeholder="Phone"
                            value="<?php echo  $data['phone']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                            value="<?php echo  $data['email']; ?>">
                    </div>
                    <div class="field">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Address"
                            value="<?php echo  $data['address']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="field">
                        <label for="blood-group">Blood Group</label>
                        <select name="blood-group">
                            <option value="">Select blood group</option>
                            <option value="A+" <?php echo ($data['bloodgroup'] == 'A+')?'selected':'';?>>A+ve</option>
                            <option value="B+" <?php echo ($data['bloodgroup'] == 'B+')?'selected':'';?>>B+ve</option>
                            <option value="AB+" <?php echo ($data['bloodgroup'] == 'AB+')?'selected':'';?>>AB+ve
                            </option>
                            <option value="O+" <?php echo ($data['bloodgroup'] == 'O+')?'selected':'';?>>O+ve</option>
                            <option value="A-" <?php echo ($data['bloodgroup'] == 'A-')?'selected':'';?>>A-ve</option>
                            <option value="B-" <?php echo ($data['bloodgroup'] == 'B-')?'selected':'';?>>B-ve</option>
                            <option value="AB-" <?php echo ($data['bloodgroup'] == 'AB-')?'selected':'';?>>AB-ve
                            </option>
                            <option value="O-" <?php echo ($data['bloodgroup'] == 'O-')?'selected':'';?>>O-ve</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="gender">Gender</label>
                        <select name="gender">
                            <option value="">Gender</option>
                            <option value="Male" <?php echo ($data['gender'] == 'Male')?'selected':'';?>>Male</option>
                            <option value="female" <?php echo ($data['gender'] == 'female')?'selected':'';?>>Female
                            </option>
                            <option value="other" <?php echo ($data['gender'] == 'other')?'selected':'';?>>Other
                            </option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="unit">No. of Units</label>
                        <input type="integer" id="unit" name="unit" placeholder="How much?"
                            value=" <?php echo $data['bloodunit'];?>" required>
                    </div>
                </div>


                <div class="form-group2">
                    <label for="message">Disease(if any):</label>
                    <textarea id="message" name="message" rows="4"
                        placeholder="Any disease?"><?php echo $data['disease'];?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="submit" name="submit" class="btn btn-danger mt-4 ">
                </div>
            </form>
            <?php
            if(isset($_POST['submit'])){
                $id=$_GET['id'];
                 require_once "backend/connect.php";
                    $name=$_POST['name'];
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $bgroup=$_POST['blood-group'];
                    $unit=$_POST['unit'];
                    $gender=$_POST['gender'];
                    $message=$_POST['message'];

                   $sql = "UPDATE donation SET name='$name',phone='$phone',address='$address',bloodunit='$unit',gender='$gender',bloodgroup='$bgroup',email='$email', disease='$message' WHERE id=$id";
	  if($conn->query($sql)==TRUE)
	  {
	  	echo "<script>window.location='donation.php'</script>";

	  }else{
	  	echo 'ERROR';
	  }
    }
    ?>
        </div>
    </div>
</section>
<?php
include("includes/footer.php");
?>