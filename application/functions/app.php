<?php

function TampilkanSemuaKategori() {
	$query = "SELECT * FROM blog_cat ORDER BY nm_kategori ASC";
	return result($query);
}

function TampilkanArtikelPerId($id) {
	$query = "SELECT a.*, b.nm_kategori, c.username FROM blog a INNER JOIN blog_cat b ON a.id_kategori = b.id_kategori INNER JOIN users c ON a.id_user = c.id_user WHERE a.id_konten='$id'";
	return result($query);
}

function TampilkanSemuaArtikel() {
	$query = "SELECT * FROM blog ORDER BY id_konten DESC";
	return result($query);
}

function TampilkanArtikelTerbaru123() {
	$query = "SELECT * FROM blog ORDER BY id_konten DESC LIMIT 0,3";
	return result($query);
}

function TampilkanArtikelTerbaru456() {
	$query = "SELECT * FROM blog ORDER BY id_konten DESC LIMIT 3,3";
	return result($query);
}

function TampilkanSemuaArtikelByKategori($id) {
	$query = "SELECT * FROM blog WHERE id_kategori='$id' ORDER BY id_konten DESC";
	return result($query);
}

function TampilkanSemuaSlider() {
	$query = "SELECT * FROM slider ORDER BY id_slider DESC";
	return result($query);
}

function TampilkanSliderTerbaru() {
	$query = "SELECT * FROM slider ORDER BY id_slider DESC LIMIT 0,1";
	return result($query);
}

function TampilkanSlider23() {
	$query = "SELECT * FROM slider ORDER BY id_slider DESC LIMIT 1,2";
	return result($query);
}

function TampilkanSemuaProduk() {
	$query = "SELECT * FROM product ORDER BY id_product DESC";
	return result($query);
}

function result($query){
	global $link;
	if ($result = mysqli_query($link, $query) or die('gagal menampilkan data')){
		return $result;
	}
}

function run($query){
	global $link;

	if(mysqli_query($link, $query)) return true;
	else return false;
}

function excerpt($string){
	$string = substr($string, 0, 350);
	return $string . "...";
}

function excerptInfo($string){
	$string = substr($string, 0, 75);
	return $string . "...";
}

function escape($data){
	global $link;
	return mysqli_real_escape_string($link, $data);
}

?>