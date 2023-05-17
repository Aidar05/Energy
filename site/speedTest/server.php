<?php 
$db_connect = mysqli_connect('localhost', 'root', '', 'user');

$amount_words = $_POST['amount_words'];
$w = '';
for ($i=0; $i < $amount_words; $i++) {
	$rand_index_word = rand(1, 145);
	$words = mysqli_query($db_connect, "SELECT `word` FROM `words` WHERE `id` = '{$rand_index_word}'");
	foreach($words as $value){
		$w .= $value['word'].' ';
	}
}
echo $w;
?>