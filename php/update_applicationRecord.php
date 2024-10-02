<?php

require_once('db.php');
error_reporting(0);
if (!isset($_GET['id'])) {
    header('Location: application_table.php');
    exit();
}

$id = $_GET['id'];
$name = "";
$email = "";
$phone = "";
$gender = "";
$dob = "";
$job = "";
$city = "";
$qualification = "";
$employment = "";
$experience = "";
$adhar = "";
$account = "";



$sql = "select * from addmission where id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $job = $row['job'];
        $city = $row['city'];
        $qualification = $row['qualification'];
        $employment = $row['employment'];
        $experience = $row['experience'];
        $adhar = $row['adhar'];
        $account = $row['account'];
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Pizza Hut</a>
        </div>
    </nav>
    <!-- image -->
    <img src="../img/app-form-banner.jpg" style="height: 400px;width: 100%; opacity: 0.7;">
    <!-- form -->
    <div class="container app_form my-5">
        <div class="container">
            <h2>Welcome to Pizza Hut family</h2>
            <p>Fill in the details below to be a part of Pizza Hut family</p>
            <form action="update.php" method="post">
                <div class="" style="display:none;">
                    <input type="number" name="id" id="" value="<?php echo "$id" ?>">
                </div>
                <div class="row my-5">
                    <h4>Personal Details</h4>
                    <div class="col-md-4">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name"
                            value="<?php echo "$name" ?>">
                    </div>
                    <div class="col-md-4">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="<?php echo "$email" ?>">
                    </div>
                    <div class="col-md-4">
                        <label>Phone Number</label>
                        <input type="number" name="phone" class="form-control" placeholder="Phone Number"
                            value="<?php echo "$phone" ?>">
                    </div>
                    <div class="col-md-4">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="Male" <?php if ($gender == "Male") {
                                echo "selected";
                            } ?>> Male</option>
                            <option value="Female" <?php if ($gender == "Female") {
                                echo "selected";
                            } ?>> Female</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" placeholder="Date of Birth"
                            value="<?php echo "$dob" ?>">
                    </div>
                </div>
                <hr>
                <div class="row my-5">
                    <h4>Additional Details</h4>
                    <div class="col-md-4">
                        <label>Job Role Applying For</label>
                        <select name="job" class="form-control">
                            <option value="">Select Job Role Applying For</option>
                            <option value="In- Store Staff" <?php if ($job == "In- Store Staff") {
                                echo "selected";
                            } ?>>
                                In- Store Staff</option>
                            <option value="Speech and hearing Impaired" <?php if ($job == "Speech and hearing Impaired") {
                                echo "selected";
                            } ?>>Speech and hearing Impaired</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Preferred City</label>
                        <input type="text" name="city" class="form-control" placeholder="City"
                            value="<?php echo "$city" ?>">
                    </div>
                    <div class="col-md-4">
                        <label>Highest Qualification</label>
                        <select name="qualification" class="form-control">
                            <option value="">Select Highest Qualification</option>
                            <option value="Fresher" <?php if ($qualification == "Fresher") {
                                echo "selected";
                            } ?>>Fresher
                            </option>
                            <option value="10th pass" <?php if ($qualification == "10th Pass") {
                                echo "selected";
                            } ?>>10th
                                Pass</option>
                            <option value="12th pass" <?php if ($qualification == "12th Pass") {
                                echo "selected";
                            } ?>>12th
                                Pass</option>
                            <option value="Diploma holder" <?php if ($qualification == "Diploma Holder") {
                                echo "selected";
                            } ?>>Diploma Holder</option>
                            <option value="Graduate" <?php if ($qualification == "Graduate") {
                                echo "selected";
                            } ?>>
                                Graduate</option>
                            <option value="Post graduate" <?php if ($qualification == "Post Graduate") {
                                echo "selected";
                            } ?>>Post Graduate</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Employment Type</label>
                        <br>
                        <input type="radio" name="employment" value="Part Time" class="my-4" <?php if ($employment == 'Part Time') {
                            echo "checked ='checked'";
                        } ?>>Part Time
                        <input type="radio" name="employment" value="Full Time" style="margin-left: 30px;" <?php if ($employment == 'Full Time') {
                            echo "checked ='checked'";
                        } ?>>Full Time
                    </div>
                    <div class="col-md-4">
                        <label>Previous Experience</label>
                        <select name="experience" class="form-control">
                            <option value="">Select Experience</option>
                            <option value="Fresher" <?php if ($experience == "Fresher") {
                                echo "selected";
                            } ?>>Fresher
                            </option>
                            <option value="1 - 6 Month" <?php if ($experience == "1 - 6 Month") {
                                echo "selected";
                            } ?>>1 -
                                6 Month</option>
                            <option value="7 - 12 Month" <?php if ($experience == "7 - 12 Month") {
                                echo "selected";
                            } ?>>7
                                - 12 Month</option>
                            <option value="13 - 24 Month" <?php if ($experience == "13 - 24 Month") {
                                echo "selected";
                            } ?>>13 - 24 Month</option>
                            <option value="25 Month & Above" <?php if ($experience == "25 Month & Above") {
                                echo "selected";
                            } ?>>25 Month & Above</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Aadhaar Number</label>
                        <input type="number" name="adhar" class="form-control" placeholder="Aadhaar Number"
                            value="<?php echo "$adhar" ?>">
                    </div>
                    <div class="col-md-4">
                        <label>Do you have a Bank Account?</label>
                        <br>
                        <input type="radio" name="account" value="Yes" class="my-4" <?php if ($account == 'Yes') {
                            echo "checked ='checked'";
                        } ?>>Yes
                        <input type="radio" name="account" value="No" style="margin-left: 50px;" <?php if ($account == 'No') {
                            echo "checked ='checked'";
                        } ?>>No
                    </div>
                </div>
                <div class="row">
                    <center>
                        <button type="submit" name="submit" id="submit" class="btn btn-success">UPDATE</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-2 my-5">
                    <h5>Order Now</h5>
                    <a href="deals.html">Deals</a><br>
                    <a href="pizzas.html">Pizza</a><br>
                    <a href="sides.html">Sides</a><br>
                    <a href="drink.html">Drinks</a><br>
                    <a href="desert.html">Desserts</a>
                </div>
                <div class="col-md-2 my-5">
                    <h5>About</h5>
                    <a href="about.html">About Us</a><br>
                    <a href="nutrition.html">Nutrition</a><br>
                    <a href="career.html">Career</a>
                </div>
                <div class="col-md-2 my-5">
                    <h5>Our Policies</h5>
                    <a href="privacy.html">Privacy</a><br>
                    <a href="#">Terms & Conditions</a>
                    <a href="r-disclosure.html">Responsible Disclosure</a>
                    <a href="faq.html">FAQS & HELP</a>
                </div>
                <div class="col-md-2 my-5">
                    <h5>Visit Pizza Hut</h5>
                    <a href="locate.html">Locate a store</a><br>
                    <a href="global.html">Global Blog</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <center>
                        <div class="font_awesome my-4">
                            <h5>Follow us</h5>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                                </svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                                </svg></a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <p>Order a delicious Pizza on the go, anywhere, anytime. Pizza Hut is happy to assist you with your
                        home delivery. Every time you order, you get a hot and fresh pizza delivered at your doorstep in
                        less than thirty minutes. *T&C Apply.</p>
                    <center>
                        <p>Hurry up and place your order now!<br>
                            © 2024 Pizza Hut India. All rights reserved. License Number: 10017011004220</p>
                    </center><br>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>