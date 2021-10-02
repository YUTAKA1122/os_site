<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="login/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="login/assets/mp4/bg.mp4" type="video/mp4" />
    </video>
    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">


                <h1 class="fst-italic lh-1 mt-4">Resister</h1>
                <p class="mb-1">Please make your account below, or go back to <a href="index.php">Top Page</a> or <a href="login.php">Login Page</a>.</p>
                <form action="" method="post" id="register" data-sb-form-api-token="API_TOKEN">
                    <div class="input-group-newsletter">
                        <div class="row">
                        <div class="col"><input class="form-control" name="lname" id="lname" type="text" placeholder="Enter your Family name" aria-label="Enter your Family name" required /></div>
                        <div class="col"><input class="form-control" name="fname" id="fname" type="text" placeholder="Enter your First name" aria-label="Enter your First name" required /></div>
                        </div>
                        <div class="col"><input class="form-control" name="email" id="email" type="email" placeholder="Enter your email address" aria-label="Enter your email address" required /></div>
                        <div class="col"><input class="form-control" name="password" id="password" type="password" placeholder="EEnter your email address" aria-label="Enter your email address" required /></div>
                        <div class="col-auto"><button class="btn btn-primary" name="register_user" id="submitButton" type="submit">Register</button></div>

                        <?php
                include 'action.php';
                ?>


                    </div>
                    <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback mt-2" data-sb-feedback="password:required">A password is required.</div>
                    <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>
                </form>

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