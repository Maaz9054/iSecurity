<?php

session_start();
$Dontshow = false;
if (!isset($_SESSION['loggedin']) || $_SESSION != true) {
    $Dontshow = true;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
</head>

<body>
    <?php require "partials/_nav.php"; ?>
    <!-- Welcome - <?php echo $_SESSION['username'] ?> -->
    <?php
    if ($Dontshow) {
        echo '
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Sorry!</h4>
        <p>You need be loggedin in first.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>';

        exit;
    }
    ?>




    <!-- js slides start -->

    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active ">
                    <img src="images/img4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-none d-md-block">
                        <h5>Welcome - <?php echo $_SESSION['username'] ?></h5>
                        <p>We are glad to serve you our managment system.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/img12.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Don't be worry - <?php echo $_SESSION['username'] ?></h5>
                        <p>We will secure your data. You can Implement | change | manage your data here.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/img5.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Sir/Madam <?php echo $_SESSION['username'] ?></h5>
                        <p>We have best features to manage your data. we provide you great work experience. </p>
                    </div>
                </div>
            </div>'

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>





    <!-- js slides end -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>