<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
include('header.php');
$username = $_SESSION['username'];
?>

<h2>Username: <?php echo $username; ?></h2>
<a href="link1.php">Link 1</a> | <a href="link2.php">Link 2</a> | <a href="link3.php">Link 3</a> | <a href="logout.php">Logout</a>
<p>ini adalah isi dari halaman link 1</p>

<?php include('footer.php');