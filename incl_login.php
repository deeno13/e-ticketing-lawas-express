<h2>| User Login </h2>
<form action="login_action.php" method="post">
	<label for="userEmail">User Email:</label>
	<input type="email" id="userEmail" name="userEmail" required><br><br>
	<label for="userPwd">Password:</label>
	<input type="password" id="userPwd" name="userPwd" required maxlength="8"><br><br>
	<input type="submit" value="Login">
	<input type="reset" value="Reset"></br>
</form>
<p><a href="index.php?reg=new">| Register | </a></p>
