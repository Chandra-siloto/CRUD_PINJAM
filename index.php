<html>
<head>
	<title>Input Data ke Database dengan PHP dan MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="action_input.php" method="POST" enctype="multipart/form-data">
		<h1></h1>
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="40">&nbsp;</td>
			<td>&nbsp;</td>
			<td><font size="4" color="blue"><b>A simple Library information system</b></font></td>
		</tr>
		<tr>
			<td height="40">&nbsp;</td>
			<td>&nbsp;</td>
			<td><h3>Please enter your book</h3></td>
		</tr>
		<tr>
			<td height="36"></td>
			<td><a href="view_data.php" target="_blank" style="text-decoration:none">View Data</a></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td height="40">&nbsp;</td>
			<td>id</td>
			<td><input type="text" name="id" size="12"></td>
		</tr>
		<tr>
			<td height="40">&nbsp;</td>
			<td>judul</td>
			<td><input type="text" name="judul" size="30"></td>
		</tr>
		<tr>
			<td height="40">&nbsp;</td>
			<td>nama_pengarang</td>
			<td><input type="text" name="nama_pengarang" size="30"></td>
		</tr>
		<tr>
			<td height="40">&nbsp;</td>
			<td>nama_penerbit</td>
			<td><input type="text" name="nama_penerbit" size="60"></td>
		</tr>
		<tr>
			<td height="60">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
		</table>
	</form>
</body>
</html>