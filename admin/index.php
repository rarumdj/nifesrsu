<?php
session_start();
require('../connection.php');

$name = strip_tags(trim($_POST["username"]));
$password = strip_tags(trim($_POST["password"]));

if (filter_var($name, FILTER_VALIDATE_EMAIL)) {

$login_query = mysql_query("SELECT * FROM users WHERE email = '$name' AND password = '$password'");
$login_num = mysql_num_rows($login_query);
}else {
$login_query = mysql_query("SELECT * FROM users WHERE username = '$name' AND password = '$password'");
$login_num = mysql_num_rows($login_query);
}

if($login_num > 0){
	while($login_row = mysql_fetch_assoc($login_query)){
		$user_is = $login_row["office"];

if (isset($_POST['login_btn1'])){
		if($user_is == 'General Secretary'){
			$_SESSION["office"] = $login_row["office"];
			$_SESSION["username"] = $login_row["username"];
			$_SESSION["user_id"] = $login_row["id"];
			header("location:gensec/index.php");
		} else{
			// echo  "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
			echo "<script language=\"JavaScript\">\n";
			echo "alert('Username or Password was incorrect!');\n";
			echo "window.location='index.php'";
			echo "</script>";
		}
		//doctor ends here
	} elseif (isset($_POST['login_btn2'])){
		if($user_is == 'Publicity Secretary'){
			$_SESSION["office"] = $login_row["office"];
			$_SESSION["username"] = $login_row["username"];
			$_SESSION["user_id"] = $login_row["id"];
			header("location:pub/index.php");
		} else{
			// echo  "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
			echo "<script language=\"JavaScript\">\n";
			echo "alert('Username or Password was incorrect!');\n";
			echo "window.location='index.php'";
			echo "</script>";
		}//doctor ends here
} elseif (isset($_POST['login_btn3'])){
	if($user_is == 'Cwc Secretary'){
		$_SESSION["office"] = $login_row["office"];
		$_SESSION["username"] = $login_row["username"];
		$_SESSION["user_id"] = $login_row["id"];
		header("location:cwc/index.php");
	} else{
		// echo  "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
		echo "<script language=\"JavaScript\">\n";
		echo "alert('Username or Password was incorrect!');\n";
		echo "window.location='index.php'";
		echo "</script>";
	}//doctor ends here
} elseif (isset($_POST['login_btn4'])){
	if($user_is == 'Academic Secretary'){
		$_SESSION["office"] = $login_row["office"];
		$_SESSION["username"] = $login_row["username"];
		$_SESSION["user_id"] = $login_row["id"];
		header("location:acad/index.php");
	} else{
		// echo  "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
		echo "<script language=\"JavaScript\">\n";
		echo "alert('Username or Password was incorrect!');\n";
		echo "window.location='index.php'";
		echo "</script>";
	}//doctor ends here
}
	}
}
  ?>
<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dimension by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
							
								<h1>Admin Login Portal</h1>
								<p>Please Keep Your Login Details Safe and These Page is to Be Kept Secret.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Gensec</a></li>
								<li><a href="#work">Pub</a></li>
								<li><a href="#about">CWC</a></li>
								<li><a href="#contact">Acad</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Gensec -->
							<article id="intro">
								<h2 class="major">General Secretary</h2>
									<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
									<div class="field half first">
										<label for="email">Email</label>
										<input type="text" placeholder="Username / Email" name="username" id="email" />
									</div>
									<div class="field half">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" />
									</div>
									<ul class="actions">
										<li><input type="submit" name="login_btn1" value="Login" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</article>

						<!-- Publicity -->
							<article id="work">
								<h2 class="major">Publicity/Media</h2>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<div class="field half first">
										<label for="email">Email</label>
										<input type="text" placeholder="Username / Email" name="username" id="email" />
									</div>
									<div class="field half">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" />
									</div>
									<ul class="actions">
										<li><input type="submit" name="login_btn2" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							
							</article>

						<!-- CWC -->
							<article id="about">
								<h2 class="major">CWC</h2>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<div class="field half first">
										<label for="email">Email</label>
										<input type="text" placeholder="Username / Email" name="username" id="email" />
									</div>
									<div class="field half">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" />
									</div>
									<ul class="actions">
										<li><input type="submit" name="login_btn3" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Academic</h2>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<div class="field half first">
										<label for="email">Email</label>
										<input type="text" placeholder="Username / Email" name="username" id="email" />
									</div>
									<div class="field half">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" />
									</div>
									<ul class="actions">
										<li><input type="submit" name="login_btn4" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</article>

						

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
