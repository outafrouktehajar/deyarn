<?php
session_start();

if(isset($_SESSION['connexion']))
{
	print_r(1);
}
else
{
	print_r(0);
}

?>