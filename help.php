<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$select_query = "SELECT id, email_id, first_name FROM users";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
echo $row['id'] . "<br/>";
echo $row['email_id'] . "<br/>";
echo $row['first_name'] . "<br/>";

$row = mysqli_fetch_array($select_query_result);
echo $row['id'] . "<br/>";
echo $row['email_id'] . "<br/>";
echo $row['first_name'] . "<br/>";
?>


<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$user_registration_query = "insert into users(email, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
?>


<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$user_registration_query = "insert into users(email, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
?>


<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$first_name = $_GET['first_name'];
$user_id = $_SESSION['id'];
$update_name_query = "UPDATE users SET first_name = '$first_name' WHERE id = '$user_id'";
$update_name_result = mysqli_query($con, $update_name_query) or die(mysqli_error($con));
echo "Name updated";
?>


//For logout
<?php
session_start();
session_unset();
session_destroy();
?>


<?php
session_start();
if (isset($_SESSION['id'])) {
  echo "Hello ".$_SESSION[‘email’];
} else {
  echo "Hello Guest";
}
?>


<?php 
if(!isset($_SESSION['id'])){
header('location: index.php');
exit;
}
?>


<?php
require 'common.php';
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  echo "Password should have at-least 6 characters";
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
//use insert query and store the data in the database.



<?php
require 'common.php';
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: index.php?email_error=enter correct email');
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  header('location: index.php?password_error=enter correct password');
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
//use insert query and store the data in the database.