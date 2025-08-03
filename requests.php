<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Requests | RM506</title>
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
        .form-group.d-flex select,
        .form-group.d-flex input {
            border-radius: 0;
        }

        .form-group.d-flex select {
            max-width: 100px;
            flex-shrink: 0;
        }

        .form-group.d-flex input {
            flex-grow: 1;
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


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Popular Lab Rooms</span>
                </p>
                <h1 class="mb-4">Practise for Your Personal Works</h1>
            </div>

        </div>
    </div>
    <!-- Class End -->

    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5">
                        <span class="pr-2">Book A Seat or Table</span>
                    </p>
                    <h1 class="mb-4">Follow the Instructions</h1>
                    <p>
                        Secure your spot now to focus on your personal work without distractions. Booking a seat ensures
                        a dedicated space tailored to your productivity needs.
                    </p>
                    <ul class="list-inline m-0">
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Use UIU ID Card Name
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Use UIU mail address
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Find out Available Rooms
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Book A Seat</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="login.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control border-0 p-4"
                                        placeholder="Your ID Card Name" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control border-0 p-4"
                                        placeholder="Your Email Address" required />
                                </div>
                                <div class="form-group d-flex">
                                    <select class="custom-select border-0 px-4" style="width: 100px;" disabled>
                                        <option selected>+880</option>
                                    </select>
                                    <input type="tel" name="phone" class="form-control border-0 p-4 ml-2"
                                        placeholder="1XXXXXXXXX" pattern="[1-9][0-9]{8}"
                                        title="Enter a valid Bangladeshi phone number (9 digits after +880)"
                                        maxlength="9" inputmode="numeric" required />
                                </div>
                                <div class="form-group">
                                    <select name="room" class="custom-select border-0 px-4" style="height: 47px"
                                        required>
                                        <option value="" disabled selected>Select Available Room</option>
                                        <option value="326">326</option>
                                        <option value="622">622</option>
                                        <option value="524">524</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-secondary btn-block border-0 py-3">
                                        Book Now
                                    </button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>



</body>

</html>