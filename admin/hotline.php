<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <section id="contact">
        <div class="contactButton">
            <button id="addContact" class="btn btn-primary m-4">Add Contact</button>
        </div>
        <div id="contactForm">
            <i class="fa-solid fa-xmark" id="closebutton"></i>
            <form action="backend/addhotline.php" method="post">
                <div class="form-group">
                    <label for="name">Blood Bank Name</label>
                    <input type="text" id="bname" name="bname" placeholder="Blood Bank name" required>
                </div>
                <div class="form-group">
                    <label for="location">Blood Bank Address</label>
                    <input type="text" id="location" name="location" placeholder="Location">
                </div>
                <div class="form-group">
                    <label for="phone">Phone 1</label>
                    <input type="tel" name="phone1">
                </div>
                <div class="form-group">
                    <label for="phone">Phone 2</label>
                    <input type="tel" name="phone2">
                </div>
                <div class="form-group">
                    <label for="phone">Phone 2</label>
                    <input type="tel" name="phone3">
                </div>

                <div class="form-group">
                    <input type="submit" value="submit" name="submit" class="btn btn-danger ">
                </div>
            </form>
        </div>
    </section>


    <?php
require_once "backend/connect.php";
$records_per_page = isset($_GET['records_per_page']) ? intval($_GET['records_per_page']) : 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $records_per_page;

$sql = "SELECT * FROM hotline LIMIT ?, ?";
$query = $conn->prepare($sql);
$query->bind_param('ii', $offset, $records_per_page); 
$query->execute();
$result = $query->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);

$total_records_query = $conn->query("SELECT COUNT(*) FROM hotline");
$total_records = $total_records_query->fetch_row()[0];
$total_pages = ceil($total_records / $records_per_page);

?>
    <section id="eventStat">
        <div class="container eventStat">
            <h2>Hotlines</h2>
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
            <table class="table table-bordered border-dark text-center">

                <thead>
                    <th>Id</th>
                    <th>Blood Bank Name</th>
                    <th>Blood Bank Location</th>
                    <th>Phone</th>
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
                        <td><?php echo $data['location']; ?></td>
                        <td><?php echo $data['phone1'].','.$data['phone2'].','.$data['phone3'];?></td>

                        <td>
                            <a href=""> <button class="btn btn-info">Edit</button></a>
                            <a href="backend/deletehotline.php?id=<?php echo $data['h_id']; ?>"><button
                                    class="btn btn-danger">Delete</button></a>
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

</div>
<?php
        include('includes/footer.php');
    ?>