<?php
// Connect to MySQL database
$mysqli = new mysqli("localhost", "root", "", "lab_management");

// Check connection
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

// Fetch components
$sql = "SELECT id, name, quantity, photo, category FROM components";
$result = $mysqli->query($sql);
if (!$result) {
    die("Query failed: " . $mysqli->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Shopping | RM506</title>
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
        body {
            background-color: #f8f9fa;
            font-family: 'Nunito', sans-serif;
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
        }



        .card img {
            height: 150px;
            object-fit: contain;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .btn-primary1 {
            background-color: #17A2B8;
            border: none;
            color: white;
        }

        .btn-primary {
            background-color: rgba(4, 97, 52, 0.91);
            border: none;
        }

        .btn-primary:hover {
            background-color: #17A2B8;
            border: none;
        }

        .custom-width-container {
            width: 85vw;
            margin: 0 auto;
        }



        /* Countdown Section */
        #hot-deal.section {
            padding: 60px 0;
            margin: 30px 0;
            background-color: #E4E7ED;
            background-image: url('../img/banner.png');
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
            display: inline-block;
            width: 100px;
            height: 100px;
            background: #D10024e6;
            text-align: center;
            border-radius: 50%;
            margin: 0 5px;
            position: relative;
        }

        .hot-deal .hot-deal-countdown>li>div {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
        }

        .hot-deal .hot-deal-countdown h3,
        .hot-deal .hot-deal-countdown span {
            color: #fff;
            margin: 0;
        }

        .hot-deal p {
            text-transform: uppercase;
            font-size: 24px;
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
                <a href="login.php" class="btn btn-primary1 px-4">Login</a>
                <a href="signup.php" class="btn btn-primary1 px-4 ml-2">Sign up</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


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






    <div class="custom-width-container py-5">

        <h2 class="mb-4 text-center font-weight-bold">Available Components</h2>
        <div class="row">

            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-md-3 mb-4">


                    <div class="card h-100 text-center shadow-sm">
                        <img src="<?php echo htmlspecialchars($row['photo']); ?>" class="card-img-top p-3"
                            alt="<?php echo htmlspecialchars($row['name']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                            <p class="card-text">Qty: <?php echo htmlspecialchars($row['quantity']); ?></p>
                            <form action="login.php">
                                <input type="hidden" name="component_id" value="<?php echo $row['id']; ?>">
                                <input type="number" name="quantity" class="form-control mb-2" min="1"
                                    max="<?php echo $row['quantity']; ?>" placeholder="Enter quantity" required>
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fas fa-cart-plus"></i> Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>

    <!-- Bootstrap JS & dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>









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