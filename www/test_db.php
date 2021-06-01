<!DOCTYPE html>
<html lang="en">
	<a href="/index.php"> На главную </a>
	<br>
<?php
$link = mysqli_connect("db", "root", "root123", null);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение успешно установлено." . PHP_EOL;
echo " Инфо: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
</html>