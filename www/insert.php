<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 
$nip=$_POST['nip'];
 $nama=$_POST['nama'];
 $telp=$_POST['telp'];
 $email=$_POST['email'];
   $alamat=$_POST['alamat'];
   
 $q=mysqli_query($con,"INSERT INTO `progdi` (`nip`,`nama`,`telp`,`email`,`alamat`) VALUES ('$nip','$nama','$telp','$email','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
