<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <?php
require_once "backend/connect.php";
$records_per_page = isset($_GET['records_per_page']) ? intval($_GET['records_per_page']) : 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $records_per_page;

$sql = "SELECT * FROM request LIMIT ?, ?";
$query = $conn->prepare($sql);
$query->bind_param('ii', $offset, $records_per_page); 
$query->execute();
$result = $query->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);

$total_records_query = $conn->query("SELECT COUNT(*) FROM request");
$total_records = $total_records_query->fetch_row()[0];
$total_pages = ceil($total_records / $records_per_page);
?>
    <section class="content" id="donation-section">
        <div class="container-fluid">
            <h1 class="text-center p-2" style="color:#666;">Blood Request</h1>
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

            <div class="table-responsive">
                <table class=" table table-striped table-bordered text-center w-80 ms-3 mt-1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Blood Group</th>
                            <th>File</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
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
                            <td><?php echo $data['bgroup'] ;?></td>
                            <td>
                                <!-- <a href="backend/convert_to_pdf.php?file=<?php echo urlencode($data['file']); ?>" target="_blank">Form</a> -->
                                <a href="<?php echo $data['file']; ?>" target="_blank">Form</a>
                            </td>
                            <td><?php echo $data['message'];?></td>
                            <td><?php $date = date('Y-m-d'); echo $date;?></td>
                            <td><?php if($data['status'] === '0' ){
                             echo  "<span class='bg-warning text-light p-1'>Pending..</span>";
                            }
                            else if($data['status'] === '1'){
                            echo  "<span class='bg-success text-light p-1'>Managed</span>";
                            }
                            else if($data['status'] === '-1'){
                            echo "<span class='bg-danger text-light p-1'>Couldn't manage</span>";
                             } ?></td>
                            <td>
                                <?php if($data['status'] != '1' && $data['status'] != '-1') : ?>
                                <button class="btn btn-success"
                                    onclick="acceptRequest(<?php echo  $data['id'];?>)">Accept</button>

                                <button class="btn btn-danger"
                                    onclick="rejectRequest(<?php echo  $data['id'];?>)">Reject</button>
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
            </div>
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
        <!--accept-->
        <div class="confirmationPopup" id="confirmationPopup">
            <div id="confirmationBox">
                <P>Are you sure its managed?</P>
                <button class="btn btn-success" id="confirmAccept">Yes</button>
                <button id="cancelAccept" class="btn btn-danger">No</button>
            </div>
        </div>
        <!--reject-->
        <div class="confirmationPopup" id="confirmationPopupReject">
            <div id="confirmationBox">
                <P>Are you sure its not managed?</P>
                <button class="btn btn-success" id="confirmReject">Yes</button>
                <button id="cancelReject" class="btn btn-danger">No</button>
            </div>
        </div>

    </section>
</div>




<?php
include("includes/footer.php");
?>