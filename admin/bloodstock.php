<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">

    <section class="content" id="stock-section">
        <div class="container-fluid">
            <h1 class="text-center p-2" style="color:#666;">Blood Stock</h1>
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
        </div>
    </section>
</div>

<?php
include('includes/footer.php');
?>