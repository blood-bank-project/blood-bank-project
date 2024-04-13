<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <div id="content">
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
                                <h3><?php echo $data['A+']; ?>
                                </h3>
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
                                <h3><?php echo $data['A-']; ?>
                                </h3>
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
                                <h3><?php echo $data['B+']; ?>
                                </h3>
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
                                <h3><?php echo $data['B-']; ?>
                                </h3>
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
                                <h3><?php echo $data['AB+']; ?>
                                </h3>
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
                                <h3><?php echo $data['AB-']; ?>
                                </h3>
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
                                <h3><?php echo $data['O+']; ?>
                                </h3>
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
                                <h3><?php echo $data['O-']; ?>
                                </h3>
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
                                <?php
                            require_once "backend/connect.php";
$sql = "SELECT count(d_id) as totaldonor FROM donor";
$row = $conn->query($sql);
$data = mysqli_fetch_array($row);
?>
                                <h3><?php echo $data['totaldonor'];?>
                                </h3>

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
                                <h3><?php echo $data['total_sum']; ?>
                                </h3>

                                <p>Total Blood Unit(in ml)</p>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
     include('includes/footer.php');
    ?>