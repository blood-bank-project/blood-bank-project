<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">

    <section class="content" id="donor-section" >
        <div class="container-fluid">
            <h2 class="text-center">Donors Information</h2>
            <table class=" table-secondary table-bordered border-dark text-center ">
                <?php
        require_once "backend/connect.php";
$sql = "select * from donor";
$rows = $conn -> query($sql);
if($rows -> num_rows > 0) {
    ?>
                <thead class="bg bg-info">
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>dob</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>Occupation</th>
                        <th>Mobile number</th>
                        <th>tel. number</th>
                        <th>Nationality</th>
                        <th>State</th>
                        <th>District</th>
                        <th>Action</th>
                </thead>
                <tbody id="donorTableBody">
                    <?php
                $i = 0;
    while($data = mysqli_fetch_array($rows)) {
        ?>
                    <tr>
                        <td><?php echo ++$i;?></td>
                        <td><?php echo $data['firstname'];?>
                        </td>
                        <td><?php echo $data["lastname"];?>
                        </td>
                        <td><?php echo $data["dob"];?>
                        </td>
                        <td><?php echo $data["email"];?>
                        </td>
                        <td><?php echo $data["gender"];?>
                        </td>
                        <td><?php echo $data["bgroup"];?>
                        </td>
                        <td><?php echo $data["occupation"];?>
                        </td>
                        <td><?php echo $data["phone"];?>
                        </td>
                        <td><?php echo $data["tel"];?>
                        </td>
                        <td><?php echo $data["nationality"];?>
                        </td>
                        <td><?php echo $data["state"];?>
                        </td>
                        <td><?php echo $data["district"];?>
                        </td>
                        <td>
                            <a href=""> <button class="btn btn-primary">Edit</button></a>
                            <a href="backend/deletedonor.php?id=<?php echo $data['d_id']; ?>;"><button
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                        <!-- <div id="confirmationPopup">
                            <div id="confirmationBox">
                                <h5>Are you sure you want to delete?</h5>
                                <button
                                        id="confirmDeleteButton" class="btn btn-success">Yes</button>
                                <button id="cancelDeleteButton" class="btn btn-danger">No</button>
                            </div>
                        </div> -->
                    </tr>
                    <?php  } ?>

                    <?php

} else {
    echo "Record not found.";
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