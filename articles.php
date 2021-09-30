<?php
include 'action.php';
$article_list = $functionObj->read_articles();
$today = date('Y-m-d');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'navbar.php';

    ?>

    <div class="container-fluid">
        <h1>Articles</h1>

        <!-- Article Posting -->
        <div class="col-10 mx-auto">
            <h2>Post a new article here.</h2>
            <form action="" method="post">
                <input type="date" name="date" value="<?php echo $today; ?>" hidden>
                <textarea name="art_desc" class="form-control" placeholder="Make notes here."></textarea>
                <div class="text-center">
                    <button type="submit" name="newArticle" class="btn btn-primary mt-3">POST</button>
                </div>
            </form>
            <?php
            if (isset($_POST['newArticle'])) {
                $art_date = $_POST['date'];
                $art_desc = $_POST['art_desc'];

                $functionObj->add_article($art_date, $art_desc);
            ?>

                <table class="table table-bordered text-center">
                    <tr>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td><?php echo $art_desc; ?></td>
                    </tr>
                </table>
            <?php
            }
            ?>

        </div>
        <hr>

        <!-- reproduction of the article-frame on the top page -->

        <div class="container-fluid col-10 mx-auto">
            <h2>How it looks like in the top page.</h2>
            <div class="col-10 w-75 mx-auto border border-dark rounded bg-white text-center" style="height:150px; overflow:scroll;">
                <?php
                foreach ($article_list as $row) :
                    $id = $row['art_id'];
                    $date = $row['art_date'];
                ?>
                    <div class="mt-2">
                        <?php echo $row['art_date']; ?>
                        <span style="font-weight:bold;"><?php echo "  " . $row['art_desc']; ?></span>

                        <!-- NEW! or not -->
                        <?php
                        $time1 = new DateTime($date);
                        $time2 = new DateTime($today);

                        $interval = $time1->diff($time2);
                        $day = $interval->d;

                        if ($day < 7) {
                            echo "<span class='text-danger'>NEW</span>";
                        } else {
                        }

                        ?>
                        <!-- NEW! or not -->
                        <br>
                        <hr>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <hr>

        <!-- update or delete articles -->

        <div class="row">
            <?php foreach ($article_list as $row) :
                $id = $row['art_id'];
            ?>
                <div class="col-4">
                    <div class="card mt-4">
                        <div class="card-header">
                            POSTDATE:<?php echo $row['art_date']; ?><br>
                            <h5 class="mt-3"><?php echo $row['art_desc']; ?><br></h5>
                        </div>
                        <div class="card-body text-center">
                            <a href="updateArticle.php?art_id=<?php echo $id ?>" class="btn btn-primary col-4">Update</a>
                            <a href="articleDeleteCheck.php?art_id=<?php echo $id ?>" class="btn btn-danger col-4">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>







    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>