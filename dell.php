<?php
include 'config.php';
$del_id = $_GET['id'];

?>

<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<title>Блог</title>
	</head>
	<body>
		<header>
			<a href="index.php">Главная</a>	<a href="create.php">Добавить пост</a>
		</header>
		<article>
		
		
		<?php
        if (isset($del_id)) {
            $sql = "DELETE FROM `blog` WHERE `id` = '$del_id' ";
            if (mysql_query($sql)) {
                echo "Пост удален";
            }
            else{
                echo "Ошибка"; 
				echo mysql_errno($connect) . ": " . mysql_error($connect). "\n";
            }
	    }
        ?>
		
		
		</article>
	<body>
</html>