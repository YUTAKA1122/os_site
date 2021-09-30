<?php
include 'action.php';
$id = 0;
$id = $_SESSION['id'];
$functionObj->get_one_user($id);
$lname = $_SESSION['lname'];
$fname = $_SESSION['fname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Start Open School</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/os_barner.PNG" style="height:2rem;" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" href="#articles">What's NEW</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">This Year</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <?php
                    if ($id == 0) {
                    } else {
                    ?>
                        <li class="nav-item"><a class="nav-link text-primary" href="eventlistUI.php">Reservation</a></li>
                        <li class="nav-item"><a class="nav-link text-info" href="logout.php">Logout</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <?php
            if ($id == 0) {
                echo "<div class='masthead-subheading'>Welcome To Our School!</div>";
                echo "<div class='masthead-heading text-uppercase'>It's Nice To Meet You</div>";
                echo "<a class='btn btn-primary btn-xl text-uppercase' href='login.php'>login</a>";
            } else {
                echo "<div class='masthead-subheading'>Welcome Back! $lname $fname さん</div>";
                echo "<div class='masthead-heading text-uppercase'>Enjoy Our School</div>";
            }
            ?>
        </div>
    </header>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Schedule</h2>
                <h3 class="section-subheading text-muted">Events you can take this year</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/first.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <?php
                            if ($id == 0) {
                                echo "<h4>First Meeting</h4>";
                            } else {
                            ?>
                                <h4><a href="eventsUI.php?item_id=1">First Meeting</a></h4>
                            <?php
                            }
                            ?>
                            <h4 class="subheading">For Parents
                            </h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">May 22th/29th, June 26th, July 10th<br>You can get to know about our school life!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <?php
                            if ($id == 0) {
                                echo "<h4>Open School</h4>";
                            } else {
                            ?>
                                <h4><a href="eventsUI.php?item_id=2">Open School</a></h4>
                            <?php
                            }
                            ?>
                            <h4 class="subheading">For Students & Parents</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Elementary school students: Jul 31st<br>Junior high school students: Aug 6th/7th</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <?php
                            if ($id == 0) {
                                echo "<h4>Check & Challenge Exams!</h4>";
                            } else {
                            ?>
                                <h4><a href="eventsUI.php?item_id=3">Check & Challenge Exams!</a></h4>
                            <?php
                            }
                            ?>
                            <h4 class="subheading">For Students & Parents</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Elementary school students: Oct 30th, Nov 6th/20th/27th<br>Junior high school students: Oct 16th/30th, Nov 6th/27th</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/5.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <?php
                            if ($id == 0) {
                                echo "<h4>Entrance Exams</h4>";
                            } else {
                            ?>
                                <h4><a>Entrance Exams</a></h4>
                                <div class="text-warning" style="font-style:italic;">Coming Soon...</div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">For JHS Jan 6th<br>For HS Feb 1st/3rd</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Articles -->

    <section class="page-section bg-light" id="articles">

        <div class="container-fluid col-10 mx-auto text-center">
            <h2 class="section-heading text-uppercase">What's NEW!</h2>
            <h3 class="section-subheading text-muted">Check updates on this site!</h3>
            <div class="col-10 w-75 mx-auto border border-dark rounded bg-white" style="height:150px; overflow:scroll;">
                <?php
                $article_list = $functionObj->read_articles();

                foreach ($article_list as $row) :
                    $id = $row['art_id'];
                    $date = $row['art_date'];
                ?>
                    <div class="mt-2">
                        <?php echo $row['art_date']; ?>
                        <span style="font-weight:bold;"><?php echo "  " . $row['art_desc']; ?></span>

                        <!-- NEW! or not -->
                        <?php
                        $today = date('Y-m-d');
                        $time1 = new DateTime($date);
                        $time2 = new DateTime($today);

                        $interval = $time1->diff($time2);
                        $day = $interval->d;

                        if ($day < 7) {
                            echo "<span class='text-danger'>NEW</span>";
                        } else {
                        }

                        ?>
                        <!-- NEW! or not -->


                        <br>
                        <hr>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">This Year</h2>
                <h3 class="section-subheading text-muted">Our Achievement of This Year</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Path After Graduation</h4>
                    <p class="text-muted"><a href="https://japanuniversityrankings.jp/rankings/total-ranking/" target="_blank" rel="noopener noreferrer">Tokyo University 2<br>Tohoku University 10<br>and so on...</a></p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Club Activity</h4>
                    <p class="text-muted">The clubs that Joined National Competition<br>Baseball,Swimming,Judo,Debate</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Our Vision</h4>
                    <p class="text-muted">We will admit girls from this year.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">High School Courses</h2>
                <h3 class="section-subheading text-muted">Our high school has three unique courses.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/UL.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Univ. linked Course</div>
                            <div class="portfolio-caption-subheading text-muted">University Connected</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/adjr.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">General Course</div>
                            <div class="portfolio-caption-subheading text-muted">Do what you LIKE</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/gen.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Advanced Course</div>
                            <div class="portfolio-caption-subheading text-muted">VE RI TAS</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <h2 class="section-heading text-uppercase">Junior High School Courses</h2>
                <h3 class="section-subheading text-muted">Our junior high school has two unique courses.</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/genjr.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">General Course</div>
                            <div class="portfolio-caption-subheading text-muted">The same as Public Schools, but unique.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/adv.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Advanced Course</div>
                            <div class="portfolio-caption-subheading text-muted">Practice makes perfect.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">We welcome you in every event.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/7.jpg" alt="..." />
                        <h4>Yutaka Namioka</h4>
                        <p class="text-muted">English & Web Developer</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/5.jpg" alt="..." />
                        <h4>Rich Brook</h4>
                        <p class="text-muted">Musician</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/6.jpg" alt="..." />
                        <h4>Job Cat</h4>
                        <p class="text-muted">On-site supervisor</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Tell us what you want. We'll make it!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">If you are interested in our school or this website, please feel free to contact us!</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Yutaka Namioka 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Univ. linked Course</h2>
                                <p class="item-intro text-muted">You can enter our university more directly!</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/UL.jpg" alt="..." />
                                <p>You can learn some subjects that you will learn in university. Of course, we would like you to study to make the most of the carriculum.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Classes in a week:</strong>
                                        32
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Univ.linked
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">General Course</h2>
                                <p class="item-intro text-muted">You can focus on studying, club, and other activities.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/adjr.jpg" alt="..." />
                                <p>Our alumni entered Tohoku University, joined national competitions, and became famous artists.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Classes in a week:</strong>
                                        32 + extra lessons
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close General
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Advanced Course</h2>
                                <p class="item-intro text-muted">Let's study! That's it!</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/gen.jpg" alt="..." />
                                <p>If you want to excel in something, what you need first is STUDY!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Classes in a week:</strong>
                                        35 + extra lessons
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Advanced
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">General Course</h2>
                                <p class="item-intro text-muted">Similar to public schools, but sophisticated.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/genjr.jpg" alt="..." />
                                <p>You can study as if you were in public school, but our carriculum is special: Two more English classes and one more science class.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Classes in a week:</strong>
                                        32
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close General
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Advanced Course</h2>
                                <p class="item-intro text-muted">You will be able to make a presentation in English in three years.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/adv.jpg" alt="..." />
                                <p>Let's go to Singapore in the third grade, which make you open your world.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Classes in a week:</strong>
                                        33 + extra lessons
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Advanced
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>