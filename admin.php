<?php
include 'action.php';
$itemlist = $functionObj->read_items();

?>

<!doctype html>
<html lang="en">

<head>
    <title>Admin Side</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            Admin
        </a>

        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Register Item</a>
                </li>
                <li class="nav-item">
                    <a href="userlist.php" class="nav-link">Userlist</a>
                </li>
                <li class="nav-item">
                    <a href="orderlist.php" class="nav-link">User Orders</a>
                </li>
            </ul>
        </div>
    </nav> -->
<?php
include 'navbar.php';


?>


    <div class="container-fluid">
        <div class="row">
            <?php foreach ($itemlist as $row) :
                $id = $row['item_id'];
                $img = $row['iimg'];
                $event_id = $row['event_id'];
            ?>
                <div class="col-10 mt-3 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12">
                                Name: <?php echo $row['iname']; ?>
                                　EventID: <?php echo $row['item_id']?>
                                　Date: <?php echo $row['idate']; ?>
                                　Target: <?php echo $row['itarget']; ?><br>
                                Desc: <?php echo $row['idesc']; ?><br>
                            </div>
                            <div class="col-2">
                                <img src="uploads/<?php echo $img ?>" alt="" class="img-fluid" style="height:10vh;">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a href="update.php?item_id=<?php echo $id ?>" class="btn btn-primary col-2">Update</a>
                            <a href="addActivitiy.php?item_id=<?php echo $id ?>" class="btn btn-warning col-2">Add Activitiy</a>
                            <a href="eventlist.php?item_id=<?php echo $id ?>" class="btn btn-info col-2">Detail</a>
                            <a href="deleteCheck.php?item_id=<?php echo $id ?>" class="btn btn-danger col-2">Delete</a>
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