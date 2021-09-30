<?php
include 'action.php';
$user_id = $_SESSION['id'];

$data = $functionObj->read_user_cart_items($user_id);
$account = $functionObj->get_one_user($user_id);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php
    include "navbarUI.php"
    ?>


    <div class="container-fluid">
        <h1>Your Current Reservations</h1>
        <table class="table text-center">
            <thead class="thead-dark">
                <th>Event name</th>
                <th>Date</th>
                <th>Activity1</th>
                <th>Activity2</th>
                <th colspan="2">Option</th>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) :
                    $cart_id = $row['cart_id'];
                    $act1 = $functionObj->get_one_act($row['act_id1']);
                    $act2 = $functionObj->get_one_act($row['act_id2']);
                ?>
                    <tr>
                        <td><?php echo $row['iname'] ?></td>
                        <td><?php echo $row['idate'] ?></td>
                        <td><?php echo $act1['aname'] ?></td>
                        <td><?php echo $act2['aname'] ?></td>
                        <td><a href="removeCheck.php?cart_id=<?php echo $cart_id ?>" class="btn btn-primary w-75">Cancel</a></td>
                        <td><a href="updateEventUI.php?cart_id=<?php echo $cart_id ?>" class="btn btn-primary w-75">Update</a></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

        <hr>

        <h1>Your Account</h1>
        <table class="table text-center">
            <thead class="thead-dark">
                <th>Family Name</th>
                <th>First Name</th>
                <th>Email</th>
                <th colspan="2">Option</th>
            </thead>
            <tbody>
                <td><?php echo $account['lname'] ?></td>
                <td><?php echo $account['fname'] ?></td>
                <td><?php echo $account['email'] ?></td>
                <td><a href="updateSelf.php?user_id=<?php echo $user_id ?>" class="btn btn-primary w-75">Update</a></td>
                <td><a href="deleteSelfCheck.php?user_id=<?php echo $user_id ?>" class="btn btn-danger w-75">Delete</a></td>
            </tbody>


    </div>








    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>