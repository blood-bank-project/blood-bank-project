<?php
include("includes/header.php");
include("includes/navbar.php");
?>
<section id="body7">
    <div class="session-title">
        <h1>Upcomming Donation Events</h2>
    </div>
    <div id="blog" class="blog-container contaienr-fluid">
        <div class="container">
            <div class="text">
                <p>Check donation events here.</p><i class="fa-solid fa-hand-point-down"></i>
            </div>
            <div id="card">
                <div class="container" id="card-container">
                    <?php
                require_once "backend/connect.php";

                $sql = "SELECT * FROM event ORDER BY e_id DESC ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($data = $result->fetch_object()) {
                    ?>
                    <div class="card">
                        <h2><?php echo $data->name; ?></h2>
                        <p>Location: <?php echo $data->location; ?></p>
                        <p>Date: <?php echo $data->date;?></p>
                        <p>Organizer: <?php echo $data->organizer;?></p>
                        <p>Email: <?php echo $data->email;?></p>
                        <p>Status: <?php 
                                    if($data->status == -1){
                                        echo "cancelled";
                                    }else if($data->status == 0){
                                        echo "upcoming";
                                    }if($data->status == 1){
                                        echo "completed";
                                    }
                                    ?>
                        </p>
                        <p>Description: <?php echo $data->description;?></p>
                    </div>
                    <?php
            }
                 } else {
             echo "<p>No Event available.</p>";
            }
            ?>
                </div>
            </div>
        </div>
</section>
<?php
include("includes/footer.php");
?>