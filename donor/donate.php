<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Donor Page</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/b8f6f13c30.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="body2">
        <div class="container ">
            <h2 class="title1">Donate Blood</h2>
            <div class="row featurette donation">
                <div class="col-md-6">
                    <div class="container border border-black form-container">
                        <h2 class="form-title">Donation form</h2>
                        <hr />
                        <div class="form container">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name">Fullname</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="unit">No. of Units</label>
                                    <input type="integer" id="unit" name="unit" required>
                                </div>
                                <div class="form-group">
                                    <label for="blood-group">Blood Group</label>
                                    <select name="blood-group">
                                        <option value="">Select blood group:</option>
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
                                <div class="form-group">
                                    <label for="blood-component">No. of Units:</label>
                                    <select name="blood-component">
                                        <option value="">Select blood component</option>
                                        <option value="WBC">White Blood Cell</option>
                                        <option value="RBC">Red Blood Cell</option>
                                        <option value="Plasma">Plasma</option>
                                        <option value="Platelet">Platelet</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="message">Disease(if any):</label>
                                    <textarea id="message" name="message" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="button" value="submit" class="btn btn-success mt-4 ">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
                        height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
                        <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">
                            500x500
                        </text>
                    </svg>
                </div>
            </div>
        </div>
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
</body>

</html>