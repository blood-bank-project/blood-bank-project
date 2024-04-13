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

$sql = "SELECT * FROM patient ORDER BY p_id DESC LIMIT ?, ?";
$query = $conn->prepare($sql);
$query->bind_param('ii', $offset, $records_per_page); 
$query->execute();
$result = $query->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);

$total_records_query = $conn->query("SELECT COUNT(*) FROM patient");
$total_records = $total_records_query->fetch_row()[0];
$total_pages = ceil($total_records / $records_per_page);
?>
    <section class="content" id="patient-section">
        <div class="container-fluid">
            <h2>Patients Information</h2>
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
            <table class=" table-bordered border-light text-center">

                <thead>
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
                <tbody id="patientTableBody">
                    <?php
                 if ($rows): ?>
                    <?php $i = ($page - 1) * $records_per_page; ?>
                    <?php foreach ($rows as $data): ?>
                    <tr>
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
                            <a href=""><button class="btn btn-danger">Delete</button></a>
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
</div>


<?php
include('includes/footer.php');
?>