<?php
require_once 'user.php';

if(isset($_POST['simpan']))
{
	if(isset($_POST['id']))
	{
		$user = new user();
		$id 	=$_POST['id'];
		$nama 	=$_POST['nama'];
		$alamat	=$_POST['alamat'];
		$umur	=$_POST['umur'];

	$user->update($nama,$alamat,$umur,$id);
	}
	
}