<?php
session_start();
$users = array(
    'Ali' => 'password1',
    'Bona' => 'password2',
    'Charlie' => 'password3',
    'Dede' => 'password4',
    'Emon' => 'password5'
);

include('header.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        $error = "Password yang dimasukkan salah atau username tidak terdaftar.";
    }
}
?>
<center>
<h2>Silakan Login</h2>

<?php if (isset($error)) {
    echo '<p style="color: red;">' . $error . '</p>';
} ?>

<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<?php include('footer.php'); ?>