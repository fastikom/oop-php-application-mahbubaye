<<<<<<< HEAD
<?php 
include 'lib_database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama'],$_POST['alamat'],$_POST['blok']);
 	header("location:index.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:index.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['blok']);
 	header("location:index.php");
 }
=======
<?php 
include 'lib_database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama'],$_POST['alamat'],$_POST['blok']);
 	header("location:index.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:index.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['blok']);
 	header("location:index.php");
 }
>>>>>>> 791c3e2d3832e68744b84cb7d57ef4c63704b4aa
?>