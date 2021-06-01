<!DOCTYPE html>
<html lang="en">
	<a href="/index.php"> На главную </a>
	<br>
<?php
$DBuser = 'testuser';
$DBpass = 'test123';
$pdo = null;

try{
    $database = 'mysql:host=db:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "Соединение успешно установлено";    
} catch(PDOException $e) {
    echo "php connect to mysql failed with:\n $e";
}
$pdo = null;
?>
</html>