<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into Tpembayaran(merek,qty,harga) values
	('".$_POST['Merek']."',
	 '".$_POST['Qty']."',
	 '".$_POST['Harga']."')";
	 $proses_data=mysqli_query($rumah,$query_tambah_data);
	 if ($proses_data){
		 echo ' Tambah data berhasil<br/>';
	 } else {
		 echo mysqli_error();
	 }
}	 
?>
<form method="POST" action="">
<table border="1">
 <tr>
     <td>nama barang </td>
     <td><input name="Merek" type="text"></td>
 </tr>
  <tr>
     <td>qty </td>
     <td><input name="Qty" type="number"></td>
 </tr>
  <tr>
     <td>harga </td>
     <td><input name="Harga" type="number"></td>
 </tr>
 <tr>
     <td><input name="simpan" type="submit"></td>
 </tr>
 </table>
 </form>