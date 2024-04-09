<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<section id="body1" class="content">
    <div class="container-fluid">
        <h2 class="title">Dashboard</h2>
        <?php
                    require_once "backend/connect.php";
$sql = "SELECT * FROM blood";
$row = $conn -> query($sql);
$data = mysqli_fetch_array($row);

?>
        <div class="row ">
            <div class="col-1 stock-detail bg-danger">
                <h2><?php echo $data['A+']; ?></h2>
                <p>A+ (unit in ml)</p>
            </div>
            <div class="col-1 stock-detail bg-danger">
                <h2><?php echo $data['A-']; ?></h2>
                <p>A- (unit in ml)</p>

            </div>
            <div class="col-1 stock-detail bg-danger">
                <h2><?php echo $data['B+']; ?></h2>
                <p>B+ (unit in ml)</p>
            </div>
            <div class="col-1 stock-detail bg bg-danger">
                <h2><?php echo $data['B-']; ?></h2>
                <p>B- (unit in ml)</p>
            </div>
            <div class="col-1 stock-detail bg bg-danger">
                <h2><?php echo $data['AB+']; ?></h2>
                <p>AB+ (unit in ml)</p>

            </div>
            <div class="col-1 stock-detail bg bg-danger">
                <h2><?php echo $data['AB-']; ?></h2>
                <p>AB- (unit in ml)</p>
            </div>
            <div class="col-1 stock-detail bg bg-danger">
                <h2><?php echo $data['O+']; ?></h2>
                <p>O+ (unit in ml)</p>
            </div>
            <div class="col-1 stock-detail bg bg-danger">
                <h2><?php echo $data['O-']; ?></h2>
                <p>O- (unit in ml)</p>
            </div>
        </div>
        <hr />
        <div class="row ">
            <?php
                     require_once "backend/connect.php";
$sql = "SELECT count(id) as totaldonation FROM donation";
$row = $conn->query($sql);
$data = mysqli_fetch_array($row);
?>
            <div class="col-1 donor-detail">
                <h2><?php echo $data['totaldonation'];?></h2>
                <p>Total Donation</p>
            </div>
            <div class="col-1 donor-detail">
                <?php
                     require_once "backend/connect.php";
$sql = "SELECT count(id) as totalpending FROM donation  WHERE status='0' ";
$row = $conn->query($sql);
$data = mysqli_fetch_array($row);
?>
                <h2><?php echo $data['totalpending'];?></h2>
                <p>Pending Request</p>

            </div>
            <div class="col-1 donor-detail">
                <?php
                     require_once "backend/connect.php";
$sql = "SELECT count(id) as totalaccept FROM donation  WHERE status='1' ";
$row = $conn->query($sql);
$data = mysqli_fetch_array($row);
?>

                <h2><?php echo $data['totalaccept'];?></h2>
                <p>Approved Request</p>
            </div>
            <div class="col-1 donor-detail">
                <?php
                     require_once "backend/connect.php";
$sql = "SELECT count(id) as totalreject FROM donation  WHERE status='-1' ";
$row = $conn->query($sql);
$data = mysqli_fetch_array($row);
?>

                <h2><?php echo $data['totalreject'];?></h2>
                <p>Rejected Request
            </div>
        </div>

    </div>
</section>

<section id="body2" class="content" style="display:none;">
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

<section id="body3" class="content" style="display:none;">
    <div class="container">
        <h2>Your Donation Details</h2>
        <table class="table">
            <?php 
                require_once "backend/connect.php";
$sql = "select * from donation";
$rows = $conn -> query($sql);
if($rows -> num_rows > 0) {
    ?>

            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Blood unit</th>
                <th>Blood group</th>
                <th>Gender</th>
                <th>Disease</th>
                <th>status</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $i = 0;
    while($data = mysqli_fetch_array($rows)) {
        ?>
                <tr>
                    <td><?php echo ++$i;?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['phone'] ;?></td>
                    <td><?php echo $data['email'] ;?></td>
                    <td><?php echo $data['address'] ;?></td>
                    <td><?php echo $data['bloodunit'] . ' Unit' ;?></td>
                    <td><?php echo $data['bloodgroup'] ;?></td>
                    <td><?php echo $data['gender'];?>
                    </td>
                    <td><?php echo $data['disease'] ;?></td>
                    <td><?php if($data['status'] === '0' ){
                        echo  "<span class='bg-warning text-light p-1'>Pending..</span>";
                    }
                        else if($data['status'] === '1'){
                            echo  "<span class='bg-success text-light p-1'>Approved</span>";
                        }
                        else if($data['status'] === '-1'){
                            echo "<span class='bg-danger text-light p-1'>Rejected</span>";
                        }

                    ?></td>
                    <td>
                        <?php
                        if($data['status'] != '1' && $data['status'] != '-1'){
                        ?>
                        <a href="backend/?id=<?php echo $data['id']; ?>"> <button class="btn btn-info">Edit</button></a>
                        <a href="href=backend/deletedonationhistory.php?id=<?php echo $data['id'];?>"><button
                                class="btn btn-danger">Delete</button></a>
                        <?php } ?>
                    </td>
                </tr>
                <?php  } ?>
                <?php

} else {
    echo "Record not found.";
}
?>
            </tbody>
        </table>
    </div>
</section>

<section id="body4" class="content" style="display:none;">
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

<section id="body5" class="content" style="display:none;">
    <div class="container">
        <h1 class="text-center">Request History</h1>
        <table class="table ">
            <thead class="bg bg-danger">
                <td>S.No</td>
                <td>Donation Id</td>
                <td>Units(in ml)</td>
                <td>Status</td>
                <td>Action</td>
            </thead>
            <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tbody>
        </table>
    </div>
</section>

<section id="body6" class="content" style="display:none;"></section>
<?php
include("includes/footer.php");
?>