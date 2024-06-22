<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <section>
        <div id="editeventForm">
            <?php
            $id=$_GET['id'];
            require_once "backend/connect.php";
            $sql = "SELECT * FROM event WHERE e_id=$id ";
            $row = $conn->query($sql);
            $data = mysqli_fetch_array($row);
            ?>
            <form action="" method="post">
                <div class="label row">
                    <div class="mb-3">
                        <label class="form-label">Event Name</label>
                        <input type="text" class="form-control" value="<?php echo $data['name'];?>" name="ename"
                            placeholder="Event name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Event Date</label>
                        <input type="date" class="form-control" value="<?php echo $data['date'];?>" name="date">
                    </div>

                </div>
                <div class="label row">
                    <div class="mb-3">
                        <label class="form-label">Event Location</label>
                        <input type="text" class="form-control" value="<?php echo $data['location'];?>" name="location">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Event Organizer</label>
                        <input type="text" class="form-control" value="<?php echo $data['organizer'];?>"
                            name="organizer">
                    </div>
                </div>
                <div class="label row">
                    <div class="mb-3">
                        <label class="form-label">Conatct Person</label>
                        <input type="text" class="form-control" value="<?php echo $data['c_person'];?>" name="person">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conatct Phone</label>
                        <input type="number" class="form-control" value="<?php echo $data['phone'];?>" name="phone">
                    </div>
                </div>
                <div class="label row">
                    <div class="mb-3">
                        <label class="form-label">Conatct Email</label>
                        <input type="email" class="form-control" value="<?php echo $data['email'];?>" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="">Select event status</option>
                            <option value="-1" <?php echo ($data['status'] == -1)?'selected':'';?>>Cancelled</option>
                            <option value="0" <?php echo ($data['status'] == 0)?'selected':'';?>>Upcoming</option>
                            <option value="1" <?php echo ($data['status'] == 1)?'selected':'';?>>Completed</option>
                        </select>
                    </div>
                </div>
                <div class="label">
                    <div class="mb-3">
                        <label class="form-label">Description (In Brief)</label>
                        <textarea class="form-control" rows="3" name="message"
                            value="<?php echo $data['description']; ?>"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="submit" name="submit" class="btn btn-danger ">
                </div>
            </form>
            <?php
            if(isset($_POST['submit'])){
                $id=$_GET['id'];
                 require_once "backend/connect.php";
                    $name=$_POST['ename'];
                    $location=$_POST['location'];
                    $date=$_POST['date'];
                    $organizer=$_POST['organizer'];
                    $person=$_POST['person'];
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];
                    $status=$_POST['status'];
                    $message=$_POST['message'];

                   $sql = "UPDATE event SET name='$name',location='$location',date='$date',organizer='$organizer',c_person='$person',phone='$phone',email='$email', status='$status', description='$message' WHERE e_id=$id";
	  if($conn->query($sql)==TRUE)
	  {
	  	echo "<script>window.location='event.php'</script>";

	  }else{
	  	echo 'ERROR';
	  }
             }
            ?>
        </div>
    </section>
</div>

<?php   
include('includes/footer.php');
?>