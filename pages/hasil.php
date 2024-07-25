<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <script src="../assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/logo/logo.ico">
  <title>Daftar</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/pricing/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <!-- Custom styles for this template -->
  <link href="../assets/pricing.css" rel="stylesheet">
</head>
<body>
  <div class="container py-3">
    <header>
      <?php include '../component/navbar.php'; ?>
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Hasil Pengumuman</h1>
      </div>
    </header>
    <main>
      <div class="text-center" style="min-height: 330px;">
        <div class="table-responsive mx-auto">
          <table id="hasilPengumumanTable" class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Semester</th>
                <th scope="col">IPK</th>
                <th scope="col">Beasiswa</th>
                <th scope="col">Berkas</th>
                <th scope="col">Status Ajuan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include_once '../controllers/tampil-data.php';
                $data = getHasilPengumuman();
                $index = 1;
                foreach ($data as $row) {
              ?>
              <tr>
                <td><?= $index++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td><?= $row['semester'] ?></td>
                <td><?= $row['ipk'] ?></td>
                <td><?= $row['beasiswa'] ?></td>
                <td><img src="../images/berkas/<?= $row['berkas'] ?>" alt="Berkas Pendaftaran" height="30px"></td>
                <td>
                  <?php
                  if ($row['status_ajuan'] == 1) {
                      echo 'Belum Diverifikasi';
                  } elseif ($row['status_ajuan'] == 2) {
                      echo 'Telah Diverifikasi';
                  } else {
                      echo '-';
                  }
                  ?>
                </td>
                <td>
                  <a href="../images/berkas/<?= $row['berkas']?>" class="btn btn-sm btn-primary" target="_blank">Lihat Berkas</a>
                  <?php if ($row['status_ajuan'] != 2) { ?>
                  <a href="../controllers/verifikasi-data.php?id=<?= $row['id_daftar']?>" class="btn btn-sm btn-success" onclick="return confirm('Anda yakin ingin memverifikasi data ini?')">Verifikasi</a>
                  <?php } ?>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
    <?php include '../component/footer.php'; ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#hasilPengumumanTable').DataTable({
        "paging": true,
        "searching": true,
        "info": true,
        "lengthChange": false,
        "autoWidth": false
      });
    });
  </script>
</body>
</html>
