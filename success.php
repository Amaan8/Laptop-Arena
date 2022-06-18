<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Arena | Success</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div class="container" id="margin">
        <div class="row">
            <div class="col-xs-8 offset-xs-2">
                <h3>Your order is confirmed. Thank you for shopping
                    with us. <a href="products.php">​Click here</a>​ to purchase any other item.</h3>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer2.php';
    ?>
</body>

</html>