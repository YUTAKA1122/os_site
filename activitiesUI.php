<?php
include 'action.php';
$user_id = $_SESSION['id'];
$item_id = $_GET['item_id'];

$data = $functionObj->get_one_item($item_id);
$event_id = $data['event_id'];
$actsOfEvent = $functionObj->read_activities($event_id);

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
        <div class="col-10">
            <h1><?php echo $data['iname'] ?><br></h1>
            <h1><?php echo $data['idate'] ?><br></h1>
        </div>

        <form action="action.php" method="post">
            <input type="hidden" name="user_id" value =<?php echo $user_id ?> class="form-control">
            <input type="hidden" name="item_id" value=<?php echo $item_id?> class="form-control">

            <div class="row">
                <?php
                if ($event_id == 2) {
                    echo "<h1>Activity1</h1>";
                    foreach ($actsOfEvent as $row) :
                        // $id = $row['item_id'];
                        $count1 = $functionObj->count_act1($item_id,$row['act_id']);
                        $capa1 = $functionObj->get_one_act($row['act_id']);
                ?>
                        <div class="col-4">
                            <div class="card mt-3">
                                <div class="card-header">
                                    <?php
                                    if($capa1['capacity']-$count1 == 0){
                                        echo $row['aname'];
                                    }else{
                                    ?>

                                    <input type="radio" name="act1" id="" value=<?php echo $row['act_id']?> class="radio form-check-input"> <?php echo $row['aname']; ?><br>
                                    <?php
                                    }
                                    ?>
                                    
                                </div>
                                <div class="card-body">
                                    <?php echo $row['adesc']; ?>
                                </div>
                                <div class="card-footer text-center">
                                    <?php echo $count1." / ".$row['capacity'];?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <h2>Activity2</h2>
                    <?php
                    foreach ($actsOfEvent as $row) :
                        // $id = $row['item_id'];
                        $count2 = $functionObj->count_act2($item_id,$row['act_id'])
                    ?>
                        <div class="col-4">
                            <div class="card mt-3">
                                <div class="card-header">
                                    <input type="radio" name="act2" id="" value=<?php echo $row['act_id']?> class="radio form-check-input"> <?php echo $row['aname']; ?><br>
                                </div>
                                <div class="card-body">
                                    <?php echo $row['adesc']; ?>
                                </div>
                                <div class="card-footer text-center">
                                    <?php echo $count2." / ".$row['capacity'];?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <?php
                } else {
                    foreach ($actsOfEvent as $row) :
                        // $id = $row['item_id'];
                        $count1 = $functionObj->count_act1($item_id,$row['act_id']);
                        $capa1 = $functionObj->get_one_act($row['act_id']);
                ?>
                        <div class="col-4">
                            <div class="card mt-3">
                                <div class="card-header">
                                    <?php
                                    if($capa1['capacity']-$count1 == 0){
                                        echo $row['aname'];
                                    }else{
                                    ?>

                                    <input type="radio" name="act1" id="" value=<?php echo $row['act_id']?> class="radio form-check-input"> <?php echo $row['aname']; ?><br>
                                    <?php
                                    }
                                    ?>
                                    
                                </div>
                                <div class="card-body">
                                    <?php echo $row['adesc']; ?>
                                </div>
                                <div class="card-footer text-center">
                                    <?php echo $count1." / ".$row['capacity'];?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php
                } ?>
            </div>
            <div class="text-center">
                        <button type="submit" name="reserve" class="btn btn-primary mt-3">RESERVE</button>
                    </div>

        </form>

    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>