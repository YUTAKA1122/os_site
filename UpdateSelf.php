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
    <title>Update an item</title>
                <!-- Bootstrap CSS v5.0.2 -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
include 'navbarUI.php';

?>

    <div class="container-fluid">
        <div class="card mx-auto w-50 text-center">
            <div class="card-header">
                <p class="lead">
                    Account Update
                </p>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <table class="table text-center">
                        <tr>
                            <td>
                                <label for="iname">Family Name</label>
                            </td>
                            <td>
                                <input type="text" name="lname" value="<?php echo $data['lname']?>" id="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="itarget">First Name</label>
                            </td>
                            <td>
                                <input type="text" name="fname" value="<?php echo $data['fname']?>" id="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="itarget">email</label>
                            </td>
                            <td>
                                <input type="text" name="email" value="<?php echo $data['email']?>" id="" class="form-control">
                            </td>
                        </tr>

                    </table>
                    <div class="row text-center">
                        <button type="submit" name="updateSelf" class="btn btn-primary mt-3 col-6">UPDATE</button>
                        <a href="index.php" class="btn btn-dark mt-3 col-6">Back</a>
                        <?php
                    if (isset($_POST['updateSelf'])) {
                        $lname = $_POST['lname'];
                        $fdesc = $_POST['fname'];
                        $email = $_POST['email'];

                        $functionObj->update_user($lname, $fname, $email, $id);
                    ?>

                    <table class="table table-bordered text-center">
                    <tr>
                        <th>Family Name</th>
                        <th>First Name</th>
                        <th>email</th>
                    </tr>
                    <tr>
                        <td><?php echo $lname?></td>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $email; ?></td>
                    </tr>
                </table>

                <?php

                    }

                    ?>

                        
                        <hr>
                        
                    </div>
                    
                </form>
                <div class="card-footer">
                    <form action="" method="post">
                    <p class="lead">Password Update</p>
                        <input type="password" name="password1" id="" class="form-control" placeholder="current password">   
                        <input type="password" name="password2" id="" class="form-control mt-3" placeholder="new password">
                        <input type="password" name="password3" id="" class="form-control" placeholder="confirm new password">
                        <button type="submit" class="btn btn-secondary" name="passUpdate">Submit</button>
                    </form>
                    <?php
                if(isset($_POST['passUpdate'])){
                    $password1 = md5($_POST['password1']);
                    $password2 = md5($_POST['password2']);
                    $password3 = md5($_POST['password3']);
                    $pass = $data['password'];

                    if($password1== $pass){
                        if($password2 == $password3){
                            $functionObj->update_password($password2,$id);
                        }else{
                            echo "New passwords are not the same.";
                        }
                    }else{
                        echo "Your current password does not match.";
                    }
                }
                
                ?>

                </div>
            </div>



        </div>




    </div>










    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>