<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <h1 class="text-center p-2" style="color:#666; ">Get Data of Donation</h1>

        <div class="container">
            <?php
    require_once "backend/connect.php";

    // Initialize filter variables
    $blood_group = isset($_GET['blood_group']) ? $_GET['blood_group'] : '';
    $date = isset($_GET['date']) ? $_GET['date'] : '';

    // Set pagination variables
    $records_per_page = isset($_GET['records_per_page']) ? intval($_GET['records_per_page']) : 10;
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $offset = ($page - 1) * $records_per_page;

    // Prepare SQL query with filters
    $sql = "SELECT * FROM donation where date='$date' AND bloodgroup = '$blood_group' ";

    // Add filter conditions
    if (!empty($blood_group)) {
        $sql .= " AND bloodgroup = ?";
    }
    if (!empty($date)) {
        $sql .= " AND DATE(date) = ?";
    }

    $sql .= " LIMIT ?, ?";
    $query = $conn->prepare($sql);

    // Bind parameters for the query
    if (!empty($blood_group) && !empty($date)) {
        $query->bind_param('ssii', $blood_group, $date, $offset, $records_per_page);
    } elseif (!empty($blood_group)) {
        $query->bind_param('sii', $blood_group, $offset, $records_per_page);
    } elseif (!empty($date)) {
        $query->bind_param('si', $date, $offset, $records_per_page);
    } else {
        $query->bind_param('ii', $offset, $records_per_page);
    }

    $query->execute();
    $result = $query->get_result();
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    // Count total records for pagination
    $total_records_query = $conn->query("SELECT COUNT(*) FROM donation WHERE date='$date' AND bloodgroup = '$blood_group' ");
    $total_records = $total_records_query->fetch_row()[0];
    $total_pages = ceil($total_records / $records_per_page);
    ?>

            <section class="content" id="donation-section">
                <div class="container-fluid">
                    <div class="container">
                        <form method="GET" action="">
                            <input type="hidden" name="records_per_page" value="<?php echo $records_per_page; ?>">
                            <input type="hidden" name="page" value="<?php echo $page; ?>">
                            <div class="filter">
                                <div>
                                    <select class="form-select" id="select" name="blood_group"
                                        aria-label="Default select example">
                                        <option value="" <?php echo empty($blood_group) ? 'selected' : ''; ?>>Select
                                            Blood Group</option>
                                        <option value="A+" <?php echo $blood_group == 'A+' ? 'selected' : ''; ?>>A+
                                        </option>
                                        <option value="A-" <?php echo $blood_group == 'A-' ? 'selected' : ''; ?>>A-
                                        </option>
                                        <option value="B+" <?php echo $blood_group == 'B+' ? 'selected' : ''; ?>>B+
                                        </option>
                                        <option value="B-" <?php echo $blood_group == 'B-' ? 'selected' : ''; ?>>B-
                                        </option>
                                        <option value="AB+" <?php echo $blood_group == 'AB+' ? 'selected' : ''; ?>>AB+
                                        </option>
                                        <option value="AB-" <?php echo $blood_group == 'AB-' ? 'selected' : ''; ?>>AB-
                                        </option>
                                        <option value="O+" <?php echo $blood_group == 'O+' ? 'selected' : ''; ?>>O+
                                        </option>
                                        <option value="O-" <?php echo $blood_group == 'O-' ? 'selected' : ''; ?>>O-
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <input id="date" type="date" class="form-control" name="date"
                                        value="<?php echo $date; ?>">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-filter"></i>
                                        Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pdf_excel">
                        <div id="pdf">
                            <form method="GET" action="backend/export_pdf.php">
                                <input type="hidden" name="blood_group" value="<?php echo $blood_group; ?>">
                                <input type="hidden" name="date" value="<?php echo $date; ?>">
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i> Export
                                    to
                                    PDF</button>
                            </form>
                        </div>
                        <div id="excell">
                            <form method="GET" action="backend/export_excel.php">
                                <input type="hidden" name="blood_group" value="<?php echo $blood_group; ?>">
                                <input type="hidden" name="date" value="<?php echo $date; ?>">
                                <button class="btn btn-success" name="export"> <i class="fa-solid fa-file-excel"></i>
                                    Export
                                    to Excel </button>

                            </form>
                        </div>

                    </div>
                    <div class="table-search">
                        <div class="pagination-options">
                            <label for="rows-per-page">Rows per page:</label>
                            <select id="rows-per-page" onchange="changeRows(this.value)">
                                <option value="5" <?php if ($records_per_page == 5) echo 'selected'; ?>>5</option>
                                <option value="10" <?php if ($records_per_page == 10) echo 'selected'; ?>>10</option>
                                <option value="20" <?php if ($records_per_page == 20) echo 'selected'; ?>>20</option>
                                <option value="50" <?php if ($records_per_page == 50) echo 'selected'; ?>>50</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center w-80 ms-3 mt-1">
                            <thead>
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
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody id="donationTableBody">
                                <?php if ($rows): ?>
                                <?php $i = $offset; ?>
                                <?php foreach ($rows as $data): ?>
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><?php echo $data['phone']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['address']; ?></td>
                                    <td><?php echo $data['bloodunit'] . ' Unit'; ?></td>
                                    <td><?php echo $data['bloodgroup']; ?></td>
                                    <td><?php echo $data['gender']; ?></td>
                                    <td><?php echo $data['disease']; ?></td>
                                    <td><?php $date = date('Y-m-d'); echo $date;?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                                <tr>
                                    <td colspan="10">Record not found.</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php if ($total_pages > 1): ?>
                    <div class="pagination">
                        <?php if ($page > 1): ?>
                        <a
                            href="?page=1&records_per_page=<?php echo $records_per_page; ?>&blood_group=<?php echo $blood_group; ?>&date=<?php echo $date; ?>">&laquo;
                            First</a>
                        <a
                            href="?page=<?php echo ($page - 1); ?>&records_per_page=<?php echo $records_per_page; ?>&blood_group=<?php echo $blood_group; ?>&date=<?php echo $date; ?>">&lsaquo;
                            Previous</a>
                        <?php endif; ?>
                        <?php for ($i = max(1, $page - 5); $i <= min($page + 5, $total_pages); $i++): ?>
                        <a href="?page=<?php echo $i; ?>&records_per_page=<?php echo $records_per_page; ?>&blood_group=<?php echo $blood_group; ?>&date=<?php echo $date; ?>"
                            <?php if ($i === $page) echo 'class="active"'; ?>><?php echo $i; ?></a>
                        <?php endfor; ?>
                        <?php if ($page < $total_pages): ?>
                        <a
                            href="?page=<?php echo ($page + 1); ?>&records_per_page=<?php echo $records_per_page; ?>&blood_group=<?php echo $blood_group; ?>&date=<?php echo $date; ?>">Next
                            &rsaquo;</a>
                        <a
                            href="?page=<?php echo $total_pages; ?>&records_per_page=<?php echo $records_per_page; ?>&blood_group=<?php echo $blood_group; ?>&date=<?php echo $date; ?>">Last
                            &raquo;</a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </section>
        </div>

        <script>
        function changeRows(value) {
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set('records_per_page', value);
            urlParams.set('page', 1); // Reset to the first page
            window.location.search = urlParams.toString();
        }
        </script>

    </div>
</div>
<?php
    include('includes/footer.php');
?>