<?php
include 'config.php';
$date = date("Y-m-d");

?>

<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<title>Блог</title>
	</head>
	
	<body>
		<header>
			<a href="index.php">Главная</a>
		</header>
		<article>
			<form method="post">
				<br><br>
				<input type="text" name="title">
				<br><br>

				<textarea name="content"></textarea>
				<br><br>

				<button name="form">Опубликовать</button>
			</form>
			
			<?php
			
			$title = $_POST['title'];
			$content = $_POST['content'];
			
			if(empty($red_id)){
			    if(empty($title)){
			    	echo "Введите название статьи";
			    }
			    elseif(empty($content)){
			    	echo "Введите содержимое статьи";
			    }
			    else{
                    $add = mysql_query("INSERT INTO `blog`(`title`, `date`, `content`) VALUES('$title', '$date', '$content')");
                    if ($add == 'true') {
                        echo "Пост опубликован";
                    }
                    else{
                        echo "Ошибка";
                    }
                }
			}
			else{
				
				
				
			}
			?>
		
		</article>
	<body>
</html>