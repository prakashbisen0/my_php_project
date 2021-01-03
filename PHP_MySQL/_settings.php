<?php

/**
 * Settings for AWS IoT Button to PHP demo
 * 
 */

	$AWSbuttonSN = 'A123BC456789DEFG';  // AWS IoT Button serial number

	$dbHost = 'employeereg.c5gfh7zgoi06.ap-south-1.rds.amazonaws.com';  // MySQL database host name or IP address
	$dbName = 'myphp';  // MySQL database name
	$dbUsername = 'root';  // MySQL database user with read/write priveleges to the database defined above
	$dbPassword = 'Password';  // Password for MySQL database user defined above

	$dbPort = ini_get("mysqli.default_port"); 
	$dbSocket = ini_get("mysqli.default_socket"); 

/* End of file _settings.php */
?>
