<html>
<head>
	<title>View Data Mahasiswa</title>
</head>
<body>
	<br><font size="4"><center><b>DATA MAHASISWA</b></center><font><br>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr bgcolor="#FFA600" height="40">
			
			<th width="25%">ID</th>&nbsp;
			<th width="25%">Judul</th>&nbsp;   
			<th width="25%">Nama Pengarang</th>&nbsp; 
			<th width="25%">Nama Penerbit</th>&nbsp; 		     
		</tr>
	<?php
		include "koneksi.php";
		//view data mahasiswa di dalam database
		$Lihat="SELECT * FROM pinjam ORDER BY id";
		$Tampil = mysqli_query($conn, $Lihat);
		$nomer=0;
		while (	$hasil	 				= mysqli_fetch_array ($Tampil)) {
				$id 					= stripslashes ($hasil['id']);
				$judul					= stripslashes ($hasil['judul']);
				$nama_pengarang			= stripslashes ($hasil['nama_pengarang']);
				$nama_penerbit			= stripslashes ($hasil['nama_penerbit']);
			{
		$nomer++;
	?>
		<tr bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr align="center" height="40">
			<td><?=$id?><div align="center"></div></td>
			<td><?=$judul?><div align="center"></div></td>
			<td><?=$nama_pengarang?><div align="center"></div></td>
			<td><?=$nama_penerbit?><div align="center"></div></td>
		</tr>
		<tr bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td> 
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<a href="">Edit</a>
		</tr>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysqli_close($conn);
	
	?>

	</table>
</body>
</html>