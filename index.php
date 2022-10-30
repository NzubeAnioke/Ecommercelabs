<?php
	session_start();

	// If user clicks logout
	if (isset($_GET["logout"])) {
		if ($_GET["logout"] == 1) {
			unset($_SESSION["logged"]); 
			unset($_SESSION["checkrole"]);
			header("location: ./index.php");
		}
	}

	if (isset($_SESSION["logged"])) {
		if ($_SESSION['logged'] == true) {
			$logmenu = '<li>
							<a href="./index.php?logout=1">
								Logout
							</a>
						</li>';
		}
	}
	else 
	$logmenu = '<li>
					<a href="./login/login.php">
						Login
					</a>
				</li>';

	if (isset( $_SESSION["checkrole"])) {
		if ($_SESSION['checkrole'] == 1) {
			$adminview = '<li>
							<a href="./admin/brand.php">
								Brand
							</a>
						</li>';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>
		<li>
			<a href="./login/register.php">Register</a>
		</li>
		<?php
			echo $logmenu;
//check if adminview has been set
		if (isset($adminview)) {
			echo $adminview;
		}
		?>
	</ul>
</body>
</html>

	