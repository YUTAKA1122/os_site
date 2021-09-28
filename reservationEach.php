<?php
include 'action.php';
$item_id = $_GET['item_id'];
$userReservelist = $functionObj->get_event_cart_items($item_id);

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
  include 'navbar.php';
  ?>
  <div class="container-fluid col-10">
    <table class="table text-center">
      <thead>
        <th>Cart ID</th>
        <th>Item</th>
        <th>Date</th>
        <th colspan="2">User</th>
        <th>Activity1</th>
        <th>Activity2</th>
      </thead>
      <tbody>
        <?php foreach($userReservelist as $row):
        $act1 = $functionObj->get_one_act($row['act_id1']);
        $act2 = $functionObj->get_one_act($row['act_id2']);
        ?>
        <tr>
          <td><?php echo $row['cart_id']?></td>
          <td><?php echo $row['iname']?></td>
          <td><?php echo $row['idate']?></td>
          <td><?php echo $row['lname']?></td>
          <td><?php echo $row['fname']?></td>
          <td><?php echo $act1['aname']?></td>
          <td><?php echo $act2['aname']?></td>
        </tr>

        <?php endforeach;?>
        
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>