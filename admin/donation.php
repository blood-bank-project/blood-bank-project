<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<?php
require_once "backend/connect.php";
$records_per_page = isset($_GET['records_per_page']) ? intval($_GET['records_per_page']) : 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $records_per_page;

$sql = "SELECT * FROM donation where status= 0 LIMIT ?, ?";
$query = $conn->prepare($sql);
$query->bind_param('ii', $offset, $records_per_page); 
$query->execute();
$result = $query->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);

$total_records_query = $conn->query("SELECT COUNT(*) FROM donation");
$total_records = $total_records_query->fetch_row()[0];
$total_pages = ceil($total_records / $records_per_page);
?>
<div class="content-wrapper">
    <section class="content" id="donation-section">
        <div class="container-fluid">
            <h2>Donation</h2>
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
            <table class="table table-secondary table-bordered border-light text-center">

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
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="11">Record not found.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
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


    </section>
</div>
<?php
include('includes/footer.php');
?>