<!doctype html>
<html lang="en">
<head>
    <!--
    this is the admin panel,

    todo: protect from SQL injections

  -->
    <title>Very legitimate bankign service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">Banker<span
                                    class="text-primary">.</span> </a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="index.html" class="nav-link">Home</a></li>
                            <li class="has-children">
                            </li>
                            <li><a href="login.html" class="nav-link">Login</a></li>
                            <li class="social"><a href="#contact-section" class="nav-link"><span
                                            class="icon-facebook"></span></a></li>
                            <li class="social"><a href="#contact-section" class="nav-link"><span
                                            class="icon-twitter"></span></a></li>
                            <li class="social"><a href="#contact-section" class="nav-link"><span
                                            class="icon-linkedin"></span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                                class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>

    <footer class="site-footer">
        <div class="container">
            <h2 class="footer-heading mb-4">Target Search</h2>
            <form action="admin.php" method="get" class="footer-subscribe">
                <div class="input-group mb-3">
                    <input type="text" class="form-control border-secondary text-white bg-transparent"
                           placeholder="Search victim Email" name="email" aria-describedby="button-addon2">
                </div>
<!--                <div class="input-group mb-3">-->
<!--                    <input type="password" class="form-control border-secondary text-white bg-transparent"-->
<!--                           placeholder="Password" name="pass" aria-describedby="button-addon2">-->
<!--                </div>-->

                <div class="input-group mb-3">
                    <button class="btn btn-primary text-black" type="submit">Search</button>
                </div>
            </form>
            <?php
            $srv = "localhost";
            $db = "ccdump";
            $user = "admin";
            $pass = "cGFzc3dvcmQ=";


            echo "hello " . $user . " you can search for new creds here! <br><br>";

            $conn = new mysqli($srv, $user, $pass, $db);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM customers where email = '$_GET[email]'";
            $result = $conn->query($sql);

            if (!empty($result)) {
                echo "<table><tr><th>Email</th><th>Pass</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["email"] . " </td><td>" . $row["pass"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "make a search";
            }
            $conn->close();
            ?>
        </div>
    </footer>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="footer-heading mb-4">About Us</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam
                                voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <h2 class="footer-heading mb-4">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#about-section" class="smoothscroll">Terms</a></li>
                                <li><a href="#about-section" class="smoothscroll">Policy</a></li>
                                <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                                <li><a href="#services-section" class="smoothscroll">Services</a></li>
                                <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                                <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 footer-social">
                            <h2 class="footer-heading mb-4">Follow Us</h2>
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                    <form action="#" method="post" class="footer-subscribe">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary text-white bg-transparent"
                                   placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-black" type="button" id="button-addon2">Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p class="copyright"><small>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | This template is made with <i class="icon-heart text-danger"
                                                                                    aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </small></p>

                    </div>
                </div>

            </div>
        </div>
    </footer>

</div> <!-- .site-wrap -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>


<script src="js/main.js"></script>


</body>
</html>