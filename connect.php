<?php
    $con=mysqli_connect("localhost","root","","site");
	if(!$con)
	{
		die("error while connecting data with database".mysqli_connect_error());
	}

?>