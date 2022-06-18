<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Arena</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div id="banner_image">
        <div class="container">
            <div id="banner_content">
                <h1>Laptops for Everyone</h1>
                <p>Premium brands with reasonable prices</p>
                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </div>
    </div>
    <div class="container my-4" id="prod">
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="card">
                    <img src="images/a.jpg" alt="">
                    <div class="card-body">
                        <a href="products.php#hp">
                            <h3 class="card-title">HP Laptops</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="images/g.jpg" alt="">
                    <div class="card-body">
                        <a href="products.php#asus">
                            <h3 class="card-title">Asus Laptops</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="images/j.jpg" alt="">
                    <div class="card-body">
                        <a href="products.php#lenovo">
                            <h3 class="card-title">Lenovo Laptops</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>