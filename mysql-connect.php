<!DOCTYPE html>
<head>
<title>Login to SQL</title>
</head>
<body>
	<div class='container'>
		<div class='login-forms'>
			<h1>Login to MySQL</h1>
			<form method='post'>
				Host:<br>
				<input type="text" name='host'>
				<br>
				Username:<br> 
				<input type="text" name='usrname'>
				<br>
				Password:<br>
				<input type='password' name='passwrd'>
				<br>
				<input type="submit" name='submitbttn'>
			</form>
			<?php 
				if(isset($_POST['submitbttn'])){
					$dbhost = $_POST['host'];
					$dbuser = $_POST['usrname'];
					$dbpass = $_POST['passwrd'];
					$conn = mysql_connect($dbhost, $dbuser, $dbpass);
					if(! $conn){
						die('Could not connect: ' . mysql_error());
					}
					echo 'Connection Established';
					mysql_close($conn);
				}
			 ?>
		</div>
	</div>
</body>