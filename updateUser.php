<?php
include 'action.php';
$id = $_GET['user_id'];

$data = $functionObj-> get_one_user($id);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update a user</title>
                <!-- Bootstrap CSS v5.0.2 -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
include 'navbar.php';

?>

    <div class="container-fluid">
        <div class="card mx-auto w-50">
            <div class="card-header">
                <p class="lead text-center">
                    UPDATE A USER
                </p>
            </div>
            <div class="card-body">
                <form action="action.php?id=<?php echo $id?>" method="post">
                    <table>
                        <tr>
                            <td>
                                <label for="lname">FAMILY NAME</label>
                            </td>
                            <td>
                                <input type="text" name="lname" value="<?php echo $data['lname']?>" id="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="fname">FIRST NAME</label>
                            </td>
                            <td>
                                <input type="text" name="fname" value="<?php echo $data['fname']?>" id="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">EMAIL</label>
                            </td>
                            <td>
                                <input type="text" name="email" value="<?php echo $data['email']?>" id="" class="form-control">
                            </td>
                        </tr>
                                <input type="hidden" name="id" value="<?php echo $data['user_id']?>" id="" class="form-control">


                    </table>
                    <div class="row text-center">
                        <button type="submit" name="updateUser" class="btn btn-primary mt-3 col-6">UPDATE</button>
                        <a href="userlist.php" class="btn btn-dark mt-3 col-6">Back</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>