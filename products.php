<?php
require 'includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Arena | Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <div class="container" id="margin">
        <div class="p-5 mb-4 bg-light rounded-3">
            <h1 class="display-4 fw-bold">Welcome to Laptop Arena!</h1>
            <p class="fs-4">We have the best laptops for you. No need to hunt around, we
                have all in one place.</p>
        </div>
        <div class="row text-center mb-3" id="hp">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/a.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">HP 15</h3>
                        <p class="card-text">Price: Rs.43000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(1)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/b.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">HP Pavilion</h3>
                        <p class="card-text">Price: Rs.65000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(2)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/c.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">HP Gaming</h3>
                        <p class="card-text">Price: Rs.60000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(3)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/d.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">HP Omen</h3>
                        <p class="card-text">Price: Rs.80000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(4)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mb-3" id="asus">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/e.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Asus TUF</h3>
                        <p class="card-text">Price: Rs.60000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(5)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/f.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Asus VivoBook</h3>
                        <p class="card-text">Price: Rs.40000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(6)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/g.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Asus TUF Dash</h3>
                        <p class="card-text">Price: Rs.75000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(7)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/h.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Asus ROG</h3>
                        <p class="card-text">Price: Rs.80000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(8)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mb-3" id="lenovo">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/i.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Lenovo IdeaPad 3</h3>
                        <p class="card-text">Price: Rs.45000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(9)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/j.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Lenovo IdeaPad 5</h3>
                        <p class="card-text">Price: Rs.62000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/k.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Lenovo Legion</h3>
                        <p class="card-text">Price: Rs.90000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(11)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="images/l.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Lenovo ThinkPad</h3>
                        <p class="card-text">Price: Rs.70000.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(12)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block 
                        btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
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