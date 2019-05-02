<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nip=$_POST['nip'];
 $nama=$_POST['nama'];

 $telp=$_POST['telp'];
 $email=$_POST['email'];
  $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"UPDATE `progdi` SET `nip`='$nip',`nama`='$nama',`telp`='$telp',`email`='$email',`alamat`='$alamat' where `nip`='$nip'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
