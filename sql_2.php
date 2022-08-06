GIF89a;
<?php

	$conn = new mysqli(getenv('MYSQL_HOSTNAME'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), getenv('MYSQL_DATABASE'));
	SELECT "table_name" FROM information_schema.tables WHERE table_schema = database();
	// SELECT * FROM tonghop;


?>

