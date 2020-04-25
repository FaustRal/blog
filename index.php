<?php

include 'config.php';
$output_stat = mysql_query('SELECT * FROM `blog` ORDER BY `date`');

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
		
		 while($a = mysql_fetch_assoc($output_stat)){
		echo "<section>
		 <h2><a href=\"/page.php?id={$a['id']}\">{$a['title']}</a></h2>
		{$a['content']}
		<p class=\"date\">{$a['date']}</p>
		</section>";
		}
		
		?>
		
		</article>
	<body>
</html>