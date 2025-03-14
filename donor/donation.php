<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<section id="body2">
    <div class="title1">
        <h2>Want to donate Blood?</h2>
        <button id="donateButton" class="btn btn-outline-danger m-2">Donate Now</button>
    </div>

    <div class="container form-container donationForm" id="donationForm">
        <i class="fa-solid fa-xmark" id="closebutton"></i>
        <h2 class="form-title">Donation form</h2>
        <hr />
        <div class="form container">
            <form action="backend/donationregister.php" method="post">
                <div class="form-group">
                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="fname" placeholder="Your name">
                    </div>
                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="integer" id="phone" name="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="field">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Address">
                    </div>
                </div>

                <div class="form-group">
                    <div class="field">
                        <label for="blood-group">Blood Group</label>
                        <select name="blood-group">
                            <option value="">Select blood group</option>
                            <option value="A+">A+ve</option>
                            <option value="B+">B+ve</option>
                            <option value="AB+">AB+ve</option>
                            <option value="O+">O+ve</option>
                            <option value="A-">A-ve</option>
                            <option value="B-">B-ve</option>
                            <option value="AB-">AB-ve</option>
                            <option value="O-">O-ve</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="gender">Gender</label>
                        <select name="gender">
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="unit">No. of Units</label>
                        <input type="integer" id="unit" name="unit" placeholder="How much?" required>
                    </div>
                </div>


                <div class="form-group2">
                    <label for="message">Disease(if any):</label>
                    <textarea id="message" name="message" rows="4" placeholder="Any disease?"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="submit" name="submit" class="btn btn-danger mt-4 ">
                </div>
            </form>
        </div>
    </div>

</section>


<?php
require_once "backend/connect.php";
$records_per_page = isset($_GET['records_per_page']) ? intval($_GET['records_per_page']) : 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $records_per_page;
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM donation inner join donor on donor.d_id=donation.user_id where donor.d_id = $id  ORDER BY id DESC LIMIT ?, ?";
$query = $conn->prepare($sql);
$query->bind_param('ii', $offset, $records_per_page); // 'ii' indicates two integer parameters
$query->execute();
$result = $query->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);

// Count total records
$total_records_query = $conn->query("SELECT COUNT(id) FROM donation  inner join donor on donor.d_id=donation.user_id where donor.d_id = $id group by donation.user_id");
if ($total_records_query) {
    $result = $total_records_query->fetch_row();
    
    if ($result) {
        $total_records = $result[0];
    } else {
        $total_records = 0; // or handle appropriately
    }
} else {
    // Handle the case where the query failed
    echo "Query failed: " . $db_connection->error;
}
$total_pages = ceil($total_records / $records_per_page);
?>
<section id="body3">
    <div class="container donationstat">
        <div class="title">
            <h2>Your Donation Status</h2>
        </div>
        <div class="table-search">
            <div class="pagination-options">
                <label for="rows-per-page">Rows per page:</label>
                <select id="rows-per-page" onchange="changeRowsPerPage(this.value)">
                    <option value="5" <?php if ($records_per_page == 5) echo 'selected'; ?>>5</option>
                    <option value="10" <?php if ($records_per_page == 10) echo 'selected'; ?>>10</option>
                    <option value="20" <?php if ($records_per_page == 20) echo 'selected'; ?>>20</option>
                    <option value="50" <?php if ($records_per_page == 50) echo 'selected'; ?>>50</option>
                </select>
            </div>
            <div class="search-container">
                <input type="text" id="search-input" oninput="searchTable()" placeholder="Search...">
            </div>
        </div>
        <table class="table">

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
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                 if ($rows): ?>
                <?php $i = ($page - 1) * $records_per_page; ?>
                <?php foreach ($rows as $data): ?>
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
                    <td><?php if($data['status'] === 0 ){
                        echo  "<span class='bg-warning text-light p-1'>Pending..</span>";
                    }
                        else if($data['status'] === 1){
                            echo  "<span class='bg-success text-light p-1'>Approved</span>";
                        }
                        else if($data['status'] === -1){
                            echo "<span class='bg-danger text-light p-1'>Rejected</span>";
                        }

                    ?></td>
                    <td>
                        <?php
                        if($data['status'] != 1 && $data['status'] != -1) : ?>
                        <div class=" text-end action">
                            <li class="dropdown-item "> <a href="editDonation.php?id=<?php echo $data['id']; ?>">
                                    <button class="btn btn-info">Edit</button></a>
                                <button class="btn btn-danger" onclick="return deletePopup()">Delete</button>
                        </div>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="11">Record not found.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php if ($total_pages > 1){ ?>
        <div class="pagination">
            <?php if ($page > 1){ ?>
            <a href="?page=1&records_per_page=<?php echo $records_per_page; ?>">&laquo; First</a>
            <a href="?page=<?php echo ($page - 1); ?>&records_per_page=<?php echo $records_per_page; ?>">&lsaquo;
                Previous</a>
            <?php } ?>
            <?php for ($i = max(1, $page - 5); $i <= min($page + 5, $total_pages); $i++){ ?>
            <a href="?page=<?php echo $i; ?>&records_per_page=<?php echo $records_per_page; ?>"
                <?php if ($i === $page) echo 'class="active"'; ?>><?php echo $i; ?></a>
            <?php } ?>
            <?php if ($page < $total_pages){ ?>
            <a href="?page=<?php echo ($page + 1); ?>&records_per_page=<?php echo $records_per_page; ?>">Next
                &rsaquo;</a>
            <a href="?page=<?php echo $total_pages; ?>&records_per_page=<?php echo $records_per_page; ?>">Last
                &raquo;</a>
            <?php } ?>
        </div>
        <?php } ?>

    </div>

    <div class="confirmationPopup" id="confirmationPopup">
        <div id="confirmationBox">
            <P>Are you sure you want to delete?</P>
            <a href="backend/deletedonationhistory.php?id=<?php echo $data['id'];?>"><button class="btn btn-success"
                    id="confirmDelete">Yes</button></a>
            <button id="cancelDelete" class="btn btn-danger">No</button>
        </div>
    </div>

</section>

<?php
include("includes/footer.php");
?>