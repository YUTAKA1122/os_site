<?php
include 'action.php';
$cart_id = $_GET['cart_id'];

$data = $functionObj->get_one_cart_item($cart_id);
$act1 = $functionObj->get_one_act($data['act_id1']);
$act2 = $functionObj->get_one_act($data['act_id2']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Check</title>
                <!-- Bootstrap CSS v5.0.2 -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php
include 'navbar.php';
?>    
<div class="container">
    <div class="card mx-auto w-75">
        <div class="card-header">
            <p class="lead text-center">
                Would you like to cancel this reservation?
            </p>
        </div>
        <div class="card-body">
            <table class="mx-auto">
                <tr>
                    <td>
                        <span>NAME: </span>
                    </td>
                    <td>
                        <?php echo $data['iname']?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>DATE: </span>
                    </td>
                    <td>
                        <?php echo $data['idate']?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>ACTIVITY1: </span>
                    </td>
                    <td>
                        <?php echo $act1['aname']?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>ACTIVITY2: </span>
                    </td>
                    <td>
                        <?php echo $act2['aname']?>
                    </td>
                </tr>
            </table>
            <div class="card-body text-center">
                <a href="eventlistUI.php" class="btn btn-dark w-75">Back </a>
                <a href="remove.php?cart_id=<?php echo $cart_id?>" class="btn btn-danger w-75">Cancel</a>
            </div>
        </div>
    </div>
</div>






    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>