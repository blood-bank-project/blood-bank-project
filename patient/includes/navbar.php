 <section id="navbar">
     <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light" data-bs-theme="light">
         <div class="container-fluid">
             <a class="navbar-brand logo" href="#">BloodVault</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="index.php"
                             onclick="loadContent('donor.php')" id="home">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="donor.php" onclick="loadContent('donate.php')" id="donate">Donate</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="donationhistory.php" onclick="loadContent('request.php')"
                             id="request">Donation
                             History</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="certificate.php" onclick="loadContent('certificate.php')"
                             id="certificate">Certificate</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="request.php" onclick="loadContent('certificate.php')"
                             id="certificate">Request
                             Blood</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="requesthistory.php" onclick="loadContent('certificate.php')"
                             id="certificate">Request
                             History</a>
                     </li>
                 </ul>
                 <div class="dropdown text-end profile">
                     <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         <!-- <img src="" alt="mdo" width="32" height="32" class="rounded-circle" /> -->
                         <?php
                                session_start();
                            if(isset($_SESSION['username'])) {
                                echo $_SESSION['username'];
                            }
                            ?>
                     </a>
                     <ul class="dropdown-menu profile-content">
                         <li><a class="dropdown-item" href="#">Settings</a></li>
                         <li><a class="dropdown-item" href="#">Profile</a></li>
                         <li>
                             <hr class="dropdown-divider" />
                         </li>
                         <li><a class="dropdown-item" href="backend/logout.php">Log out</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </nav>
 </section>