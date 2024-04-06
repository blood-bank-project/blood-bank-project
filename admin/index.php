<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">

    <section class="content" id="main-section">
        <div class="container-fluid">
            <h1>Dashboard</h1>
            <div class="row">
                <?php
                    require_once "backend/connect.php";
                    $sql = "SELECT * FROM blood";
                    $row = $conn -> query($sql);
                    $data = mysqli_fetch_array($row);

                ?>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['A+']; ?></h3>
                            <p>A+ (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['A-']; ?></h3>
                            <p>A- (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['B+']; ?></h3>
                            <p>B+ (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['B-']; ?></h3>
                            <p>B- (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['AB+']; ?></h3>
                            <p>AB+ (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['AB-']; ?></h3>
                            <p>AB- (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['O+']; ?></h3>
                            <p>O+ (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['O-']; ?></h3>
                            <p>O- (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Total Donor</p>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53</h3>

                            <p>Total Request</p>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Approved Request</p>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <?php
                    require_once "backend/connect.php";
                    $sql = "SELECT (`A+`+`A-`+`B+`+`B-`+`AB+`+`AB-`+`O+`+`O-`) AS total_sum FROM blood";
                    $row = $conn -> query($sql);
                    $data = mysqli_fetch_array($row);

                ?>
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['total_sum']; ?></h3>

                            <p>Total Blood Unit(in ml)</p>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content" id="donor-section" style="display: none;">
        <div class="container-fluid">
            <h2>Donors Information</h2>
            <table class="table table-secondary table-bordered border-light text-center">
                <thead class="bg bg-info ">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Blood Group</th>
                        <th>Contact No.</th>
                        <th>Action</th>
                <tbody id="donorTableBody">
                    <tr>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>
                            <a href=""> <button class="btn btn-primary">Edit</button></a>
                            <a href=""><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            </table>
        </div>
    </section>

    <section class="content" id="patient-section" style="display: none;">
        <div class="container-fluid">
            <h2>Patients Information</h2>
            <table class="table table-secondary table-bordered border-light text-center">
                <thead class="bg bg-info ">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Blood Group</th>
                        <th>Contact No.</th>
                        <th>Action</th>
                <tbody id="patientTableBody">
                    <tr>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                    </tr>
                </tbody>
            </table>
            </table>
        </div>
    </section>

    <section class="content" id="donation-section" style="display: none;">
        <div class="container-fluid">
            <h2>Donation history</h2>
            <table class="table table-secondary table-bordered border-light text-center">
                <thead class="bg bg-info ">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Blood Group</th>
                        <th>Contact No.</th>
                        <th>Action</th>
                <tbody id="donationTableBody">
                    <tr>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                    </tr>
                </tbody>
            </table>
            </table>
        </div>
    </section>

    <section class="content" id="request-section" style="display: none;">
        <div class="container-fluid">
            <h2>Blood Request</h2>
            <table class="table table-secondary table-bordered border-light text-center">
                <thead class="bg bg-info ">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Blood Group</th>
                        <th>Contact No.</th>
                        <th>Action</th>
                <tbody id="requestTableBody">
                    <tr>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                    </tr>
                </tbody>
            </table>
            </table>
        </div>
    </section>

    <section class="content" id="history-section" style="display: none;">
        <div class="container-fluid">
            <h2>Request History</h2>
            <table class="table table-secondary table-bordered border-light text-center">
                <thead class="bg bg-info ">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Blood Group</th>
                        <th>Contact No.</th>
                        <th>Action</th>
                <tbody id="historyTableBody">
                    <tr>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                        <td>hii</td>
                    </tr>
                </tbody>
            </table>
            </table>
        </div>
    </section>

    <section class="content" id="stock-section" style="display: none;">
        <div class="container-fluid">
            <h1>Blood Stock</h1>
            <div class="row">
                <?php
                    require_once "backend/connect.php";
                    $sql = "SELECT * FROM blood";
                    $row = $conn -> query($sql);
                    $data = mysqli_fetch_array($row);

                ?>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['A+']; ?></h3>
                            <p>A+ (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['A-']; ?></h3>
                            <p>A- (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['B+']; ?></h3>
                            <p>B+ (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['B-']; ?></h3>
                            <p>B- (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['AB+']; ?></h3>
                            <p>AB+ (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['AB-']; ?></h3>
                            <p>AB- (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['O+']; ?></h3>
                            <p>O+ (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $data['O-']; ?></h3>
                            <p>O- (Units in ml)</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h2 class="stock-head">Update blood unit</h2>
            <div class="form-group">
                <form action="backend/updateblood.php" method="post">
                    <select name="blood-group" id="bloodType">
                        <option value="">Select blood type</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    <input type="integer" name="bloodquantity" placeholder="Quantity (in ml)" id="quantityInput">
                    <button class="btn btn-success" name="submit" type="submit">Update</button>
                </form>
            </div>
    </section>
</div>

<?php
include('includes/footer.php');
?>