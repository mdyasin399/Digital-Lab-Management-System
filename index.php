<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Index | RM506</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
#hot-deal.section {
  padding: 60px 0px;
  margin: 30px 0px;
  background-position: center;
  background-repeat: no-repeat;
}

.hot-deal {
  text-align: center;
}

.hot-deal .hot-deal-countdown {
  margin-bottom: 30px;
}

.hot-deal .hot-deal-countdown>li {
  position: relative;
  display: inline-block;
  width: 100px;
  height: 100px;
  background: #D10024e6;
  text-align: center;
  border-radius: 50%;
  margin: 0px 5px;
}

.hot-deal .hot-deal-countdown>li>div {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.hot-deal .hot-deal-countdown>li>div h3 {
  color: #FFF;
  margin-bottom: 0px;
}

.hot-deal .hot-deal-countdown>li>div span {
  display: block;
  font-size: 10px;
  text-transform: uppercase;
  color: #FFF;
}

.hot-deal p {
  text-transform: uppercase;
  font-size: 24px;
}

.hot-deal .cta-btn {
  margin-top: 15px;
}
.p {
  text color: white;
}

    </style>
</head>

<body>


<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="index.php" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
            <i class="fas fa-flask text-primary me-2"></i>
            <span class="text-primary">RM506</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="labs.php" class="nav-item nav-link">Labs</a>
                <a href="requests.php" class="nav-item nav-link">Requests</a>
                <a href="teachers.php" class="nav-item nav-link">Teachers</a>
                <a href="shopping.php" class="nav-item nav-link">Shopping</a>
                <a href="reviews.php" class="nav-item nav-link">Reviews</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="login.php" class="btn btn-primary px-4">Login</a>
            <a href="signup.php" class="btn btn-primary px-4 ml-2">Sign up</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Welcome to Epic Journey in the Electronics and Computer Labs</h4>
                <h1 class="display-3 font-weight-bold text-white">
            "Wires, Code, and Wisdom"
          </h1>
                <p class="text-white mb-4">
                    Circuits, code, caffeine, burning beakers, and late-night lab reports: the story of every student's survival in the lab.
                    <br> Here, you'll explore cutting-edge technologies, engage in hands-on projects, and unleash your creativity as you delve into the fascinating world of electronics and computing. You’ll learn to design innovative circuits, program software,
                    and collaborate with fellow enthusiasts to bring your ideas to life. Get ready to embark on an adventure that will inspire and equip you with essential skills for the future!
                </p>
                <a href="reviews.php" class="btn btn-secondary mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/header.png" alt="" />
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- Timer -->
<div id="hot-deal" class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal text-center">

                    <ul class="hot-deal-countdown list-inline d-flex justify-content-center mb-4">
                        <li class="mx-3">
                            <div>
                                <h3 id="days">00</h3>
                                <span>Days</span>
                            </div>
                        </li>
                        <li class="mx-3">
                            <div>
                                <h3 id="hours">00</h3>
                                <span>Hours</span>
                            </div>
                        </li>
                        <li class="mx-3">
                            <div>
                                <h3 id="minutes">00</h3>
                                <span>Mins</span>
                            </div>
                        </li>
                        <li class="mx-3">
                            <div>
                                <h3 id="seconds">00</h3>
                                <span>Secs</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">Project Show Timer</h2>
                    <p>All the best</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Timer -->



    <!-- All labs -->
    <div class="container-fluid pt-5">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Our Affiliated Labs</span>
            </p>
            <h1 class="mb-4">Where Innovation Joins Forces</h1>
        </div>
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <a href="labs.php"><img class="card-img-top mb-2" src="img/class-2.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;" />
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4 lab-box" style="padding: 30px">
                            <i class="flaticon-024-shape-toy h1 font-weight-normal text-primary mb-3"></i>
                            <div class="pl-4">
                                <h4>Computer Lab</h4>
                                <p class="m-0">This Computer Lab is a dedicated space equipped with computers, software, and networking infrastructure for tasks like programming, data analysis, and digital design. It provides users with access to specialized tools and
                                    environments for learning, research, and development in computer science and related fields.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <a href="labs.php"><img class="card-img-top mb-2" src="img/class-1.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;" />
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4 lab-box" style="padding: 30px">
                            <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                            <div class="pl-4">
                                <h4>Chemistry Lab</h4>
                                <p class="m-0">This Chemistry Lab is a controlled environment equipped with specialized equipment, chemicals, and safety measures for conducting experiments and analyzing chemical reactions. It typically includes tools like beakers, burners,
                                    fume hoods, and spectrometers to support research, education, and practical applications in chemistry.</p>
                            </div>
                        </div>
                    </a>
                </div>               
                <div class="col-lg-4 col-md-6 pb-1">
                    <a href="labs.php"><img class="card-img-top mb-2" src="img/class-3.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;" />
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4 lab-box" style="padding: 30px">
                            <i class="flaticon-039-seesaw h1 font-weight-normal text-primary mb-3"></i>
                            <div class="pl-4">
                                <h4>Electronics Lab</h4>
                                <p class="m-0">This Electronics Lab is a specialized workspace equipped with tools, instruments, and components for designing, testing, and building electronic circuits and devices. It typically includes oscilloscopes, multimeters, power
                                    supplies, and prototyping boards to support hands-on experimentation and innovation in electronics.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <a href="labs.php"><img class="card-img-top mb-2" src="img/Organic Pharmacy.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;" />
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4 lab-box" style="padding: 30px">
                            <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                            <div class="pl-4">
                                <h4>Organic Pharmacy</h4>
                                <p class="m-0">An Organic Chemistry lab is equipped for synthesizing, analyzing, and characterizing organic compounds. It includes fume hoods, glassware, spectrometers, chromatographs, and titration
                                    setups, along with essential safety gear and waste disposal systems. The lab supports reactions, purifications, and analytical techniques, enhancing understanding of organic chemistry.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <a href="labs.php"><img class="card-img-top mb-2" src="img/physiology.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;" />
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4 lab-box" style="padding: 30px">
                            <i class="flaticon-040-puzzle h1 font-weight-normal text-primary mb-3"></i>
                            <div class="pl-4">
                                <h4>Physiology Lab</h4>
                                <p class="m-0">A physiology laboratory supports the study of how living organisms function. It features tools like microscopes, spectrophotometers, centrifuges, and sensors to measure heart rate,
                                    muscle activity, respiration, and metabolism. The lab allows hands-on research in areas such as cellular, neuro-, cardiovascular, and exercise physiology, offering insights into biological system responses.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>               
                <div class="col-lg-4 col-md-6 pb-1">
                    <a href="labs.php"><img class="card-img-top mb-2" src="img/Microbiology.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;"  />
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4 lab-box" style="padding: 30px">
                            <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                            <div class="pl-4">
                                <h4>Microbiology Lab</h4>
                                <p class="m-0">A microbiology lab is designed to study microorganisms like bacteria, viruses, fungi, and protozoa. It includes equipment such as incubators, autoclaves, microscopes, and biosafety
                                    cabinets. Strict sterilization and safety protocols are followed to ensure accurate results, supporting research, diagnostics, and quality control in healthcare and industry.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- All Labs -->




<script>
    // Set your countdown target time (Bangladesh Time = UTC+6)
    let startTime = new Date("2025-06-30T12:00:00+06:00");

    function updateCountdown() {
        const now = new Date();
        const remaining = Math.floor((startTime - now) / 1000);

        if (remaining <= 0) {
            // Time has passed — stop countdown and show 00s
            document.getElementById("days").innerText = "00";
            document.getElementById("hours").innerText = "00";
            document.getElementById("minutes").innerText = "00";
            document.getElementById("seconds").innerText = "00";
            return;
        }

        const days = Math.floor(remaining / (3600 * 24));
        const hours = Math.floor((remaining % (3600 * 24)) / 3600);
        const minutes = Math.floor((remaining % 3600) / 60);
        const seconds = remaining % 60;

        document.getElementById("days").innerText = String(days).padStart(2, '0');
        document.getElementById("hours").innerText = String(hours).padStart(2, '0');
        document.getElementById("minutes").innerText = String(minutes).padStart(2, '0');
        document.getElementById("seconds").innerText = String(seconds).padStart(2, '0');
    }

    setInterval(updateCountdown, 1000);
    updateCountdown(); // initial call
</script>





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>