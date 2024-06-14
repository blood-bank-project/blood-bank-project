<?php
include("includes/header.php");
include("includes/navbar.php");
?>
<section id="body7">
    <div class="container-fluid" style="padding: 0px;">
        <h1>Events</h1>

        <div class="event-card">
            <?php 
            require_once "backend/connect.php";
                $sql= "SELECT * FROM event";
                $rows=$conn->query($sql);
                if($rows -> num_rows > 0) {
                    ?>
            <?php
            while($data=mysqli_fetch_array($rows)){
                ?>
            <div class="event-details">
                <h3 class="event-name"><?php echo $data['name']; ?></h3>
                <p class="event-date"><b>Date:</b> <?php echo $data['date']; ?></p>
                <p class="event-location"><b>Location: </b><?php echo $data['location']; ?></p>
                <p class="event-description"><b>Description:</b> <?php echo $data['description']; ?></p>
                <!-- Add more event details here -->
                <!-- <a href="event_details.php?id=<?php echo $event['id']; ?>" class="btn btn-primary">Learn More</a> -->
            </div>
            <?php  } ?>
            <?php
            }else{
                echo "no events found!";
            }
            ?>
        </div>


    </div>
</section>
<?php
include("includes/footer.php");
?>