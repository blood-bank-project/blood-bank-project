<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <section>

        <div id="edithotline">
            <?php
                $id=$_GET['id'];
                require_once "backend/connect.php";
                $sql = "SELECT * FROM hotline WHERE h_id=$id ";
                $result = mysqli_query($conn, $sql);
                $data = mysqli_fetch_array($result);
            
        ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Blood Bank Name</label>
                    <input type="text" class="form-control" value="<?php echo $data['name'];?>" name="bname"
                        placeholder="Blood Bank name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Blood Bank Address</label>
                    <input type="text" class="form-control" name="location" value="<?php echo $data['location'];?>"
                        placeholder="Location">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone 1</label>
                    <input type="number" class="form-control" name="phone1" value="<?php echo $data['phone1'];?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone 2</label>
                    <input type="number" class="form-control" name="phone2" value="<?php echo $data['phone2'];?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone 3</label>
                    <input type="number" class="form-control" name="phone3" value="<?php echo $data['phone3'];?>">
                </div>

                <div class="form-group">
                    <input type="submit" value="submit" name="submit" class="btn btn-danger ">
                </div>
            </form>
            <?php
if(isset($_POST['submit']))
{
	$id=$_GET['id'];
	require_once "backend/connect.php";
	$name=$_POST['bname'];
	$location=$_POST['location'];
	$p1=$_POST['phone1'];
	$p2=$_POST['phone2'];
	$p3=$_POST['phone3'];

	$sql = "UPDATE hotline SET name='$name',location='$location',phone1='$p1',phone2='$p2',phone3='$p3' WHERE h_id=$id";
	  if($conn->query($sql)==TRUE)
	  {
	  	echo "<script>window.location='hotline.php'</script>";

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