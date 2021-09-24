<?php
include 'action.php';
$id = $_GET['cart_id'];

$cart_data = $functionObj->get_one_cart_item($id);
$item = $functionObj->get_one_item($cart_data['item_id']);
$act_1 = $functionObj->get_one_act($cart_data['act_id1']);
$act_2 = $functionObj->get_one_act($cart_data['act_id2']);
$item_id = $cart_data['item_id'];
$event_id = $cart_data['event_id'];
$actsOfEvent = $functionObj->read_activities($event_id);
$user_id = $cart_data['user_id'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'navbarUI.php';

    ?>

    <div class="container-fluid">
        <div class="card mx-auto w-75">
            <div class="card-header">
                <p class="lead text-center">
                    Update Your Reservation<br>
                    Event Name :
                            <?php echo $item['iname'] ?>
                            <?php echo $item['idate'] ?>

                </p>
            </div>

            <div class="card-body">
                <form action="action.php" method="post">
                    <input type="hidden" name="cart_id" value=<?php echo $cart_id ?> class="form-control">

                    <div class="row">
                        <?php
                        if ($event_id == 2) {
                        ?>
                            <div class='text-center'>Activity1 : <?php echo $act_1['aname']?> is reserved.</div>

                        <?php
                            foreach ($actsOfEvent as $row) :
                                // $id = $row['item_id'];
                                $count1 = $functionObj->count_act1($item_id, $row['act_id']);
                                $capa1 = $functionObj->get_one_act($row['act_id']);
                        ?>
                                    <div class="card col-3 mt-3">
                                        <div class="card-header">
                                            <?php
                                            if ($capa1['capacity'] - $count1 == 0) {
                                                echo $row['aname'];
                                            } else {
                                            ?>

                                                <input type="radio" name="act1" id="" value=<?php echo $row['act_id'] ?> class="radio form-check-input"> <?php echo $row['aname']; ?><br>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                        <div class="card-footer text-center">
                                            <?php echo $count1 . " / " . $row['capacity']; ?>
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                            <hr>
                            <div class='text-center'>Activity2 : <?php echo $act_2['aname']?> is reserved.</div>
                            <?php
                            foreach ($actsOfEvent as $row) :
                                // $id = $row['item_id'];
                                $count2 = $functionObj->count_act2($item_id, $row['act_id'])
                            ?>
                                    <div class="card col-3 mt-3">
                                        <div class="card-header">
                                            <input type="radio" åname="act2" id="" value=<?php echo $row['act_id'] ?> class="radio form-check-input"> <?php echo $row['aname']; ?><br>
                                        </div>
                                        <div class="card-footer text-center">
                                            <?php echo $count2 . " / " . $row['capacity']; ?>
                                        </div>
                                    </div>
                            <?php endforeach; ?>

                            <?php
                        } else {
                            ?>
                            <div class='text-center'>
                                Activity1 : <?php echo $act_1['aname']?> is reserved.
                            </div>

                        <?php
                            foreach ($actsOfEvent as $row) :
                                // $id = $row['item_id'];
                                $count1 = $functionObj->count_act1($item_id, $row['act_id']);
                                $capa1 = $functionObj->get_one_act($row['act_id']);
                        ?>
                                    <div class="card col-3 mt-3">
                                        <div class="card-header">
                                            <?php
                                            if ($capa1['capacity'] - $count1 == 0) {
                                                echo $row['aname'];
                                            } else {
                                            ?>

                                                <input type="radio" name="act1" id="" value=<?php echo $row['act_id'] ?> class="radio form-check-input"> <?php echo $row['aname']; ?><br>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                        <div class="card-footer text-center">
                                            <?php echo $count1 . " / " . $row['capacity']; ?>
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                            <hr>
                        <?php
                        } ?>
                    </div>

                </form>


                </table>
                <div class="row text-center">
                    <button type="submit" name="updateEventUI" class="btn btn-primary mt-3 col-6">UPDATE</button>
                    <a href="eventlistUI.php" class="btn btn-dark mt-3 col-6">Back</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>