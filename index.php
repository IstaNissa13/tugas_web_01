<!DOCTYPE html>
<html>

<head>
    <title> TUGAS WEB 1 </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2> DATA SISWA </h2>

    <table>
        <thead>
            <tr>
                <th> ID Siswa </th>
                <th> Nama Siswa </th>
                <th> Jenis Kelamin </th>
                <th> Alamat </th>
                <th> Hobi </th>
            </tr>
        </thead>


        <?php 
    include_once("connection.php");
    $data=mysqli_query($connect, "SELECT * FROM tbl_siswa");
    while($datauser=mysqli_fetch_array($data)){
    ?>
        <tr>
            <td><?php echo $datauser['id_siswa']; ?></td>
            <td><?php echo $datauser['nama_siswa']; ?></td>
            <td><?php echo $datauser['jenis_kelamin'] ;?></td>
            <td><?php echo $datauser['alamat']; ?></td>
            <td><?php echo $datauser['hobi']; ?></td>
        </tr>

        <?php
    }
    ?>

    </table>

    <a href="add.php">Add Data</a>
</body>

</html>