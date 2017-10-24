<!DOCTYPE html>
<html>
<html lang="id" class="no-js not-logged-in ">
	<head>
	  <link rel="mask-icon" href="//instagramstatic-a.akamaihd.net/h1/images/ico/favicon.svg/9d8680ab8a3c.svg" color="#262626">
	  <link rel="shortcut icon" type="image/x-icon" href="//instagramstatic-a.akamaihd.net/h1/images/ico/favicon.ico/dfa85bb1fd63.ico">
	  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	  <style class="cp-pen-styles">
	    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
	    body{background-color:#FAFAFA;color:#303841;font-family:Open Sans}.login-box
	        {margin-top:100px;text-align:center;width:430px;height:340px;
	        background-color:#fff;padding:60px}.logo
	        {height:70px;margin-bottom:30px}.form-control{margin-bottom:20px}.btn
	        {width:100%;font-size:16px}
	  </style>
	<title>Instagram</title>
</head>
<body>
	<div class="well login-box center-block"> 
	    <img class="logo" src="http://www.dallasarboretum.org/assets/img/instagram-word.png"></img>
	    <table align="center" width="300" height="100">
		<?php
			$host= "localhost";
			$user= "root";
			$password= "";
			$email=$_POST['email'];
			$fullname=$_POST['fullname'];
			$username=$_POST['username'];
			$pw=$_POST['password'];
			$pw=str_repeat("*",strlen("password"));


			if($username)
			{
				$conn=mysqli_connect ($host,$user,$password);
				mysqli_select_db ($conn,'dbinstagram');
				$sql="insert into tbinstagram values ('$email', '$fullname', '$username', '$password')";
				$hasil=mysqli_query ($conn,$sql);
			}
			else
			{
				echo "Data Gagal Disimpan";
			}
		
			echo "<tr><td align=left>Email</td>
					  <td>:</td> 
					  <td align=left> $email </td>
				  </tr>";
			echo "<tr><td align=left>Fullname</td>
			          <td>:</td>
			          <td align=left> $fullname </td>
			      </tr>";
			echo "<tr><td align=left>Username</td>
			          <td>:</td>
			          <td align=left> $username </td>
			      </tr>";
			echo "<tr><td align=left>Password</td>
					  <td>:</td>
					  <td align=left> $pw </td>
				  </tr>";
		?>
		</table>
</body>
</html>