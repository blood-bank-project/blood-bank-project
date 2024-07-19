<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BloodVault</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script src="https://kit.fontawesome.com/b8f6f13c30.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg ">
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
                        <a class="nav-link active dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                            href="index.php">Home</a>
                        <div class="dropdown-menu dropdown-menu-dark dropdown-content">
                            <a class="dropdown-item" href="#about">Why BloodVault</a><a class="dropdown-item"
                                href="#whatwedo">What We Do?</a>
                            <a class="dropdown-item" href="#request">See Today's request</a>
                            <a class="dropdown-item" href="#gallery">Gallary</a>

                            <a class="dropdown-item" href="#process">Process</a>

                            <a class="dropdown-item" href="#blog">Camp</a>
                            <a class="dropdown-item" href="#contact">Contact us</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown" href="">Want
                            to
                            donate blood?</a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="signin.php">Register as Donar</a>
                            <a class="dropdown-item" id="donorlogin">Login</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                            href="">Admin</a>
                        <div class="dropdown-content">
                            <a id="adminlogin">Login</a>
                        </div>
                    </div>
                    </ul>
                    <div class="button">
                        <a href="signin.php"><button class="btn btn-outline-light m-2">Donate
                                Now</button></a>
                        <a href="request.php"><button class="btn btn-light">Request Blood</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- login popup -->
    <?php
    require_once 'googlelogin.php';
    ?>
    <div class="login" id="donorloginpopup">
        <div class="form-container">
            <div class="head">
                <h2>Donor Login</h2>
                <i class="fa-solid fa-xmark" id="closebutton1"></i>
            </div>
            <hr>
            <form class="donorloginForm">
                <span class="error"></span>
                <input class="username" type="email" name="email" placeholder="Username" />
                <input class="password" type="password" name="password" placeholder="Password" />
                <a href="">Forgot password?</a>
                <button type="submit" name="submit" value="submit">Log In</button>
            </form>
            <span>Or login with social account</span>
        </div>
        <div class="social-media">
            <a href=""><button class="btn1">
                    <i class="fa-brands fa-facebook"></i>Facebook
                </button>
            </a>

            <a href="<?php echo $client->createAuthUrl() ?>"><button class="btn2">
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
                <button type="submit" name="submit" value="submit">Log In</button>
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

    <!-- slider  -->
    <div class="slider-detail">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slide-02.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">donating your time to make an impact,
                            <br>your blood to save lives or your money to create a holistic blood management
                            cycle.
                        </p>
                        <div class=" vbh">
                            <a href="#contact">
                                <div class="btn btn-success  bounceInUp"> Contact US </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slide-03.jpg" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">In developing countries
                            like NEPAL,<br> patients’ families have the
                            burden and stress of managing and
                            transporting blood themselves.<br>
                            We are on a mission to change that.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--*************** About Us  ***************-->
    <section id="about" class="contianer-fluid about-us">
        <div class="container">
            <div class="row session-title">
                <div class="col-md-6">
                    <h2>Why BloodVault</h2>
                    <p>Welcome to Blood Vault, where innovation meets compassion.
                        <br>
                        We are a team of dedicated professionals committed to revolutionizing the way blood banks
                        operate
                        and serve their
                        communities. Our mission is to streamline the blood donation process, ensuring that every
                        drop
                        counts and reaches those
                        in need swiftly and efficiently.
                        <br>
                        At Blood Vault, we understand the critical role that blood banks play in healthcare systems
                        worldwide. Our comprehensive software solution is designed with the needs of blood banks,
                        hospitals,
                        donors, and
                        recipients in mind.
                        <br>
                        With our user-friendly interface and advanced features, we empower blood banks to manage
                        their
                        inventory effectively,
                        track donations in real-time, and connect with donors seamlessly. Our goal is to enhance
                        operational
                        efficiency, reduce
                        wastage, and ultimately save more lives.
                        <br>
                        Driven by a passion for innovation and a commitment to making a difference, our team
                        continually
                        strives to improve and
                        evolve our platform. We work closely with blood banks and healthcare professionals to
                        incorporate
                        feedback and stay
                        ahead of industry trends.
                        <br>
                        Join us in our mission to make blood donation and distribution safer, smarter, and more
                        accessible
                        for everyone.
                        Together, we can make a positive impact and help ensure that no one ever faces a shortage of
                        life-saving blood.
                        <br>
                        Thank you for choosing Blood Vault. Let's save lives, one donation at a time.
                    </p>
                </div>
                <div class="col-md-6 moto">
                    <p>give blood <span>save life</span></p>
                </div>
                <div class="content">
                    <p>Your small effort can save hundred of peoples' life</p>
                </div>
            </div>
    </section>

    <section id="weDo" class="whatwedo contianer">
        <div class=" row">
            <div class="col work">
                <h1>What Wo Do?</h1>
                <p>Blood Vault manages all aspects of a blood bank's operations to ensure efficiency, safety, and
                    reliability. We maintain detailed donor records, including personal information, donation history,
                    and health status, while overseeing pre-donation screenings to ensure eligibility. The system
                    meticulously tracks the collection, testing, storage, and expiry of blood and its components,
                    ensuring optimal inventory levels and adherence to quality standards. We automates routine tasks,
                    streamlines workflows, and enhances accuracy in managing blood supplies. Additionally, the Blood
                    Vault coordinates the distribution of blood products to the patients, ensuring timely and safe
                    delivery. It supports regulatory compliance by maintaining precise records and generating necessary
                    reports. The system also fosters donor engagement through effective communication, reminders, and
                    recognition programs. By integrating these functions, the Blood Vault ensures a consistent and safe
                    supply of blood products, crucial for supporting healthcare providers and meeting patient needs.
                </p>
            </div>
            <div class="col mission">
                <h1>Our mission</h1>
                <p>
                    The mission of a Blood Vault is to ensure the safety, quality, and availability of blood, testing,
                    and quality control measures. By streamlining donor management, blood collection, testing, storage,
                    and distribution processes, we aim to maximize efficiency and minimize wastage. It seeks to improve
                    accessibility to blood products for hospitals, clinics, and patients, maintaining a reliable supply
                    to meet both routine and emergency needs. Additionally, the system fosters positive donor
                    relationships through effective communication and engagement strategies, encouraging regular
                    donations. By supporting healthcare providers with a steady supply of life-saving blood products,
                    our system plays a crucial role in the healthcare infrastructure. It ensures regulatory compliance,
                    maintains transparency through accurate records, and continuously innovates to enhance operational
                    performance and outcomes. Ultimately, Blood Vault is dedicated to providing safe, high-quality blood
                    products, improving operational efficiency, promoting donor engagement, supporting healthcare
                    systems, ensuring compliance, and fostering innovation.</p>
            </div>
        </div>
    </section>

    <section id="hotline">
        <div class="heading">
            <h1>See Today's Request</h1>
        </div>
        <div class="container-fluid top">
            <div class="top-content title">
                <a href="hotline.php">
                    <h3>Other bloodbank's Hotlines <i class="fa-solid fa-phone-volume"></i></h3>
                </a>
            </div>
            <div id=" date" class="top-content"><span></span></div>
            <div>
                <p class="top-content total">Blood request managed till now <i class="fa-solid fa-arrow-right"></i></p>
            </div>
        </div>

        <div class="container-fluid request-list ">
            <div class="box ">
                <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                <div class="content">
                    <h3>Blood Request Today</h3>
                </div>
                <div class="number">
                    <?php
                    require_once "backend/connect.php";
                    $today = date('Y-m-d 00:00:00');
                    $tomorrow = date('Y-m-d 00:00:00', strtotime('+1 day'));
                    $sql = "SELECT count(*) as request_count FROM request WHERE date >= '$today' AND date < '$tomorrow'";
                    $row = $conn->query($sql);
                    $data= mysqli_fetch_array($row);
                    ?>
                    <p><?php echo $data['request_count'];?></p>
                </div>
            </div>
            <div class="box ">
                <div class="icon1"><i class="fa-solid fa-circle-check"></i></div>
                <div class="content">
                    <h3>Managed</h3>
                </div>
                <div class="number">
                    <?php
                    require_once "backend/connect.php";
                    $today = date('Y-m-d 00:00:00');
                    $tomorrow = date('Y-m-d 00:00:00', strtotime('+1 day'));
                    $sql = "SELECT count(*) as managed_count FROM request WHERE date >= '$today' AND date < '$tomorrow' AND status = 1 group by status ";
                    $row = $conn->query($sql);
                    $data= mysqli_fetch_array($row);
                    ?>
                    <p><?php echo ($row != null && isset($data['managed_count']))? $data['managed_count']:0;?></p>
                </div>
            </div>
            <div class="box three ">
                <div class="icon"><i class="fa-solid fa-clock"></i></div>
                <div class="content">
                    <h3>Pending</h3>
                </div>
                <div class="number">
                    <?php
                    require_once "backend/connect.php";
                    $today = date('Y-m-d 00:00:00');
                    $tomorrow = date('Y-m-d 00:00:00', strtotime('+1 day'));
                    $sql = "SELECT count(*) as request_count FROM request WHERE date >= '$today' AND date < '$tomorrow'";
                    $row = $conn->query($sql);
                    $data= mysqli_fetch_array($row);
                    ?>
                    <p><?php echo $data['request_count'];?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Gallery #######################--->

    <div id="gallery" class="gallery container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2>Checkout Our Gallery</h2>
            </div>
            <div class="gallery-row row">
                <div id="gg-screen"></div>
                <div class="gg-box">
                    <div class="gg-element">
                        <img src="assets/images/gallery/g1.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g2.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g3.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g4.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g5.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g6.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g7.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g8.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g9.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g10.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="process" class="donation-care">
        <div class="container">
            <div class="row session-title">
                <h2>Donation Process</h2>
                <p>The donation process from the time you arrive center until the time you leave</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g1.jpg" alt="">
                        <h4><b>1 - </b>Registration</h4>
                        <p>Upon arrival at this website Blood Vault, you'll be asked to provide some basic information
                            and
                            identification to register as a donor. This may include your name, contact information, and
                            possibly some health-related
                            questions.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g3.jpg" alt="">
                        <h4><b>2 - </b>Donation</h4>
                        <p>Once you've been cleared to donate, you'll proceed to the donation area. You'll need to fill
                            the details asked
                            in the form and give the amount of blood you will donate and the blood group. It will take
                            about 2-3
                            minutes.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g2.jpg" alt="">
                        <h4><b>3 - </b>Collection</h4>
                        <p>During the donation process, the system records details such as the type of donation (whole
                            blood, platelets, plasma),
                            volume collected, and donor vitals. It also tracks the processing of donated blood,
                            including labeling, storage, and
                            transportation to ensure proper handling and traceability.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g4.jpg" alt="">
                        <h4><b>4 - </b>Donor and Patient Communication</h4>
                        <p>The system facilitates communication with donors and patients, providing information about
                            donation opportunities,
                            appointment reminders, and updates on blood availability. It also supports outreach efforts
                            to recruit and retain blood
                            donors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- events -->
    <div id="blog" class="blog-container contaienr-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Upcomming Donation Camps</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut
                    est arcu. Donec hendrerit velit consectetur adipiscing elit.</p>
            </div>
            <section id="card" class="row">
                <div class="container col" id="card-container">
                    <?php
                require_once "backend/connect.php";
                $sql = "SELECT * FROM event ORDER BY e_id DESC LIMIT 6 ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($data = $result->fetch_object()) {
                    ?>
                    <div class="card">
                        <h2><?php echo $data->name; ?></h2>
                        <p>Location: <?php echo $data->location; ?></p>
                        <p>Date: <?php echo $data->date;?></p>
                        <p>Organizer: <?php echo $data->organizer;?></p>
                        <p>Email: <?php echo $data->email;?></p>
                        <p>Status: <?php 
                                    if($data->status == -1){
                                        echo "cancelled";
                                    }else if($data->status == 0){
                                        echo "upcoming";
                                    }if($data->status == 1){
                                        echo "completed";
                                    }
                                    ?>
                        </p>
                        <p>Description: <?php echo $data->description;?></p>
                    </div>
                    <?php
            }
                 } else {
             echo "<p>No Event available.</p>";
            }
            ?>
            </section>
        </div>
    </div>

    <!-- footer-->
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
                                <a class="nav-link" href="#blog">Camp</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#contact">Contact US</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
                        <div class="form-body">
                            <form action="backend/insertmessage.php" method="post">
                                <input type="text" name="name" placeholder="Enter Name" class="form-control">
                                <input type="text" name="phone" placeholder="Enter Mobile no" class="form-control">
                                <input type="text" name="email" placeholder="Enter Email Address" class="form-control">
                                <input type="text" name="message" placeholder="Your Message" class="form-control">
                                <button class="btn btn-sm btn-primary w-100" name="submit">Send Request</button>
                            </form>
                        </div>
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
<script src="assets/js/script.js"></script>

</html>