<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<div id="content">
    <section id="body1" class="content">
        <div class="dashboardtitle">
            <h2 class="title">Dashboard</h2>
        </div>
        <div class="container-fluid allstock">
            <?php
                    require_once "backend/connect.php";
$sql = "SELECT * FROM blood";
$row = $conn -> query($sql);
$data = mysqli_fetch_array($row);

?>
            <div class="row ">
                <div class="col-1 stock-detail">
                    <h2><?php echo $data['A+']; ?></h2>
                    <p>A+ (unit in ml)</p>
                </div>
                <div class="col-1 stock-detail">
                    <h2><?php echo $data['A-']; ?></h2>
                    <p>A- (unit in ml)</p>

                </div>
                <div class="col-1 stock-detail">
                    <h2><?php echo $data['B+']; ?></h2>
                    <p>B+ (unit in ml)</p>
                </div>
                <div class="col-1 stock-detail">
                    <h2><?php echo $data['B-']; ?></h2>
                    <p>B- (unit in ml)</p>
                </div>
                <div class="col-1 stock-detail">
                    <h2><?php echo $data['AB+']; ?></h2>
                    <p>AB+ (unit in ml)</p>

                </div>
                <div class="col-1 stock-detail">
                    <h2><?php echo $data['AB-']; ?></h2>
                    <p>AB- (unit in ml)</p>
                </div>
                <div class="col-1 stock-detail">
                    <h2><?php echo $data['O+']; ?></h2>
                    <p>O+ (unit in ml)</p>
                </div>
                <div class="col-1 stock-detail">
                    <h2><?php echo $data['O-']; ?></h2>
                    <p>O- (unit in ml)</p>
                </div>
            </div>
            <hr />
            <div class="row ">
                <?php
                     require_once "backend/connect.php";
                     $id = $_SESSION['user_id'];
$sql = "SELECT count(id) as totaldonation FROM donation inner join donor on donor.d_id=donation.user_id where donor.d_id = $id group by donation.user_id ";
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
                      $id = $_SESSION['user_id'];
$sql = "SELECT count(id) as totalpending FROM donation inner join donor on donor.d_id=donation.user_id where donor.d_id = $id and status='0' group by donation.user_id ";
$row = $conn->query($sql);
$data = mysqli_fetch_array($row);
?>
                    <h2><?php echo ($row != null && isset($data['totalpending'])) ? $data['totalpending'] : 0; ?></h2>
                    <p>Pending Request</p>

                </div>
                <div class="col-1 donor-detail">
                    <?php
                     require_once "backend/connect.php";
                      $id = $_SESSION['user_id'];
$sql ="SELECT count(id) as totalaccept FROM donation inner join donor on donor.d_id=donation.user_id where donor.d_id = $id and status='1' group by donation.user_id ";
$row = $conn->query($sql);
$data = mysqli_fetch_array($row);
?>
                    <h2><?php echo ($row != null && isset($data['totalaccept'])) ? $data['totalaccept'] : 0; ?></h2>
                    <p>Approved Request</p>
                </div>
                <div class="col-1 donor-detail">
                    <?php
                     require_once "backend/connect.php";
                      $id = $_SESSION['user_id'];
$sql = "SELECT count(id) as totalreject FROM donation inner join donor on donor.d_id=donation.user_id where donor.d_id = $id and status='-1' group by donation.user_id ";
$row = $conn->query($sql);
$data = mysqli_fetch_array($row);
?>
                    <h2><?php echo ($row != null && isset($data['totalreject'])) ? $data['totalreject'] : 0; ?></h2>
                    <p>Rejected Request
                </div>
            </div>

        </div>

    </section>
</div>
<?php
include("includes/footer.php");
?>