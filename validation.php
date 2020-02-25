<?php
//SESSION NEEDS to be start in every page
	session_start();
//if submit button was clicked then storing the name/pass and doing the validation
	if (isset($_REQUEST['submit'])) {
		$uname = $_REQUEST['uname'];
		$password = $_REQUEST['Password'];

		if (empty(trim($uname)) || empty(trim($password))) {
			echo "Null submission";
		}

		//elseif block if we need to validate more..
		
		else{

			//file open
			$file = fopen('data.txt', 'r');

			//read the file and save it on an varable
			$user =fread($file, filesize('data.txt'));

			//explode uname and pass and hold it on an variable with numerical array 
			$data= explode('|', $user);

			if (trim($data[0]) == $uname && trim($data[1])== $password) {


				//storing value on session for further checking process like on other page we can check the session value and based on that we can redirect them to certain pages.
				$_SESSION['uname'] = $uname;
				$_SESSION['Password'] = $password;

				header("location: home.php");
			}
			else{
				echo "invalid uname/password";
			}
		}
	}
	else{
		echo "Invalid request..please login first";
		header("location: login.php");
	}

?>