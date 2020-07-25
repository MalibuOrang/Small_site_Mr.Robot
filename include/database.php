<?php
$link = mysqli_connect('localhost','salapaka_hebni87','earmagistor','salapaka_hebni87');
if(mysqli_connect_errno())
{
	echo 'Ошибка подключения к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
	exit();
}


?>