<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Contact | RM506</title>
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

    <!-- Contact Form Start -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="mb-3">Get In Touch</h1>
            <p>We'd love to hear from you. Fill out the form below to reach us.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="form-row">
                        <div class="control-group col-sm-6">
                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group col-sm-6">
                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                            required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" id="message" placeholder="Message"
                            required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>