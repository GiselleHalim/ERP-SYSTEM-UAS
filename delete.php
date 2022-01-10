<?php
//include file config.php
include('config.php');

//jika benar mendapatkan GET id dari URL
if(isset($_GET['Item_Code'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$Nim = $_GET['Item_Code'];

	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($koneksi, "SELECT * FROM items WHERE Item_Code='$Item_Code'") or die(mysqli_error($koneksi));

	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($koneksi, "DELETE FROM items WHERE Item_Code='$Item_Code'") or die(mysqli_error($koneksi));
		if($del){
			echo '<script>alert("Data deleted successfully!."); document.location="indexlinverse.php?page=itemslist";</script>';
		}else{
			echo '<script>alert("Data deletion failed!"); document.location="indexlinverse.php?page=itemslist";</script>';
		}
	}else{
		echo '<script>alert("Item code is not found in the database"); document.location="indexlinverse.php?page=itemslist";</script>';
	}
}else{
	echo '<script>alert("Item code is not found in the database."); document.location="indexlinverse.php?page=itemslist";</script>';
}

?>
