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
    <link rel="stylesheet" type="text/css" href="signin.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script src="https://kit.fontawesome.com/b8f6f13c30.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid image">
                <a class="navbar-brand logo" href="index.php"><img src="assets/images/logo.png" alt="" class="logo"></a>
                <a class="navbar-brand text" style="color:#fff; font-size:20px;">BloodVault</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <div class="dropdown">
                        <a href="index.php" class="nav-link active dropdown-toggle" aria-current="page"
                            data-bs-toggle="dropdown">Home</a>

                        <div class="dropdown-content">
                            <a class="dropdown-item" href="#about">About us</a>
                            <a class="dropdown-item" href="#gallery">Gallary</a>

                            <a class="dropdown-item" href="#process">Process</a>

                            <a class="dropdown-item" href="#blog">Blog</a>

                            <a class="dropdown-item" href="#contact">Contact us</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown" href="">Want
                            to donate blood?</a>

                        <div class=" dropdown-content">
                            <a class="dropdown-item" href="">Register as Donar</a>
                            <a class="dropdown-item" id="donorlogin">Login</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                            href="">Admin</a>
                        <div class=" dropdown-content">
                            <a class="dropdown-item" id="adminlogin">Login</a>

                        </div>
                    </div>
                    <div class="button">
                        <a href="signin.php"><button class="btn btn-outline-light m-2">Donate Now</button></a>
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
                <span class="error"></span>
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


    <section id="donorRegisterfrom">
        <div class="container doantionForm">
            <header>Get Register</header>
            <hr style="padding:20px;">
            <span id="error"></span>
            <form id="form" onsubmit="return formValidate(event)" method="POST">
                <div class="form first">
                    <div class="detail">
                        <p class="title">Personal Details</p>
                        <div class="fields">
                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" name="fname" id="fname" placeholder="Enter your first name" />
                                <span id="ferror"></span>
                            </div>
                            <div class="input-field">
                                <label>Middle Name</label>
                                <input type="text" name="mname" id="mname"
                                    placeholderplaceholder="Enter your middle name" />
                            </div>
                            <div class="input-field">
                                <label>Last Name</label>
                                <input type="text" name="lname" id="lname" placeholder="Enter your last name" />
                                <span id="lerror"></span>
                            </div>
                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" id="dob" name="dob" placeholder="Enter your Date of birth" />
                                <span id="doberror"></span>
                            </div>
                            <div class="input-field">
                                <label>Email</label>
                                <input type="text" name="email" id="email" placeholder="Enter your email" />
                                <span id="eerror"></span>
                            </div>
                            <div class="input-field">
                                <label>Gender</label>
                                <select class="group" name="gender" id="gender">
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                <span id="gerror"></span>
                            </div>
                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" name="occupation" id="occupation"
                                    placeholder="Enter your Occupation" />
                                <span id="oerror"></span>
                            </div>
                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="number" name="phone" id="phone" placeholder="Enter your mobile number" />
                                <span id="perror"></span>
                            </div>
                            <div class="input-field">
                                <label>Blood Group</label>
                                <select name="blood" class="group" id="bgroup">
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
                                <span id="berror"></span>
                            </div>
                        </div>
                    </div>

                    <div class="detail ID">
                        <p class="title">Address Detail</p>

                        <div class="fields">
                            <div class="input-field">
                                <label>Province</label>
                                <input type="text" id="province" name="province" placeholder="Enter your Province" />
                                <span id="proerror"></span>
                            </div>
                            <div class="input-field">
                                <label>District</label>
                                <input type="text" id="district" name="district" placeholder="Enter your District" />
                                <span id="diserror"></span>
                            </div>
                            <div class="input-field">
                                <label> Rural / Urban Municipality </label>
                                <input type="text" id="municipality" name="municipality"
                                    placeholder="Enter your Municipality" />
                                <span id="rulerror"></span>
                            </div>
                            <div class="input-field">
                                <label>Tole</label>
                                <input type="text" name="tole" id="tole" placeholder="Enter your tole" />
                                <span id="terror"></span>
                            </div>
                            <div class="input-field">
                                <label>Ward no.</label>
                                <input type="number" name="ward" id="ward" placeholder="Enter your ward no." />
                                <span id="werror"></span>
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
                                <input type="Password" name="pass" id="pass" placeholder="Enter your Password" />
                                <span id="paserror"></span>
                            </div>
                            <div class="input-field">
                                <label>Confirm Password</label>
                                <input type="Password" name="cpass" id="cpass" placeholder="Enter Confirm Password" />
                                <span id="cperror"></span>
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
<script src="assets/js/script.js"></script>

</html>