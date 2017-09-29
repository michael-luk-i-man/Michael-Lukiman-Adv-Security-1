<?php


//connect.php
$server	= 'localhost';
$username	= 'gamepeni_alnal';
$username2	= '#####';
$database	= 'gamepeni_compsec';

if(!mysql_connect($server, $username,  $username2))
{
 	exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))

{
 	exit('Error: could not select the database');
}



		$postcontent=mysql_real_escape_string($_POST['replycontent']);
		$un= mysql_real_escape_string($_POST['userName']);	
		$pw= mysql_real_escape_string($_POST['userPassword']);
		
		$sql = "INSERT INTO feedback(email,input) VALUES('$netid','$postcontent')";
		$result = mysql_query($sql) or die("Something went asunder. Please contact michael.");
						
		if(!$result)
		{
			
		}
		else
		{
			
		}
?></body></html>