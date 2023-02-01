<html>
<head>
</head>
<body>
    <h1>Tambah</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_guru">Nama :</label>
                <input type="text" name="nama_guru" />
            </p>
            <p>
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" rows="S"></textarea>
            </p>
            <p>
            <label for="jenis_kelamin">Jenis kelamin :</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki"/>Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"/>Perempuan
            </p>
            <p>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel" />
            </p>
            <p>
                <label for="ruangan">Ruang :</label>
                <input type="number" name="ruangan">
            </p>
            <p>
                <input type="submit" value="Tambah" name="tambah" />
            </p>
        </fieldset>
</form>
</body>