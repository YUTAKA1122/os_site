<?php
include 'action.php';
$items = $functionObj->read_items();

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
  <div class="container-fluid">
    <table class="table">
      <thead>
        <th>Event Name</th>
        <th>Date</th>
        <th>Reservation</th>
        <th>Capacity</th>
      </thead>
      <tbody>
        <?php foreach($items as $row):
        $num = $functionObj->count_items($row['item_id']);
        ?>
        <tr>
          <td><a href='reservationEach.php?item_id=<?php echo $row['item_id'] ?>'><?php echo $row['iname']?></a></td>
          <td><?php echo $row['idate']?></td>
          <td><?php echo $num?></td>
          <td><?php echo $row['capacity']?></td>
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