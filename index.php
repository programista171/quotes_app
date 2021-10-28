<?php
	require_once('config.php');
	require_once('header.php');

	$db = new DB();
	$db->query('select authors.name, quotes.content from quotes, authors where authors.id = quotes.author');
		$results = $db->resultSet();
		echo '<h2>Dotychczas wpisane cytaty</h2>
		<table border="2px">
			<tr>
				<td>Autor</td>
				<td>Cytat</td>
			</tr>';
			foreach($results as $result)
				echo "<tr>
					<td>".$result['name']."</td>
					<td>".$result['content']."</td>
				</tr>";
			echo "</table>";

	require_once('footer.php');
?>