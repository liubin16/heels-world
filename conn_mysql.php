<?php
	$mysql_server_name = 'localhost';
	$mysql_username = 'root';
	$mysql_password = '123456';
	$mysql_database = 'test_db';

	$conn = mysql_connect($mysql_server_name, $mysql_username, $mysql_password);
	mysql_query("set names 'utf8'");
	mysql_select_db($mysql_database);
	$sql = "select * from test_tbl ";
	$result = mysql_query($sql, $conn);

	while ($row = mysql_fetch_array($result)) {
		echo $row['name']."<br/>";
	}
?>
