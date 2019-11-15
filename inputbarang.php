<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into Tbarang(merek,harga) values
	('".$_POST['Merek']."',
	 '".$_POST['Harga']."')";
	 $proses_data=mysqli_query($rumah,$query_tambah_data);
	 if ($proses_data){
		 echo ' Tambah data berhasil';
	 } else {
		 echo mysqli_error();
	 }
}	 
?>
<form method="POST" action="">
<table border="1">
 <tr>
     <td>Nama Barang </td>
     <td><input name="Merek" type="text"></td>
 </tr>
  <tr>
     <td>Harga </td>
     <td><input name="Harga" type="number"></td>
 </tr>
 <tr>
     <td><input name="simpan" type="submit"></td>
 </tr>
 </table>
 </form>
