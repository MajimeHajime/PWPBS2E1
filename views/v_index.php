<!DOCTYPE html>
<html>
<head>
    <title>ALDO FAKHRY XI_RPL_3</title>
    <link rel="stylesheet" type="text/css" href="assets/aldo.css">
</head>
<body>
    <h1 class="centertext">Database Siswa</h1>
    <h2>Data yang ada</h2>
    <form class="" action="index.php" method="GET">
    Cari berdasarkan NIS atau nama
    <input type="text" name="search" value="<?= $search ?>">
    <button type="submit">Cari</button>
    </form>
    <table border="1">
        <thread>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nis
                  <a href="index.php?sort=nis&order=ASC"><br>a</a>
                  <a href="index.php?sort=nis&order=DESC">d</a>
                </th>
                <th scope="col">Nama Lengkap
                  <a href="index.php?sort=nama_lengkap&order=ASC"><br>a</a>
                  <a href="index.php?sort=nama_lengkap&order=DESC">d</a>
                </th>
                <th scope="col">Gender
                  <a href="index.php?sort=jenis_kelamin&order=ASC"><br>a</a>
                  <a href="index.php?sort=jenis_kelamin&order=DESC">d</a>
                </th>
                <th scope="col">Kelas
                  <a href="index.php?sort=kelas&order=ASC"><br>a</a>
                  <a href="index.php?sort=kelas&order=DESC">d</a>
                </th>
                <th scope="col">Jurusan
                  <a href="index.php?sort=jurusan&order=ASC"><br>a</a>
                  <a href="index.php?sort=jurusan&order=DESC">d</a>
                </th>
            </tr>
        </thread>
        <tbody>
            <?php
                $i = 1;
                while ($siswa = $listSiswa->fetch_array()) {
            ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $siswa['nis']; ?></td>
                <td><?= $siswa['nama_lengkap']; ?></td>
                <td><?= $siswa['jenis_kelamin']; ?></td>
                <td><?= $siswa['kelas']; ?></td>
                <td><?= $siswa['jurusan']; ?></td>
                <td>
                    <a href="edit.php?nis=<?= $siswa["nis"]; ?>" class="badge badge-primary">Edit</a>
                    <a href="delete.php?nis=<?= $siswa["nis"]; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ?')">Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <h2>Aksi yang bisa dilakukan</h2>
    <a href="tambah.php">Tambah Data</a>
    <a href="logout.php">Logout</a>
</body>
</html>
