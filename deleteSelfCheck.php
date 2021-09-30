<?php
include 'action.php';
$id = $_GET['user_id'];

$data = $functionObj->get_one_user($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Check</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<?php
include 'navbarUI.php';

?>

    <div class="container">
        <div class="card mx-auto w-50">
            <div class="card-header">
                <p class="lead text-center">
                    Do you really want to delete this account?
                </p>
            </div>
            <div class="card-body">
                <table class="table border mx-auto w-75">
                    <tr>
                        <td>
                            <span>Family Name</span>
                        </td>
                        <td>
                            <?php echo $data['lname'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>First Name</span>
                        </td>
                        <td>
                            <?php echo $data['fname'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>email</span>
                        </td>
                        <td>
                            <?php echo $data['email'] ?>
                        </td>
                    </tr>
                </table>
                <div class="card-body text-center">
                    <form action="" method="post">
                        <div class="mt-3 text-start">Password</div>
                        <input type="password" name="password" id="" class="form-control" placeholder="Put your password here.">
                        <button type="submit" name="selfDelete" class="btn btn-danger mt-3 col-6">Delete</button>
                    </form>                    
                    <a href="index.php" class="btn btn-dark  mt-3 col-6">Back</a>

                </div>
                <?php
                if(isset($_POST['selfDelete'])){
                    $password = md5($_POST['password']);
                    if($_POST['password']== $data['password']){
                        $functionObj->delete_self($id);
                    }else{
                        echo "You have a wrong password.";
                    }
                }
                
                ?>
            </div>
        </div>
    </div>






    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>