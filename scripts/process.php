<?php 

session_start();

echo "You entered ".htmlentities($_POST['myanswer'])." which is ";

if ($_SESSION['answer'] == $_POST['answer'] )
	echo 'correct';
else
	echo 'wrong. We expected '.$_SESSION['answer'];

?>