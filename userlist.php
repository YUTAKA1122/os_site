<?php
include 'action.php';
$userlist = $functionObj->read_users();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userlist</title>
                <!-- Bootstrap CSS v5.0.2 -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    include 'navbar.php';

    ?>

    <div class="container-fluid">
        <div class="row">
            <?php foreach($userlist as $row):
                $id = $row['user_id'];
            ?>
            <div class="col-3">
                <div class="card mt-3">
                    <div class="card-header">
                        LASTNAME:<?php echo $row['lname'];?><br>
                        FIRSTNAME:<?php echo $row['fname'];?><br>
                        ROLE:<?php echo $row['role'];?><br>
                    </div>
                    <div class="card-body text-center">
                        <a href="updateUser.php?user_id=<?php echo $id?>" class="btn btn-primary w-75">Update User</a>
                        <a href="userDeleteCheck.php?user_id=<?php echo $id?>" class="btn btn-danger w-75">Delete User</a>
                    </div>                    
                </div>
            </div>
            <?php endforeach;?>
        </div>

    </div>







    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>