<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web App Landing Page Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="../signin.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <script src="https://kit.fontawesome.com/b8f6f13c30.js" crossorigin="anonymous"></script>
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
                                    href="../index.php">Home</a>
                            </li>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-content">
                                <li><a class="dropdown-item" href="#about">About us</a></li>
                                <li>
                                    <a class="dropdown-item" href="#gallery">Gallary</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#process">Process</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#blog">Blog</a>
                                </li>
                                <li><a class="dropdown-item" href="#contact">Contact us</a></li>
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
                                <li><a class="dropdown-item" href="">Register as Donar</a></li>
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
                                <li><a class="dropdown-item" href="donor/signin.php">Register as Admin</a></li>
                                <li>
                                    <a class="dropdown-item" id="adminlogin">Login</a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                    <div class="button">
                        <a href="signin.php"><button class="btn btn-outline-danger m-2">Donate Now</button></a>
                        <a href="../request.php"><button class="btn btn-danger">Request Blood</button></a>
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
            <form action="backend/donorlogincheck.php" method="post">
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
            <form action="../admin/backend/adminlogincheck.php" method="post">
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


    <section id="donorRegisterfrom">
        <div class="container doantionForm">
            <header>Get Register</header>
            <hr style="padding:20px;">
            <form action="backend/registerdonor.php" method="post">
                <div class="form first">
                    <div class="detail">
                        <span class="title">Personal Details</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" name="fname" placeholder="Enter your first name" />
                            </div>
                            <div class="input-field">
                                <label>Middle Name</label>
                                <input type="text" name="mname" placeholder="Enter your middle name" />
                            </div>
                            <div class="input-field">
                                <label>Last Name</label>
                                <input type="text" name="lname" placeholder="Enter your last name" />
                            </div>
                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" name="dob" placeholder="Enter your Date of birth" />
                            </div>
                            <div class="input-field">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Enter your email" />
                            </div>
                            <div class="input-field">
                                <label>Gender</label>
                                <select class="group" name="gender">
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" name="occupation" placeholder="Enter your Occupation" />
                            </div>
                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="number" name="phone" placeholder="Enter your mobile number" />
                            </div>
                            <div class="input-field">
                                <label>Tel-number</label>
                                <input type="number" name="tel" placeholder="Enter your Tel-number" />
                            </div>
                            <div class="input-field">
                                <label>Blood Group</label>
                                <select name="blood" class="group">
                                    <option value="">Select your Blood Group</option>
                                    <option value="A+">A positive</option>
                                    <option value="A-">A negative</option>
                                    <option value="B+">B positive</option>
                                    <option value="B-">B negative</option>
                                    <option value="O+">O positive</option>
                                    <option value="O-">O negative</option>
                                    <option value="AB+">AB positive</option>
                                    <option value="AB-">AB negative</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="detail ID">
                        <span class="title">Address Detail</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Province</label>
                                <input type="text" name="province" placeholder="Enter your Province" />
                            </div>
                            <div class="input-field">
                                <label>District</label>
                                <input type="text" name="district" placeholder="Enter your District" />
                            </div>
                            <div class="input-field">
                                <label> Rural / Urban Municipality </label>
                                <input type="text" name="municipality" placeholder="Enter your Municipality" />
                            </div>
                            <div class="input-field">
                                <label>Tole</label>
                                <input type="text" name="tole" placeholder="Enter your tole" />
                            </div>
                            <div class="input-field">
                                <label>Ward no.</label>
                                <input type="number" name="ward" placeholder="Enter your ward no." />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form Second">
                    <div class="fields">
                        <div class="detail ID">
                            <span class="title">Set Password</span>

                            <div class="input-field">
                                <label>Password</label>
                                <input type="Password" name="pass" placeholder="Enter your Password" />
                            </div>
                            <div class="input-field">
                                <label>Confirm Password</label>
                                <input type="Password" name="cpass" placeholder="Enter Confirm Password" />
                            </div>
                        </div>

                        <button type="submit" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="../assets/js/script.js"></script>

</html>