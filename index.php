<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="index.css" rel="stylesheet" type="text/css">

<body>
	<div class="login">
		<h1>LOGIN</h1>
		<form action="index.php" method="POST">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Username" id="username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="Password" id="password" required>
			<input type="submit" name="submit" value="Login">
		</form>
	</div>

	<?php
	if (isset($_POST['submit'])) {
		require_once './source/database.php';

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($connection, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

			if ($row['username'] === $username && $row['password'] === $password) {

				session_start();
    			$_SESSION['username'] = $username;

    			// Redirect to the home page
    			header('Location: dashboard.php?');
    			exit;
			} else {
				echo "<h3 class='e-message'>Invalid username or password.</h3>";
			}
		} else {
			echo "<h3 class='e-message'>Invalid username or password.</h3>";
		}	
	}	
	?>
</body>

</html>