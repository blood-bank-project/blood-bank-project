<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="addadminhead">
            <h1 class="text-center p-2" style="color:#666;">Add Admin</h1>
        </div>
        <div id="addAdmin">
            <div class="form-container">
                <form action="backend/add_admin.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password:</label>
                        <input type="text" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div class="viewadmin">
            <h1 class="text-center p-2" style="color:#666;">Admin Data</h1>
            <?php
            require_once "backend/connect.php";

            $sql = "SELECT * FROM admin";
            $result = $conn->query($sql);
            ?>
            <table class="table table-striped table-bordered text-center w-30">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            $i = 1;
            if ($result->num_rows > 0) {
                
            while ($data = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['password']; ?></td>
                        <td><button class="btn btn-danger"
                                onclick="deleteAdmin(<?php echo $data['aid']; ?>)">Delete</button>
                        </td>
                    </tr>
                    <?php
            }
            } else {
            ?>
                    <tr>
                        <td colspan="4">No data found</td>
                    </tr>
                    <?php
            }
            ?>
                </tbody>
            </table>


        </div>
        <div class="confirmationPopup" id="confirmationPopup">
            <div id="confirmationBox">
                <p>Are you sure you want to delete?</p>
                <button class="btn btn-success" id="confirmDelete">Yes</button>
                <button id="cancelDelete" class="btn btn-danger">No</button>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>