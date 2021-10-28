<?php
	require_once('config.php');
	require_once('header.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$quote = new DB();
$quote->query('insert into quotes(author, content) values(:author, :content)');
$quote->bind(':author', $_POST['author']);
$quote->bind(':content', $_POST['quote']);
$quote->execute();
}
else
echo '<h2>Wczytajmy dane</h2>
<form action="" method="POST">
<p>Podaj autora cytatu:
<input type="text" name="author"></p>
<p>Wprowadź treść cytatu
<input type="text" name="quote"></p>
<button type="submit">Prześlij</button>
</form>';

	require_once('footer.php');
?>