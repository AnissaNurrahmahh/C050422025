<?php
// Array yang berisi username dan password yang diperbolehkan
$users = array(
    'Ali' => 'password1',
    'Bona' => 'password2',
    'Charlie' => 'password3',
    'Dede' => 'password4',
    'Emon' => 'password5'
);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username ada dalam array
    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: submit_tugas2.php'); // Ganti "welcome.php" dengan halaman selamat datang Anda.
        exit();
    } else {
        $error = "Username atau password salah. Coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Autentikasi</title>
</head>
<body>
    <h2>Autentikasi</h2>
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
</body>
</html>