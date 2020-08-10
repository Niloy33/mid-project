<!DOCTYPE html>
<html>
<head>
	<title>Guardian Registration</title>
</head>
<body>

	<form action="regCheck.php" method="post">
		<fieldset>
			<legend>Guardian Registration</legend>


 <table>
				<tr>
            <tr>Guardian Name</tr>
					<td><input type="text" name="guardianName" placeholder="Name"></td>
				</tr>


        <td>Email</td>
        <tr>
					<td><input type="text" name="email" placeholder="E-mail"></td>
        </tr>


				  <td>Address</td>
          <tr>
					<td><input type="text" name="address" placeholder="Address"></td>
				</tr>


          <td>Phone Number</td>
          <tr>
            <td><input type="text" name="phoneNumber" placeholder="Number"></td>
          </tr>

					<td>Password</td>
          <tr>
					<td><input type="password" name="password" placeholder="Password"></td>
				</tr>



          <td>Confirm Password</td>
          <tr>
          <td><input type="password" name="confirmPassword" placeholder="Confirm password "></td>
        </tr>

        <td>Upload Image</td>
        <tr>
          <td><input type="File" name="uploadImage" value="uploadImage"></td>
        </tr>



        <td>Gender</td>
        <tr>
          <td>Male</td>
          <td><input type="radio" name="gender" value="Male"></td>
          </tr>

            <tr>
            <td>Female</td>
            <td><input type="radio" name="gender" value="Female"></td>
          </tr></br>






					<td><input type="submit" name="Creat Account" value="Creat Account"></td>
         <td> Already have an account? </td>
        <td> <a href="localhost/Mid_Project/Login.php">Login </a></td>






		</fieldset>
	</form>
</body>
</html>
