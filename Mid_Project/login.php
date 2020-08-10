 <?php

	if(isset($_GET['msg'])){
		echo $_GET['msg'];
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="logCheck.php" method="post">
		<fieldset>
			<legend>SignIn</legend>
			<table>

				<tr>
					<tr>Guardian Email</tr>
					<td><input type="email" name="Guardian Email" placeholder="Enter your Email"></td>
				</tr>

					<td>Password</td>
          <tr>
					<td><input type="password" name="password" placeholder="Enter your password"></td>
				</tr>




					<td><input type="submit" name="SignIn" value="SignIn"></td>

         <td> <a href="http://Login.com">Forgot Password?</a><td>


			</table>
		</fieldset>
	</form>
</body>
</html>
