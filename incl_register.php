<h2>| User Registration </h2>
<form action="register_action.php" method="post">
	<label for="userName">Username:</label>
	<input type="text" id="userName" name="userName" required><br><br>

	<label for="userEmail">User Email:</label>
	<input type="email" id="userEmail" name="userEmail" required><br><br>

	<label for="userPwd">Password:</label>
	<input type="password" id="userPwd" name="userPwd" required maxlength="8"><br><br>

	<label for="userPwd">Confirm Password:</label>
	<input type="password" id="confirmPwd" name="confirmPwd" required><br><br>

	<input type="submit" value="Register">
	<input type="reset" value="Reset"></br>
</form>