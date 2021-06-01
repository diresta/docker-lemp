<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LEMP STACK</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div">
            <div>
                <h1>
                    Сумасбродный самосборный LEMP-стек.
                </h1>
                <h2>Окружение:</h2>
            </div>
        </div>
            <div>
				<ul>
					<li>PHP <?= phpversion(); ?></li>
                    <li>
                        <?php 
                            $link = mysqli_connect("db", "testuser", "test123", null);
                            if (mysqli_connect_errno()) {
                                printf("MySQL connecttion failed: %s", mysqli_connect_error());
                            } else {
                                printf("MySQL Server %s", mysqli_get_server_info($link));
                            }
                            mysqli_close($link); 
                            ?> 
                    </li>
                </ul>
            </div>
            <div>
            <h2>Тесты:</h2>
                <div>
                    <ul>
                        <li><a href="/phpinfo.php"> phpinfo() </a></li>
                        <li><a href="http://<?print $_ENV['HTTP_HOST'];?>:8183"> phpMyAdmin </a></li>
                        <li><a href="/test_db.php">Тест соединения через mysqli</a></li>
                        <li><a href="/test_db_pdo.php">Тест соединения через PDO</a></li>
                        </ul>
                </div>
            </div>
    </body>
</html>