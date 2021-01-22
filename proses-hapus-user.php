<?php
require_once 'user.php';

if(isset($_GET['id']))
{
	$user = new user();
	$id=$_GET['id'];

	//delete data user 
	$user->delete($id);
}