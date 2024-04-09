<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BloodVault| Signin</title>
    <link rel="stylesheet" href="../signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>Registration as Donor</header>

        <form action="backend/registerdonor.php" method="post">
            <div class="form first">
                <div class="detail">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="Enter your name">
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Enter your name">
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter your Date of birth">
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email">
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select class="group" name="gender">
                                <option value="">Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Others</option>
                            </select>
                        </div>
                        <div class="fields">
                            <div class="input-field">
                                <label>Blood Group</label>
                                <select name="blood" class="group">
                                    <option value="">Select your Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB- </option>
                                    <option value="O+">O+ </option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="number" name="phone" placeholder="Enter your mobile number">
                            </div>
                            <div class="input-field">
                                <label>Tel-number</label>
                                <input type="number" name="tel" placeholder="Enter your Tel-number">
                            </div>
                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" name="occupation" placeholder="Enter your Occupation">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="detail ID">
                        <span class="title">Address Detail</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Nationality</label>
                                <input type="text" name="nation" placeholder="Enter your Nationality">
                            </div>
                            <div class="input-field">
                                <label>State</label>
                                <input type="text" name="state" placeholder="Enter your state">
                            </div>
                            <div class="input-field">
                                <label>District</label>
                                <input type="text" name="district" placeholder="Enter your district">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form Second">
                    <div class="detail">
                        <hr>
                        <div class="detail ID">
                            <div class="input-field">
                                <label>Password</label>
                                <input type="Password" name="pass" placeholder="Enter your Password">
                            </div>
                            <div class="input-field">
                                <label>Confirm Password</label>
                                <input type="Password" name="cpass" placeholder="Enter Confirm Password">
                            </div>

                        </div>

                        <button name="submit" type="submit">Submit</button>


                    </div>
                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>