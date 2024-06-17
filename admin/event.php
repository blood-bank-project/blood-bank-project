<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">

    <section id="event">
        <div class="eventButton">
            <button id="addEvent" class="btn btn-primary m-4">Add Event</button>
        </div>
        <div class="eventForm" id="eventForm">
            <i class="fa-solid fa-xmark" id="closebutton"></i>
            <form action="backend/addevent.php" method="post">
                <div class="label row">
                    <div class="form-group col">
                        <label for="name">Event Name</label>
                        <input type="text" id="ename" name="ename" placeholder="Event name" required>
                    </div>
                    <div class="form-group col">
                        <label for="dtae">Event Date</label>
                        <input type="date" id="date" name="date">
                    </div>
                </div>
                <div class="label row">
                    <div class="form-group col">
                        <label for="location">Event Location</label>
                        <input type="text" id="location" name="location" placeholder="Location">
                    </div>
                    <div class="form-group col">
                        <label for="organizer">Event Organizer</label>
                        <input type="text" id="organizer" name="organizer" placeholder="Organizer">
                    </div>
                </div>
                <div class="label row">
                    <div class="form-group col">
                        <label for="person">Conatct Person</label>
                        <input type="text" id="person" name="person" placeholder="whom to contact?">
                    </div>
                    <div class="form-group col">
                        <label for="phone">Contact Phone</label>
                        <input type="integer" id="phone" name="phone">
                    </div>
                </div>
                <div class="label row">
                    <div class="form-group col">
                        <label for="email">Contact Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-group col">
                        <label for="status">Status</label>
                        <select name="status">
                            <option value="">Select event status</option>
                            <option value="-1">Cancelled</option>
                            <option value="0">Upcoming</option>
                            <option value="1">Completed</option>
                        </select>
                    </div>
                </div>
                <div class="label">
                    <div class="form-group">
                        <label for="message">Description (In Brief)</label>
                        <textarea id="message" name="message" rows="4" cols="30"></textarea>

                    </div>
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

$sql = "SELECT * FROM event ORDER BY e_id DESC LIMIT ?, ?";
$query = $conn->prepare($sql);
$query->bind_param('ii', $offset, $records_per_page); 
$query->execute();
$result = $query->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);

$total_records_query = $conn->query("SELECT COUNT(*) FROM event");
$total_records = $total_records_query->fetch_row()[0];
$total_pages = ceil($total_records / $records_per_page);

?>
    <section id="eventStat">
        <div class="container eventStat">
            <h2>Event Status</h2>
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
                <table class="table table-bordered border-dark text-center">
                    <thead>
                        <th>Id</th>
                        <th>Event Name</th>
                        <th>Event date</th>
                        <th>Event location</th>
                        <th>Event organizer</th>
                        <th>Contact person</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Description</th>
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
                            <td><?php echo $data['date'] ;?></td>
                            <td><?php echo $data['location'] ;?></td>
                            <td><?php echo $data['organizer'] ;?></td>
                            <td><?php echo $data['c_person'] ;?></td>
                            <td><?php echo $data['phone'] ;?></td>
                            <td><?php echo $data['email'];?>
                            </td>
                            <td><?php if($data['status'] === '0' ){
                        echo  "<span class='bg-warning text-light p-1'>Upcoming</span>";
                    }
                        else if($data['status'] === '1'){
                            echo  "<span class='bg-success text-light p-1'>Completed</span>";
                        }
                        else if($data['status'] === '-1'){
                            echo "<span class='bg-danger text-light p-1'>Cancelled</span>";
                        }

                    ?></td>
                            <td><?php echo $data['description'] ;?></td>
                            <td>
                                <div class="dropdown text-end action">
                                    <p class="dropdown-toggle">Action</p>
                                    <ul class="dropdown-menu action-content">
                                        <li class="dropdown-item "><a href=""> <button
                                                    class="btn btn-info">Edit</button></a></li>
                                        <li class="dropdown-item"> <button class="btn btn-danger"
                                                onclick="return deletePopup()">Delete</button>
                                        </li>
                                    </ul>
                                </div>


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

        <div class="confirmationPopup" id="confirmationPopup">
            <div id="confirmationBox">
                <P>Are you sure you want to delete?</P>
                <a href="backend/deleteEvent.php?id=<?php echo $data['e_id'];?>"><button class="btn btn-success"
                        id="confirmDelete">Yes</button></a>
                <button id="cancelDelete" class="btn btn-danger">No</button>
            </div>
        </div>
</div>
<?php
include('includes/footer.php');
?>