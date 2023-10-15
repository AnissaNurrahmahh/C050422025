<?php
session_start();

include('header.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
?>

<center>
<h2>Username: <?php echo $username; ?></h2>
<a href="link1.php">Link 1</a> | <a href="link2.php">Link 2</a> | <a href="link3.php">Link 3</a> | <a href="logout.php">Logout</a>
<p>Anda telah berhasil login</p>

<?php include('footer.php'); ?>