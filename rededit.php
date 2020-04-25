<?php
include 'config.php';
$red_id = $_GET['id'];

$output_stat = mysql_query("SELECT * FROM `blog` WHERE `id` = '$red_id'");
$content = mysql_fetch_assoc($output_stat);
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
		echo "<form method='post'>";
		echo "<input type='text' name='title' value='{$content['title']}'></br></br></br>";
		echo "<textarea type='text' name='content'>{$content['content']}</textarea></br>";
		echo "<button name='form' formaction='save.php?id={$red_id}'>Опубликовать</button>";
		echo "</form>";
        
		?>
		</article>
	<body>
</html>