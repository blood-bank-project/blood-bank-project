<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <section class="content" id="donation-section">
        <div class="container-fluid">
            <h2>Donation</h2>
            <table class="table table-secondary table-bordered border-light text-center">
                <?php 
                require_once "backend/connect.php";
$sql = "select * from donation where status = '0'";
$rows = $conn -> query($sql);
    ?>

                <thead class="bg bg-info ">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Blood unit</th>
                        <th>Blood group</th>
                        <th>Gender</th>
                        <th>Disease</th>
                        <th>Action</th>
                </thead>
                <tbody id="donationTableBody">
                    <?php
                    if($rows -> num_rows > 0) {
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
                        <td><a href="backend/acceptdonation.php?id=<?php echo $data['id']; ?>"> <button
                                    class="btn btn-success">Accept</button></a>
                            <a href="backend/rejectdonation.php?id=<?php echo $data['id'];?>"><button
                                    class="btn btn-danger">Reject</button></a>
                        </td>
                        <!-- <div id="confirmationPopup">
                            <div id="confirmationBox">
                                <h2>Are you sure you want to delete?</h2>
                                <button id="confirmDeleteButton">Yes</button>
                                <button id="cancelDeleteButton">No</button>
                            </div>
                        </div> -->
                    </tr>
                    <?php  } ?>
                    <?php

}
?>
                </tbody>
            </table>
            </table>
        </div>


    </section>
</div>
<?php
include('includes/footer.php');
?>