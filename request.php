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
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="index.php">BloodVault</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <div class="dropdown">
                        <a class="nav-link active dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                            href="index.php">Home</a>
                        <div class="dropdown-menu dropdown-menu-dark dropdown-content">
                            <a class="dropdown-item" href="#">About us</a>
                            <a class="dropdown-item" href="#">Gallary</a>

                            <a class="dropdown-item" href="#">Process</a>

                            <a class="dropdown-item" href="#">Blog</a>
                            <a class="dropdown-item" href="#">Contact us</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown" href="">Want
                            to donate blood?</a>
                        <div class=" dropdown-content">
                            <a class="dropdown-item" href="donor/signin.php">Register as Donar</a>
                            <a class="dropdown-item" id="donorlogin">Login</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                            href="">Admin</a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="donor/signin.php">Register as Donar</a>
                            <a class="dropdown-item" id="adminlogin">Login</a>
                        </div>
                    </div>
                    <div class="button">
                        <a href="donor/signin.php"><button class="btn btn-outline-light m-2">Donate Now</button></a>
                        <a href="request.php"><button class="btn btn-light">Request Blood</button></a>
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
            <form class="donorloginForm">
                <span class="error"></span>
                <input class="username" type="email" name="email" placeholder="Username" />
                <input class="password" type="password" name="password" placeholder="Password" />
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
            <form class="adminloginForm">
                <span class="error1"></span>
                <input class="emailid" type="email" name="email" placeholder="Username" />
                <input class="pass" type="password" name="password" placeholder="Password" />
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

    <section id="request">
        <div class="title">
            <h1>Blood Request Form</h1>
            <h5>Need Blood?</h5>
        </div>
        <div class="hotline">
            <a href="hotline.php">
                <p><i class="fa-solid fa-hand-point-right"></i>Other blood bank's hotline</p>
            </a>
        </div>
        <div class="container form-container">
            <h2 class="form-title">Fill the form for blood</h2>
            <hr />
            <div class="form-container">
                <form action="backend/bloodrequest.php" method="post" enctype="multipart/form-data">
                    <div class="form-field row">
                        <div class="form-group col">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="fname" placeholder="Your name">
                        </div>
                        <div class="form-group col">
                            <label for="phone">Phone</label>
                            <input type="number" id="phone" name="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-field row">
                        <div class="form-group col">
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
                        <div class="form-group col">
                            <label for="file">Requisition form</label>
                            <input type="file" id="file" name="file" placeholder="Hospital form">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" placeholder="Any disease?"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" name="submit" id="button" class="btn ">
                    </div>
                </form>
            </div>
        </div>

    </section>

    <div id="successPopup" class="popup">
        Form submitted successfully!
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