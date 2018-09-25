<?php
session_start();
require('../../connection.php');

	class mainclass{


		function login(){

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
						$_SESSION["email"] = $login_row["email"];
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
					$_SESSION["email"] = $login_row["email"];
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
					$_SESSION["email"] = $login_row["email"];
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
				

				}//while ends here

			}//if ends here

		}//function login ends here


		// function register(){

		// 	$email = $_POST["email"];
		// 	$fullname = $_POST["fullname"];
		// 	$phone = $_POST["phone"];
		// 	$password = $_POST["password"];

		// 	$register_query = mysql_query("SELECT * FROM users WHERE email = '$email'");
		// 	$register_num = mysql_num_rows($register_query);

		// 	if($register_num > 0){
		// 		$error = "Email already Exist. Please check your email and try again";
		// 		header("location:register.php");
		// 	}else{
		// 		$register_put = mysql_query("INSERT INTO users (id,fullname,phone,email,password,account) VALUES ('','$fullname','$phone','$email','$password','User')");		
		// 			header("location:login.php");
				
		// 	}
		// }//register function ends here


		// function cleanInput($text)
		// {
		// 	//strip tags
		// 	$text = strip_tags($text);
		// 	$text = trim($text);
		// 	return $text;
		// }
		
		// function Is_email($user)
		// {
		// 	//If the username input string is an e-mail, return true 
		// 	if(filter_var($user, FILTER_VALIDATE_EMAIL)) {
		// 		return true;
		// 	} else {
		// 		return false;
		// 	}
		// }
	}//mainclass ends here


?>