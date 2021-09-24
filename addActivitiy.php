<?php
include 'action.php';
$id = $_GET['item_id'];

$data = $functionObj-> get_one_item($id);
$event_id = $data['event_id'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
                <!-- Bootstrap CSS v5.0.2 -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
include 'navbar.php';

?>

    <div class="card mx-auto w-50 mt-3">
            <div class="card-header bg-warning">
                <p class="lead text-center display-5 mt-3">
                    REGISTER AN ACTIVITY
                </p>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <table class="mx-auto">
                        <tr>
                            <td>
                                <label for="aname">Activity Name</label>
                            </td>
                            <td>
                                <input type="text" name="aname" id="aname" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="adesc">DESCRIPTION</label>
                            </td>
                            <td>
                                <input type="text" name="adesc" id="adesc" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="capacity">CAPACITY</label>
                            </td>
                            <td>
                                <input type="text" name="capacity" id="capacity" class="form-control">
                            </td>
                        </tr>

                    </table>
                    <div class="text-center">
                        <button type="submit" name="newEvent" class="btn btn-primary mt-3">REGISTER</button>
                    </div>
                </form>
                <div class="text-center">
                    <?php
                    if (isset($_POST['newEvent'])) {
                        $aname = $_POST['aname'];
                        $adesc = $_POST['adesc'];
                        $capacity = $_POST['capacity'];

                        $functionObj->add_event($event_id, $aname, $adesc, $capacity);
                    ?>

                    <table class="table table-bordered text-center">
                    <tr>
                        <th>Event</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Capacity</th>
                    </tr>
                    <tr>
                        <td><?php echo $data['iname']?></td>
                        <td><?php echo $aname; ?></td>
                        <td><?php echo $adesc; ?></td>
                        <td><?php echo $capacity; ?></td>
                    </tr>
                </table>

                <?php

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