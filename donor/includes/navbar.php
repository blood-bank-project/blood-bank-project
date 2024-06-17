 <section id="navbar" class="sticky">
     <nav class="navbar navbar-expand-lg ">
         <div class="container-fluid">
             <a class="navbar-brand logo" href="index.php">
                 <img src="assets/images/logo.png" alt="">
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="index.php" id="home"> Home </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="donation.php" id="request">Donation</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="event.php" id="event">Event</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="certificate.php" id="certificate">Certificate</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="request.php" id="certificate">Request
                             Blood</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="requesthistory.php" id="certificate">Request Status</a>
                     </li>
                 </ul>
                 <div class="text-end profile">
                     <p class="button">
                         <!-- <img src="" alt="mdo" width="32" height="32" class="rounded-circle" /> -->
                         <?php
                                session_start();
                            if(isset($_SESSION['username'])) {
                                echo $_SESSION['username'];
                            }
                            ?>
                         &nbsp; ▼
                     </p>
                     <div class="dropdown-content">
                         <a href="#" id="top">Settings</a>
                         <a href="#" id="middle ">Profile</a>
                         <a href="backend/logout.php" id="buttom">Log out</a>
                     </div>
                 </div>
             </div>
         </div>
     </nav>
 </section>