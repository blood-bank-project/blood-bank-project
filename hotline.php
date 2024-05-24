<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BloodVault </title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light" data-bs-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="#">BloodVault</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="dropdown">
                            <li class="nav-item">
                                <a class="nav-link active dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                                    href="index.php">Home</a>
                            </li>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-content">
                                <li><a class="dropdown-item" href="#">About us</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Gallary</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Process</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Blog</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- <div class="dropdown">
                            <li class="nav-item">
                                <a class="nav-link  dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                                    href="">Looking for blood?</a>
                            </li>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-content">
                                <li><a class="dropdown-item" href="patient/signin.php">Register as Patient</a></li>
                                <li>
                                    <a class="dropdown-item" id="patientlogin">Login</a>
                                </li>
                            </ul>
                        </div> -->
                        <div class="dropdown">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                                    href="">Want to donate blood?</a>
                            </li>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-content">
                                <li><a class="dropdown-item" href="donor/signin.php">Register as Donar</a></li>
                                <li>
                                    <a class="dropdown-item" id="donorlogin">Login</a>
                                </li>
                        </div>
                        <div class="dropdown">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                                    href="">Admin</a>
                            </li>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-content">
                                <li><a class="dropdown-item" href="donor/signin.php">Register as Donar</a></li>
                                <li>
                                    <a class="dropdown-item" id="adminlogin">Login</a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                    <div class="button">
                        <a href="donor/signin.php"><button class="btn btn-outline-danger m-2">Donate Now</button></a>
                        <a href="request.php"><button class="btn btn-danger">Request Blood</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <div class="login" id="donorloginpopup">
        <div class="form-container">
            <div class="head">
                <h2>Donor Login</h2>
                <i class="fa-solid fa-xmark" id="closebutton1"></i>
            </div>
            <form action="donor/backend/donorlogincheck.php" method="post">
                <input type="email" name="email" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <a href="">Forgot password?</a>
                <button type="submit" name="submit">Log In</button>
            </form>
            <span>Or login with social account</span>
        </div>
        <div class="social-media">
            <a href=""><button class="btn1">
                    <i class="fa-brands fa-facebook"></i>Facebook
                </button>
            </a>
            <a href=""><button class="btn2">
                    <i class="fa-brands fa-google"></i>Google
                </button></a>
        </div>
    </div>
    <div class="login" id="adminloginpopup">
        <div class="form-container">
            <div class="head">
                <h2>Admin Login</h2>
                <i class="fa-solid fa-xmark" id="closebutton2"></i>
            </div>
            <form action="admin/backend/adminlogincheck.php" method="post">
                <input type="email" name="email" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <a href="">Forgot password?</a>
                <button type="submit" name="submit">Log In</button>
            </form>
            <span>Or login with social account</span>
        </div>
        <div class="social-media">
            <a href=""><button class="btn1">
                    <i class="fa-brands fa-facebook"></i>Facebook
                </button>
            </a>
            <a href=""><button class="btn2">
                    <i class="fa-brands fa-google"></i>Google
                </button></a>
        </div>
    </div>
    <div class="login" id="patientloginpopup">
        <div class="form-container">
            <div class="head">
                <h2>Patient Login</h2>
                <i class="fa-solid fa-xmark" id="closebutton3"></i>
            </div>
            <form action="patient/backend/patientlogincheck.php" method="post">
                <input type="email" name="email" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <a href="">Forgot password?</a>
                <button type="submit" name="submit">Log In</button>
            </form>
            <span>Or login with social account</span>
        </div>
        <div class="social-media">
            <a href=""><button class="btn1">
                    <i class="fa-brands fa-facebook"></i>Facebook
                </button>
            </a>
            <a href=""><button class="btn2">
                    <i class="fa-brands fa-google"></i>Google
                </button></a>
        </div>
    </div>


    <section id="hotline">
        <div class="container top">
            <div class="top-content title">
                <h1>BloodVault Hotlines</h1>
            </div>
            <div id=" date" class="top-content"><span></span></div>
            <div>
                <p class="top-content total">Blood request managed till now </p>
            </div>
        </div>

        <div class="container request-list">
            <div class="box">
                <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                <div class="">
                    <h3>Blood Request Today</h3>
                </div>
                <div class="number"></div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                <div class="">
                    <h3>Managed</h3>
                </div>
                <div class="number"></div>
            </div>
            <div class="box three">
                <div class="icon"><i class="fa-solid fa-clock"></i></div>
                <div class="">
                    <h3>Pending</h3>
                </div>
                <div class="number"></div>
            </div>
        </div>

        <hr>
        <?php
require_once "backend/connect.php";
$records_per_page = isset($_GET['records_per_page']) ? intval($_GET['records_per_page']) : 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $records_per_page;

$sql = "SELECT * FROM hotline LIMIT ?, ?";
$query = $conn->prepare($sql);
$query->bind_param('ii', $offset, $records_per_page); // 'ii' indicates two integer parameters
$query->execute();
$result = $query->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);

// Count total records
$total_records_query = $conn->query("SELECT COUNT(*) FROM hotline");
$total_records = $total_records_query->fetch_row()[0];
$total_pages = ceil($total_records / $records_per_page);

?>
        <div class="container hotlinestat">
            <h2 class="text-center m-4">Blood Bank Hotlines</h2>
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

                <thead>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Conatact</th>
                </thead>
                <tbody>
                    <?php
                 if ($rows): ?>
                    <?php $i = ($page - 1) * $records_per_page; ?>
                    <?php foreach ($rows as $data): ?>
                    <tr>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['location']; ?></td>
                        <td><?php echo $data['phone1'].',<br>'.$data['phone2'].',<br>'.$data['phone3'];?></td>
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

        <footer id="contact" class="container-fluid">
            <div class="container">
                <div class="row content-ro">
                    <div class="col-lg-4 col-md-12 footer-contact">
                        <h2>Contact Informatins</h2>
                        <div class="address-row">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                <p>Thapathali,<br> Kathmandu, Nepal</p>
                            </div>
                        </div>
                        <div class="address-row">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="detail">
                                <p>Bloodvault@gmail.com <br> savelife@gmail.com</p>
                            </div>
                        </div>
                        <div class="address-row">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="detail">
                                <p>+977 9864111517 <br> +91 9863482016</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 footer-links">
                        <div class="row no-margin mt-2">
                            <h2>Quick Links</h2>
                            <ul>
                                <li>
                                    <a class="nav-link" href="#">Home
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#about">About Us</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#gallery">Gallery</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#process">Process</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#blog">Blog</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#contact">Contact US</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copy">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <p>Copyright © BloodVault | All right reserved.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 socila-link">
                            <ul>
                                <li><a><i class="fab fa-github"></i></a></li>
                                <li><a><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a><i class="fab fa-twitter"></i></a></li>
                                <li><a><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="https://kit.fontawesome.com/b8f6f13c30.js" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>

</html>