<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:data.php?");
}

   $id=$_GET['id'];
   $sql = ("SELECT * FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel  WHERE tb_guru.id_guru='$id'");
   $query= mysqli_query($koneksi, $sql);
   $data= mysqli_fetch_assoc($query);

?>

<html>
<head>
</head>
<body>
    <h1>Edit</h1>
    <form action="proses_edit.php" method="POST">
       
        <fieldset>
        <input type="hidden" name="id_guru" value="<?php echo $data['id_guru']?>"/>
        <p>
                <label for="nama_guru">Nama :</label>
                <input type="text" name="nama_guru" value="<?php echo $data['nama_guru']?>"/>
            </p>
            <p>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat']?>"/>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis kelamin :</label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" value="<?php echo $data['jenis_kelamin']?>"/>Laki-laki
                <input type="radio" name="jenis_kelamin" value="perempuan" value="<?php echo $data['jenis_kelamin']?>"/>Perempuan
            </p>
            <p>
                <label for="nama_mapel">Mapel :</label>
                <input type="text" name="nama_mapel" value="<?php echo $data['nama_mapel']?>"/>
            </p>
            <p>
                <label for="ruangan">Ruang :</label>
                <input type="number" name="ruangan" value="<?php echo $data['ruangan']?>"/>
            </p>
            <p>
                <input type="submit" value="Simpan" name="edit" />
            </p>

</fieldset>
</form>
</body>
</html>