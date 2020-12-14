<?php

require_once('koneksi.php');

if(isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

//script validasi input kosong
    $error=0;
	if (($nama=="")or empty($telepon)or empty($email)or empty($pesan)){
		echo "<p>Masih ada data yang kosong cek lagi isian!";
		$error = 1;
		}

//script validasi data ganda

    $cek_ganda = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pendaftaran WHERE nama='$nama' or telepon='$telepon'"));

    if ($cek_ganda > 0){
		echo "<script>window.alert('Data yang anda masukan sudah ada!')
		window.location='index.php'</script>";
    }else if ($error==0) {
		
		$sql = "INSERT INTO pendaftaran(nama,telepon,email,pesan) VALUES('$nama','$telepon','$email','$pesan')";
		// Insert user data into table
		$result = $conn->query($sql);

		if ($result === TRUE) {
			// Show message when user added

			echo "Data Berhasil Disimpan!";

			echo "<script>
				window.alert('Data Berhasil Disimpan!')
    			window.location='index.html'
    			</script>";

		} else {
			// Show message when user added
			echo "Data Gagal Disimpan!";
		}
    }
 }
?>