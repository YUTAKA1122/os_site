<?php
include 'action.php';
$id = $_GET['item_id'];
$data = $functionObj->get_one_item($id);
$event_id = $data['event_id'];
$eventlist = $functionObj->read_activities($event_id);


?>

<!doctype html>
<html lang="en">

<head>
    <title>Events</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<?php
include 'navbar.php';


?>

    <div class="container-fluid">
        <div class="header">
            <h1 class="text-center">Activity List</h1>
            <div class="col-10 mt-3 mx-auto bg-warning">
                NAME: <?php echo $data['iname']; ?>
                　DATE: <?php echo $data['idate']; ?>
                　TARGET: <?php echo $data['itarget']; ?><br>
                DESC: <?php echo $data['idesc']; ?><br>
            </div>
        </div>

        <div class="row">
            <?php foreach ($eventlist as $row) :
                $act_id = $row['act_id'];
            ?>
                <div class="col-9 mt-5 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Activity: <?php echo $row['aname']; ?><br>
                            Desc: <?php echo $row['adesc']; ?><br>
                            Capacity: <?php echo $row['capacity']?>
                        </div>
                        <div class="card-body text-center">
                            <a href="updateAct.php?act_id=<?php echo $act_id ?>" class="btn btn-primary col-5">Update</a>
                            <a href="deleteCheckAct.php?act_id=<?php echo $act_id ?>" class="btn btn-danger col-5">Delete</a>
                        </div>
                    </div>
                </div>
        </div>
    <?php endforeach; ?>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>