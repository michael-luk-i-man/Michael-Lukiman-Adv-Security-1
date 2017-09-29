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
			echo '<span class="red">Something went wrong while sending your response. Please contact michael.</span><br><br>
';
			echo '<form action="submit.php" method="post">
			 <input type="text" placeholder="NetID (asl777)" name="netid"></input><br>
			<textarea type="text" height="100px"  placeholder="your voice is valuable" name="replycontent"></textarea><br>
			 <button type="submit" formmethod="post">加油</button>
			</form>';
		}
		else
		{
			echo '<span class="green">Your voice has been heard.</span><br><br>
';
			echo '<form action="submit.php" method="post">
			 <input type="text" placeholder="NetID (asl777)" name="netid"></input><br>
			<textarea type="text" height="100px"  placeholder="your voice is valuable" name="replycontent"></textarea><br>
			 <button type="submit" formmethod="post">加油</button>
			</form>';
		}
?></body></html>