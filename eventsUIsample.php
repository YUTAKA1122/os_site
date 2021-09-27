<?php
include 'action.php';
$user_id = $_SESSION['id'];
$item_id = $_GET['item_id'];

$userItemCondition = $functionObj->read_user_item_condition($user_id, $item_id);
$items = $functionObj->read_specific_items($item_id);
$data = $functionObj->get_one_item($item_id);

$cart = $functionObj->read_user_item($user_id, $item_id);
$act_1 = $functionObj->get_one_act($cart['act_id1']);
$act_2 = $functionObj->get_one_act($cart['act_id2']);


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php
    include 'navbarUI.php';


    ?>
    <div class="container-fluid">
        <!-- Background image -->
        <div class="bg-image" style="
      background-image: url('assets/img/os.jpg');
      background-size:cover;
      height: 100vh;">
        <!-- Background image -->

        <div class="col-10 mx-auto">
            <h1><?php echo $data['iname'] ?><br>
        <?php echo $cart['idate']?></h1>
        </div>

        <div class="col-10 mx-auto">
            <?php
            // echo "<pre>";
            //     var_dump ($userItemCondition);
            // echo "</pre>";

            if ($userItemCondition == "reserved") {
                ?>
                <h4 style="color:red;">You've already reserved this event.</h4>
                <?php
                if ($item_id == 2) {
            ?>
                    <table class="table table-light text-center w-75">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Activity1</th>
                                <th>Activity2</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $cart['idate'] ?></td>
                                <td><?php echo $act_1['aname'] ?></td>
                                <td><?php echo $act_2['aname'] ?></td>
                                <td>
                                    <a href="updateEventUI.php?cart_id=<?php echo $cart['cart_id'] ?>" class="btn btn-dark  ">Update</a>
                                    <a href="removeCheck.php?cart_id=<?php echo $cart_id ?>" class="btn btn-dark  ">Cancel</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                } else {
                ?>
                    <table class="table table-light text-center">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Activity</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $cart['idate'] ?></td>
                                <td><?php echo $act_1['aname'] ?></td>
                                <td>
                                <a href="updateEventUI.php?cart_id=<?php echo $cart['cart_id'] ?>" class="btn btn-dark  ">Update</a>
                                    <a href="removeCheck.php?cart_id=<?php echo $cart_id ?>" class="btn btn-dark  ">Cancel</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                }
            } else {
                foreach ($items as $row) :
                    $id = $row['item_id'];
                ?>
                    <div class="col-3">
                        <div class="card mt-3">
                            <div class="card-header">
                                DATE:<?php echo $row['idate']; ?><br>
                            </div>
                            <div class="card-body text-center">
                                <?php
                                echo "<a href='activitiesUI.php?item_id=$id' class='btn btn-primary w-75'>Details & Reservation</a>";
                                ?>

                            </div>
                        </div>
                    </div>
            <?php endforeach;
            } ?>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>