<?php
$id=$_POST['id'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$hobi=$_POST['hobi'];

include_once("connection.php");
$result=mysqli_query($connect, "INSERT INTO tbl_siswa VALUES ('$id', '$nama', '$jenis_kelamin', '$alamat', '$hobi')");

if($result){
    echo "<script>alert('Data Successully Added'); window.location.href='index.php';</script>";   
}

?>