<?php 
//membuat class database
class database{
	//property
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_psb";
	//method koneksi MySQL
	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);

	}

	function tampil_data(){
		$data = mysql_query("select * from user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}
	//Method untuk menyimpan data ke tabel user
	function input($nama,$alamat,$usia){
		mysql_query("insert into user values('','$nama','$alamat','$usia')");
	}
	//method untuk menghapus data pada tabel user
	function hapus($id){
		mysql_query("delete from user where id='$id'");
	}
	//method untuk mengedit pada tabel user
	function edit($id){
		$data = mysql_query("select * from user where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	//method untuk mengubah data pada tabel muser
	function update($id,$nama,$alamat,$blok){
		mysql_query("update user set nama='$nama', alamat='$alamat', blok='$blok'  where id='$id'");
	}


	}
?>