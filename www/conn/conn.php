<?php
$conn = mysql_connect("localhost:2999", "root", "123123");
if ($conn) {
	echo "连接mysql数据库ok";
} else {
	echo "连接数据库失败";
}
?>
