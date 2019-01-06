<?php

session_start();
$email=$_SESSION['email'];
if(session_destroy())
{
	header('Location:form.php');
}
?>