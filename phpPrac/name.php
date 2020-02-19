<?php

$_SESSION['sname'] = $_REQUEST['sname'];
$_SESSION['email'] = $_REQUEST['email'];
$_SESSION['password'] = $_REQUEST['password'];

$eml=chop($_SESSION['email'],)

if (empty($_SESSION['sname']) || empty($_SESSION['email']) || empty($_SESSION['password'])) {
	echo "empty field";
}
elseif (trim($_SESSION['sname']) == trim($_SESSION['password'])) {
		echo "invalid u/pass";
} 
elseif (strpos(trim($_SESSION['email']),'@') == false || 
		strpos(trim($_SESSION['email']),'.')==false ||
		strpos(trim($_SESSION['email']),'@') < strpos(trim($_SESSION['email']),'.') ) 
{
		echo "invalid email";
}
 else{
		echo $_SESSION['sname'];
		echo $_SESSION['email'];
		echo $_SESSION['password'];
}
?> 