<?php

include 'config.php';
$id = (int) $_GET['id'];
$output_stat = mysql_query("SELECT * FROM `blog` WHERE `id` = '$id'");
$content = mysql_fetch_assoc($output_stat);

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
		
		<?php
		echo "<section>
		<h2>{$content['title']}</h2>
		{$content['content']}
		<p class=\"date\">{$content['date']}</p>
		</section>";
		echo "<a href=\"dell.php?id={$content['id']}\">Удалить запись</a>";
		echo "<a href=\"rededit.php?id={$content['id']}\">Редактировать</a>";
		
		?>
		
		
		</article>
	<body>
</html>