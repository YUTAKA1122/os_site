<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="card col-6 mx-auto">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="text" name="email" id="" class="form-control" placeholder="email">
                        <input type="text" name="password" id="" class="form-control" placeholder="password">
                        <button type="submit" name="submit" class="btn btn-info">Login</button>
                    </form>
                </div>
                <?php
                include 'action.php';
                ?>

            </div>

            <div class="card col-6 mx-auto">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <form action="action.php" method="post">
                        <input type="text" name="lname" id="" class="form-control" placeholder="Family name">
                        <input type="text" name="fname" id="" class="form-control" placeholder="First name">
                        <input type="text" name="email" id="" class="form-control" placeholder="email">
                        <input type="text" name="password" id="" class="form-control" placeholder="password">
                        <button type="submit" name="register" class="form-control">Register</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>