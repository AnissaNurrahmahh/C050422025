<?php
	session_start();
	if ( (isset($_GET['aksi'])) and ($_GET['aksi']=="logout") ){
	session_destroy();
	header("refresh;3;proses_radio.php");
	}

	if(isset($_SESSION['username'])){

	$username = $_SESSION['username'];
		echo"<center>";
		echo"<h1>Ini Halaman Ketiga</h1>";
		echo"<p>Anda login sebagai <b>".$username."</b></p>";
		echo"<p>Berikut ini menu navigasi anda</p>";
		echo"<p><a href='menu1_tugas2.php'>Menu 1&nbsp</a><a href='menu2_tugas2.php'>Menu 2&nbsp</a><a href='menu3_tugas2.php'>Menu 3&nbsp</a></p>";
	?>
	<a href="?aksi=logout">Logout</a> </body>
	</center>
<?php
}else{
header("location:tugas2.php");
}
?>