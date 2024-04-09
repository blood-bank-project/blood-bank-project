<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signin | Signin</title>
    <link rel="stylesheet" href="signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>Registration Form</header>

        <form action="">
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
                                <option>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" name="occupation" placeholder="Enter your Occupation">
                        </div>
                    </div>
                </div>


                <div class="detail ID">
                    <span class="title">Address Detail</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="phone" placeholder="Enter your mobile number">
                        </div>
                        <div class="input-field">
                            <label>Tel-number</label>
                            <input type="number" name="tel" placeholder="Enter your Tel-number">
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter your address">
                        </div>
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
                        <div class="input-field">
                            <label>Ward</label>
                            <input type="text" name="ward" placeholder="Enter your ward">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form Second">
                <div class="detail">

                    <div class="detail ID">
                        <span class="title">Donate Blood</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Blood Group</label>
                                <select name="blood" class="group">
                                    <option>Select your Blood Group</option>
                                    <option>A positive</option>
                                    <option>A negative</option>
                                    <option>B positive</option>
                                    <option>B negative</option>
                                    <option>O positive</option>
                                    <option>O negative</option>
                                    <option>AB positive</option>
                                    <option>AB negative</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Password</label>
                                <input type="Password" name="pass" placeholder="Enter your Password">
                            </div>
                            <div class="input-field">
                                <label>Confirm Password</label>
                                <input type="Password" name="cpass" placeholder="Enter Confirm Password">
                            </div>

                        </div>

                        <button>Submmit</button>


                    </div>
                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>