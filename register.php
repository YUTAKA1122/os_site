<?php
include 'action.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Register</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'navbar.php';

    ?>


    <div class="container-fluid">
        <div class="card mx-auto w-50">
            <div class="card-header bg-warning">
                <p class="lead text-center display-5 mt-3">
                    REGISTER A NEW EVENT
                </p>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="text-center">
                        <input type="radio" name="iname" id="First Meeting" value="First Meeting" class="radio form-check-input"><label for="First Meeting">First Meeting　</label>
                        <input type="radio" name="iname" id="Open School" value="Open School" class="radio form-check-input"><label for="Open School">Open School　</label>
                        <input type="radio" name="iname" id="Check & Challenge" value="Check & Challenge" class="radio form-check-input"><label for="Check & Challenge">Check & Challenge</label>
                    </div>
                    <table class="mx-auto mt-3">
                        <tr>
                            <td>
                                <label for="idate">DATE</label>
                            </td>
                            <td>
                                <input type="date" name="idate" id="idate" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="itarget">TARGET</label>
                            </td>
                            <td>
                                <input type="radio" name="itarget" id="Parents" value="Parents" class="radio form-check-input"><label for ="Parents">Parents</label><br>
                                <input type="radio" name="itarget" id="Students & Parents" value="Students & Parents" class="radio form-check-input"><label for ="Students & Parents">Students & Parents</label><br>
                                <input type="radio" name="itarget" id="Students" value="Students" class="radio form-check-input"><label for ="Students">Students</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="idesc">DESCRIPTION</label>
                            </td>
                            <td>
                                <input type="text" name="idesc" id="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="idesc">CAPACITY</label>
                            </td>
                            <td>
                                <input type="text" name="capacity" id="" class="form-control">
                            </td>
                        </tr>

                    </table>
                    <div class="text-center">
                        <button type="submit" name="eventRegister" class="btn btn-primary mt-3">REGISTER</button>
                    </div>
                </form>
                <div class="text-center">
                    <?php
                    if (isset($_POST['eventRegister'])) {
                        $iname = $_POST['iname'];
                        $idate = $_POST['idate'];
                        $itarget = $_POST['itarget'];
                        $idesc = $_POST['idesc'];
                        $capacity = $_POST['capacity'];

                        if ($iname == "First Meeting") {
                            $event_id = 1;
                        } elseif ($iname == "Open School") {
                            $event_id = 2;
                        } elseif ($iname == "Check & Challenge") {
                            $event_id = 3;
                        } else {
                            $event_id = 4;
                        }

                        $functionObj->add_item($iname, $event_id, $idate, $itarget, $idesc,$capacity);
                    ?>
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Target</th>
                                <th>Description</th>
                                <th>Capacity</th>
                            </tr>
                            <tr>
                                <td><?php echo $iname; ?></td>
                                <td><?php echo $idate; ?></td>
                                <td><?php echo $itarget; ?></td>
                                <td><?php echo $idesc; ?></td>
                                <td><?php echo $capacity; ?></td>
                            </tr>
                        </table>
                    <?php
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