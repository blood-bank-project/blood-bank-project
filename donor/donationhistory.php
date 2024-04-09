<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<section id="body3">
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

<?php
include("includes/footer.php");
?>