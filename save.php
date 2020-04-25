<?php

include 'config.php';
$red_id = $_GET['id'];

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
		
		$title = $_POST['title'];
		$content = $_POST['content'];
		
			if(empty($title)){
			    echo "Введите название статьи";
			}
			elseif(empty($content)){
			    echo "Введите содержимое статьи";
			}
			else{
		        $sql = "UPDATE `blog` SET title = '$title', content = '$content' WHERE `id` = '$red_id'";
				if(mysql_query($sql)){
				    echo "Запись успешно сохранена";
					echo mysql_errno($connect) . ": " . mysql_error($connect). "\n";
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