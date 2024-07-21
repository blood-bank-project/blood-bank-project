<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<section id="body5">
    <div class="rh">
        <h1 class="text-center">Request History</h1>
    </div>
    <?php
require_once "backend/connect.php";
$records_per_page = isset($_GET['records_per_page']) ? intval($_GET['records_per_page']) : 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $records_per_page;
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM request inner join donor on donor.d_id=request.donor_id where donor.d_id = $id  ORDER BY id DESC LIMIT ?, ?";
$query = $conn->prepare($sql);
$query->bind_param('ii', $offset, $records_per_page); 
$query->execute();
$result = $query->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);


$total_records_query = $conn->query("SELECT count(*) FROM request inner join donor on donor.d_id=request.donor_id where donor.d_id = $id  GROUP BY request.donor_id");
if ($total_records_query) {
    $result = $total_records_query->fetch_row();
    
    if ($result) {
        $total_records = $result[0];
    } else {
        $total_records = 0; 
    }
} else {
    echo "Query failed: " . $db_connection->error;
}
$total_pages = ceil($total_records / $records_per_page);

?>
    <div class="container">
        <div class="text">
            <p>Watch your blood request history here.</p><i class="fa-solid fa-hand-point-down"></i>
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
        <table class="table ">
            <thead class="bg bg-danger">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Blood Group</th>
                    <th>File</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
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
                    <td><?php echo $data['bgroup'] ;?></td>
                    <td><a href="<?php echo $data['file'] ;?>">Form</a></td>
                    <td><?php echo $data['message'];?></td>
                    <td><?php $date = date('Y-m-d'); echo $date;?></td>
                    <td>
                        <?php if($data['status'] === '0' ){
                             echo  "<span class='bg-warning text-light p-1'>Pending..</span>";
                            }
                            else if($data['status'] === '1'){
                            echo  "<span class='bg-success text-light p-1'>Managed</span>";
                            }
                            else if($data['status'] === '-1'){
                            echo "<span class='bg-danger text-light p-1'>Couldn't manage</span>";
                             } ?></td>
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
</section>

<?php
include("includes/footer.php");
?>