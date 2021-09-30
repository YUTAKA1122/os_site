<?php
include 'action.php';
$id = $_GET['item_id'];

$data = $functionObj-> get_one_item($id);

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
include 'navbar.php';

?>

    <div class="container-fluid">
        <div class="card mx-auto w-50">
            <div class="card-header">
                <p class="lead text-center">
                    UPDATE AN ITEM
                </p>
            </div>
            <div class="card-body">
                <form action="action.php?id=<?php echo $id?>" method="post">
                    <table class="table text-center">
                        <tr>
                            <td>
                                <label for="iname">NAME</label>
                            </td>
                            <td>
                                <input type="text" name="iname" value="<?php echo $data['iname']?>" id="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="itarget">DATE</label>
                            </td>
                            <td>
                                <input type="date" name="idate" value="<?php echo $data['idate']?>" id="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="itarget">TARGET</label>
                            </td>
                            <td>
                                <input type="text" name="itarget" value="<?php echo $data['itarget']?>" id="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="idesc">DESCRIPTION</label>
                            </td>
                            <td>
                                <input type="text" name="idesc" value="<?php echo $data['idesc']?>" id="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="idesc">CAPACITY</label>
                            </td>
                            <td>
                                <input type="text" name="capacity" value="<?php echo $data['capacity']?>" id="" class="form-control">
                            </td>
                        </tr>

                    </table>
                    <div class="row text-center">
                        <button type="submit" name="update" class="btn btn-primary mt-3 col-6">UPDATE</button>
                        <a href="admin.php" class="btn btn-dark mt-3 col-6">Back</a>
                    </div>
                    
                </form>
                <div class="card-footer">
                    <form action="action.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="picture" id="">
                        <input type="hidden" name="id" value="<?php echo $_GET['item_id']?>">
                        <button type="submit" name="iimgUpdate">Submit</button>

                    </form>
                </div>
            </div>



        </div>




    </div>










    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>