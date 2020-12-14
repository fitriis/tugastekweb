<?php

# Connect ke Web Server Lokal
//Deklarasi variabel untuk parameter koneksi database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "formulir";

/** 
 * using mysqli_connect for database connection
mendefinisikan fungsi mysqli_connect dengan 4 parameter yang telah di deklarasikan sebelumnya
*/


$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed : " .mysqli_connect_error());
} else {
	#echo ("Database Connection Success <br/>");
}

?>