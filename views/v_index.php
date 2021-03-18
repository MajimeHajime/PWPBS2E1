<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="favicon.ico" href="assets/images/img5e96080a0802227705e96080a080cd_l.jpg" type="image/x-icon">  
    <title>Aldo Fakry</title>
    <script type="text/javascript" src="assets/media/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/media/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/media/plugins/toastr/toastr.min.js"></script>

    <link rel="stylesheet" href="assets/media/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="assets/media/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/aldo.css">
</head>
<body>
    <h1 class="centertext">Database Siswa</h1>
    <h2>Data yang ada</h2>
    <table border="1">
        <thread>
            <tr>
                <th scope="col"> No.
                </th>
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
                <th scope="col">Action</th>
                <th scope="col">Pic</th>
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
                <td><?= $siswa['nama_kelas']; ?></td>
                <td><?= $siswa['jurusan']; ?></td>
                <td>
                    <a href="edit.php?nis=<?= $siswa["nis"]; ?>" class="btn btn-warning">Edit</a>
                    <a class="btn btn-danger btnDelete" href="delete.php?nis=<?= $siswa["nis"]; ?>">Delete</a></td>
                <td>
                  <img src="<?= base_url(); ?>/assets/images/<?= $siswa['file']; ?>" width="68px" alt="">
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <h2>Aksi yang bisa dilakukan</h2>
    <a href="tambah.php">Tambah Data</a>
    <a href="logout.php">Logout</a>

    <div class="modal fade" tabindex=:"-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="Close" ><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btnYa" name="button">Ya</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" name="button">Tidak</button>
          </div>
        </div>

      </div>

    </div>
    <script type="text/javascript">
    console.log("lmao");
      $(function() {
        $(".btnDelete").on("click", function(e) {
          e.preventDefault();
          var nama = $(this).parent().parent().children() [2];
          nama = $(nama).html();
          var tr = $(this).parent().parent();

          $(".modal").modal("show");
          $(".modal.title").html("Konfirmasi");
          $(".modal-body").html("Anda yakin ingin menghapus data <b>" + nama + "</b>?");

          var href = $(this).attr('href');

          $('.btnYa').off();
          $('.btnYa').on('click', function() {
            $.ajax({
              'url' : href,
              'type' : 'POST',
              'success' : function(result) {
                if(result == 1) {
                  $(".modal").modal("hide");
                  tr.fadeOut();
                  toastr.success("Data berhasil dihapus", "Informasi");
                }
                else {
                  $(".modal").modal("hide");
                  toastr.error("Data tidak bisa dihapus");
                }
              }
            })
          })
        })
      })
    </script>


</body>
</html>
