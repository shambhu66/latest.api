<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest For All</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <section id="nav-bar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href="#"><img src="images/logo.ico"></a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler"></span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">PRICING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                    </li>
                      <p style="color:yellow;"> Welcome, <?php echo $_SESSION['username']; ?> </p>
                    <div class="mx-1">
                       <a href="./logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </ul>
            </div>
        </nav>
    </section>
    <div id="slider">
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="images/science.webp">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About US</h2>
                    <div class="about-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                        inventore harum ex magni, dicta impedit.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                        inventore harum ex magni, dicta impedit.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                        inventore harum ex magni, dicta impedit.
                    </div>
                    <button type="button" class="btn btn-primary">Read More >></button>
                </div>
                <div class="col-md-6 skills-bar">
                    <p>Wordpress website</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%;">80%</div>
                    </div>
                    <p>Woo-Commerce website</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 65%;">65%</div>
                    </div>
                    <p>Data Entry</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 90%;">90%</div>
                    </div>
                    <p>Redesign</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%;">100%</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services-->
        <section id="services">
            <div class="container">
                <h1>Our Services</h1>
                <div class="row services">
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <h3>Web Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-tablet"></i>
                        </div>
                        <h3>App Development</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <h3>Digital Marketing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>
                        <h3>Graphic designing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="promo">
            <div class="container">
                <p>Get free domain name and hosting</p>
                <a href="#" class="btn btn-primary">Contact Us</a>
            </div>
        </section>
        <section id="price">
            <div class="container">
                <h1>Price Plan</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>Free</h2>
                                <p>$0<span>Month</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>5GB space</li>
                                    <li><i class="fa fa-check-circle"></i>10GB Bandwidth</li>
                                    <li><i class="fa fa-times-circle"></i>15GB Email Accounts</li>
                                    <li><i class="fa fa-times-circle"></i>Unlimited Domains</li>
                                    <li><i class="fa fa-times-circle"></i>Unlimited Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="#">Join Free</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>Start-up</h2>
                                <p>$10<span>Month</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>50GB space</li>
                                    <li><i class="fa fa-check-circle"></i>100GB Bandwidth</li>
                                    <li><i class="fa fa-check-circle"></i>25GB Email Accounts</li>
                                    <li><i class="fa fa-check-circle"></i>Unlimited Domains</li>
                                    <li><i class="fa fa-times-circle"></i>Unlimited Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>Business</h2>
                                <p>$50<span>Month</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>200GB space</li>
                                    <li><i class="fa fa-check-circle"></i>150GB Bandwidth</li>
                                    <li><i class="fa fa-check-circle"></i>15GB Email Accounts</li>
                                    <li><i class="fa fa-check-circle"></i>Unlimited Domains</li>
                                    <li><i class="fa fa-check-circle"></i>Unlimited Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>Advance</h2>
                                <p>$100<span>Month</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>200GB space</li>
                                    <li><i class="fa fa-check-circle"></i>Unlimited Bandwidth</li>
                                    <li><i class="fa fa-check-circle"></i>Unlimited Accounts</li>
                                    <li><i class="fa fa-check-circle"></i>Unlimited Domains</li>
                                    <li><i class="fa fa-check-circle"></i>Unlimited Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Grid-->
            <section class="page-section bg-light" id="portfolio">
                <div class="container">
                    <h1>Portfolio</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-plus fa-5x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/01-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-plus fa-5x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/02-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Explore</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-plus fa-5x"></i></i></div>
                                </div>
                                <img class="img-fluid" src="images/03-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Finish</div>
                                <div class="portfolio-caption-subheading text-muted">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-plus fa-5x"></i></i></div>
                                </div>
                                <img class="img-fluid" src="images/04-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lines</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-plus fa-5x"></i></i></div>
                                </div>
                                <img class="img-fluid" src="images/05-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-plus fa-5x"></i></i></div>
                                </div>
                                <img class="img-fluid" src="images/06-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal"><img src="images/close-icon.svg"
                                    alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project Details Go Here-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img class="img-fluid d-block mx-auto" src="images/01-full.jpg" alt="" />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>Date: January 2020</li>
                                                <li>Client: Threads</li>
                                                <li>Category: Illustration</li>
                                            </ul>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fa fa-times mr-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2-->
                <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal"><img src="images/close-icon.svg"
                                    alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project Details Go Here-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img class="img-fluid d-block mx-auto" src="images/02-full.jpg" alt="" />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>Date: January 2020</li>
                                                <li>Client: Explore</li>
                                                <li>Category: Graphic Design</li>
                                            </ul>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fa fa-times mr-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3-->
                <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal"><img src="images/close-icon.svg"
                                    alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project Details Go Here-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img class="img-fluid d-block mx-auto" src="images/03-full.jpg" alt="" />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>Date: January 2020</li>
                                                <li>Client: Finish</li>
                                                <li>Category: Identity</li>
                                            </ul>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fa fa-times mr-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 4-->
                <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal"><img src="images/close-icon.svg"
                                    alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project Details Go Here-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img class="img-fluid d-block mx-auto" src="images/04-full.jpg" alt="" />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>Date: January 2020</li>
                                                <li>Client: Lines</li>
                                                <li>Category: Branding</li>
                                            </ul>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fa fa-times mr-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 5-->
                <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal"><img src="images/close-icon.svg"
                                    alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project Details Go Here-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img class="img-fluid d-block mx-auto" src="images/05-full.jpg" alt="" />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>Date: January 2020</li>
                                                <li>Client: Southwest</li>
                                                <li>Category: Website Design</li>
                                            </ul>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fa fa-times mr-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 6-->
                <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal"><img src="images/close-icon.svg"
                                    alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project Details Go Here-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img class="img-fluid d-block mx-auto" src="images/06-full.jpg" alt="" />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>Date: January 2020</li>
                                                <li>Client: Window</li>
                                                <li>Category: Photography</li>
                                            </ul>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fa fa-times mr-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer-->
                <section class="footer">
                    <footer id="bottom" class="py-4 bg-dark">


                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="font-italic text-center text-white ">Important link</h4>
                                <ol class="list-unstyled text-center">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Pricacy & Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ol>
                            </div>
                            <div class="col-md-4">
                                <h4 class="font-italic text-center text-white">Services</h4>
                                <ol class="list-unstyled text-center">
                                    <li><a href="#">Cars</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Mobiles</a></li>

                                </ol>
                            </div>
                            <div class="col-md-4">
                                <h4 class="font-italic text-center text-white">Follow US</h4>
                                <ol class="list-unstyled text-center">
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Youtube</a></li>
                                    <li><a href="#">Facebook</a></li>
                                </ol>
                            </div>

                        </div>
                        <div class="container my-4">
                            <p class="float-right "><a href="#">Back to top</a></p>
                            <p class="text-center text-danger"><a href="https://www.latestforall.com">&copy;2020
                                    LatestForAll | All Rights Reserved </p>
                        </div>

                    </footer>
                </section>
</body>

</html>