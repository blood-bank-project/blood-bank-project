<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<div id="content">
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
</div>

<script>
$(document).ready(function() {
    $,
    ajax({
        url: "donation.php",
        method: 'POST',
        success: function(response) {
            $('#content').html(response);
        }
    })
});
</script>

<?php
include("includes/footer.php");
?>