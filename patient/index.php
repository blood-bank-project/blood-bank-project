<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Patient Page | BloodVault</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
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
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" onclick="loadContent('donor.php')"
                                id="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="loadContent('donate.php')" id="donate">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="loadContent('request.php')" id="request">Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="loadContent('certificate.php')"
                                id="certificate">Certificate</a>
                        </li>
                    </ul>
                    <div class="dropdown text-end profile">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- <img src="" alt="mdo" width="32" height="32" class="rounded-circle" /> -->
                            <?php
                                session_start();
                                if(isset($_SESSION['username']))
                                    {
                                        echo $_SESSION['username'];
                                    }
                            ?>
                        </a>
                        <ul class="dropdown-menu text-small profile-content">
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>