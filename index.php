<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saaol</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <div class="contact d-flex justify-content-end">
                <p><i class="fa-brands fa-whatsapp"></i>72172-40783</p>
                <p><i class="fa-solid fa-phone"></i>72172-40783</p>
                <p><i class="fa-solid fa-envelope"></i>saaolheartclinic@gmail.com</p>
            </div>
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.html">
                <img src="images/pic1.png" height="60px" width="160px" alt="site icon">
                <span class="text-uppercase fw-lighter ms-2">Saaol</span>
            </a>
            <div class="order-lg-2 nav-btns">
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mt-4 mx-auto text-center flex-wrap d-flex">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <div class="dropdown">
                            <button class="dropbtn">ABOUT</button>
                            <div class="dropdown-content">
                                <a href="./about.html">Our Vision</a>
                                <a href="#">About Dr.</a>
                                <a href="#">Patient's Journey</a>
                                <a href="#">SAAOL Webinar</a>
                                <a href="#">Intruction For Patients</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <div class="dropdown">
                            <button class="dropbtn">HEART HEALTH</button>
                            <div class="dropdown-content">
                                <a href="#">Assess Risk</a>
                                <a href="#">Know Your Heart</a>
                                <a href="#">Causes</a>
                                <a href="#">Blogs</a>
                                <a href="#">Books</a>
                                <a href="#">Saaol E-Magazine</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <div class="dropdown">
                            <button class="dropbtn">TREATMENTS</button>
                            <div class="dropdown-content">
                                <a href="#">Overview</a>
                                <a href="#">Zero Oil Cooking</a>
                                <a href="./eecp_treatment.html">EECP Treatment</a>
                                <a href="#">Lifestyle</a>
                                <a href="#">Saaol Detox</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="./ortho-care.html">Ortho Care</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="https://www.google.com/maps/place/Saaol+Heart+Center/@27.8939378,78.0893445,17z/data=!3m1!4b1!4m6!3m5!1s0x3974a55ce42683d3:0x23e91d9e963fa159!8m2!3d27.8939378!4d78.0919194!16s%2Fg%2F11fjbkr2_0?entry=ttu"
                            target="_blank" class="btn"><i class="fa-solid fa-location-crosshairs mx-2"></i>Our
                            Center</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="./book-appointment.html" class="btn"><i class="fa-solid fa-phone mx-2"></i>Book
                            Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->
    <?php
      if(!empty($_POST["submit"])){
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $contact=$_POST["contact"];
        $email=$_POST["email"];
        $consult=$_POST["consult"];
        $country=$_POST["country"];
        $states=$_POST["states"];
        $toEmail="umangtarang.ut@gmail.com";
        $mailHeaders="First Name: ".$fname.
          "\r\n Last Name: ".$lname.
          "\r\n Contact Number: ".$contact.
          "\r\n Email: ".$email.
          "\r\n Consultation Type: ".$consult.
          "\r\n Country: ".$country.
          "\r\n State: ".$states."\r\n";
        if(mail($toEmail, $fname, $mailHeaders)){
          $message="Your appointment is booked successfully!";
        }
      }
     ?>
    <!-- Form -->
    <section class="form-sec">
        <form method="post" name="bookAppointment" class="d-flex flex-column justify-content-center align-items-center">
            <h2>Book an Appointment</h2>
            <h2>Get the Best Medical Consultation</h2>
            <label for="fname" class="m-2">Name</label>
            <input id="fname" placeholder="First" class="m-2" type="text" name="fname" required />
            <input placeholder="Last" class="m-2" type="text" name="lname" required />
            <label for="contact" class="m-2">Contact Number</label>
            <input id="contact" class="m-2" placeholder="Contact Number" type="tel" name="contact" required />
            <label for="email" class="m-2">Email</label>
            <input id="email" class="m-2" placeholder="Email" type="email" name="email" required />
            <label for="consult" class="m-2">Consultation Type</label>
            <select id="consult" class="m-2" name="consult" required>
                <option value="in-person">In Person with Doctor</option>
                <option value="online">Online with Dr. Bimal Chhajer (Consultation Charges 5000/-)
                </option>
            </select>
            <label for="country" class="m-2">Country</label>
            <select id="country" class="m-2" name="country" required>
                <option value="India">India</option>
                <option value="Nepal">Nepal</option>
                <option value="Bangladesh">Bangladesh</option>
            </select>
            <label for="states" class="m-2">Country</label>
            <select id="states" class="m-2" name="states" required>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chattisgarh">Chattisgarh</option>
            </select>
            <button type="submit" class="m-4" name="submit">Book Appointment</button>
            <?php if(!empty($message)){ ?>
            <div class="success">
              <strong><?php echo $message; ?></strong>
            </div>
            <?php } ?>
        </form>
    </section>
    <!-- footer -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row text-white g-4">
                <div class="col-md-6 col-lg-3">
                    <a href="./index.html"><img src="./images/pic1.png" style="width:150px" /></a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light">Links</h5>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="./index.html" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Home
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="./about.html" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>About
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Heart Health
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="./eecp_treatment.html" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Treatments
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Ortho Care
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Contact Us</h5>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-map-marked-alt"></i> House HIG 15, Avantika phase, 2, Ramghat Rd,
                            Kishanpur,
                            Aligarh, Uttar Pradesh 202001
                        </span>
                        <span class="fw-light">

                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="fw-light">

                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class="list-unstyled d-flex">
                            <li>
                                <a href="" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->
    <!-- static footer -->
    <div class="footer">
        <p class="footer-text-left">
            <a style="text-decoration: none; font: Poppins; font-size: 20px" href="https://goo.gl/maps/ZnP7dgxcLVPLdos56" class="menu">Branch</a>
            <a style="text-decoration: none; font: Poppins; font-size: 20px" href="https://wa.me/7217240783" class="menu">Whatsapp</a>
            <a style="text-decoration: none; font: Poppins; font-size: 20px" href="tel:721-724-0783" class="menu">Phone</a>
            <a style="text-decoration: none; font: Poppins; font-size: 20px" href="mailto:saaolheartclinic@gmail.com" class="menu">Email</a>
        </p>
    </div>
    <!-- jquery -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>
