<?php
        

        $uname = $_REQUEST['uname'];
		$password = $_REQUEST['Password'];

		if (empty(trim($uname)) || empty(trim($password))) {
			echo "Null submission";
		}
		else
		{
			$file = fopen('data.txt', 'w');
			$user = 
		}
?>