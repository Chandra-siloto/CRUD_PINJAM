<?php
	include "koneksi.php";
	//Kirimkan Variabel
	$id							= $_POST['id'];
	$judul						= $_POST['judul'];
	$nama_pengarang				= $_POST['nama_pengarang'];
	$nama_penerbit				= $_POST['nama_penerbit'];

	//validasi id dalam database
	$cek=mysqli_num_rows (mysqli_query($conn,"SELECT id FROM pinjam WHERE id='$_POST[id]'"));
	if ($cek > 0) {
	?>
		<script language="JavaScript">
			alert('ID pinjam sudah dipakai !, silahkan diulang kembali');
			document.location='index.php';
		</script>
	<?php
	}
	//input data ke table pinjam dalam database perpustakaan
	$input	="INSERT INTO pinjam (id, judul, nama_pengarang, nama_penerbit)
			VALUES ('$id','$judul','$nama_pengarang','$nama_penerbit')";
	$query_input =mysqli_query($conn, $input);
		if ($query_input) {
	//Jika Sukses
	?>
		<script language="JavaScript">
			alert('ID pinjam Berhasil diinput!');
			document.location='index.php';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "ID pinjam Gagal diinput, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysqli_close($conn);
?>