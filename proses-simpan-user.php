<?php
// memanggil file siswa.php
require_once 'user.php';

if (isset($_POST['simpan'])) {
    // membuat objek siswa
    $user = new user();
    
    // ambil data hasil submit dari form
    $nama           = trim($_POST['nama']);
	$alamat          = trim($_POST['alamat']);
	$umur  = trim($_POST['umur']);



    // insert data siswa
    $user->insert($nama,$alamat,$umur);
}			
?>