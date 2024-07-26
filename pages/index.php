<!doctype html>
<html lang="en" data-bs-theme="auto">
<head><script src="../assets/js/color-modes.js"></script>
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
  <!-- Custom styles for this template -->
  <link href="../assets/pricing.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid py-3" style="max-width:80%;">
  <header>
    <?php
      include '../component/navbar.php';
    ?>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">Jenis Beasiswa</h1>
      <p class="fs-5 text-body-secondary">Beberapa jenis beasiswa yang disediakan oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbud) Indonesia</p>
    </div>
  </header>
  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Beasiswa KIPK</h4>
          </div>
          <div class="card-body">
            <h5 class="card-title pricing-card-title">Rp.2.400.000 s.d. Rp.8.000.000<small class="text-body-secondary fw-light">/semester</small></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Biaya kuliah ditanggung penuh</li>
              <li>Uang saku bulanan</li>
              <li>Kesempatan mengikuti program</li>
              <li>Kesempatan bergabung komunitas</li>
              <li>Akses ke berbagai acara</li>
            </ul>
            <a href="daftar.php?beasiswa=KIPK">
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Daftar</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Beasiswa Unggulan</h4>
          </div>
          <div class="card-body">
            <h5 class="card-title pricing-card-title">Rp.1.400.000<small class="text-body-secondary fw-light">/bulan</small></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Biaya kuliah ditanggung penuh</li>
              <li>Uang saku bulanan</li>
              <li>Dukungan dana untuk penelitian</li>
              <li>Kesempatan mengikuti workshop</li>
              <li>Akses ke jaringan alumni</li>
              <li>Pengakuan resmi dari pemerintah</li>
            </ul>
            <a href="daftar.php?beasiswa=Unggulan">
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Daftar</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Beasiswa Afirmasi</h4>
          </div>
          <div class="card-body">
            <h5 class="card-title pricing-card-title">Rp.8.000.000<small class="text-body-secondary fw-light">(hanya sekali)</small></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Biaya kuliah ditanggung penuh</li>
              <li>Uang saku bulanan</li>
              <li>Dukungan tambahan</li>
              <li>Kesempatan mengikuti program</li>
              <li>Memastikan akses ke pendidikan</li>
              <li>Program untuk membantu integrasi</li>
            </ul>
            <a href="daftar.php?beasiswa=Afirmasi">
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Daftar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php
    include '../component/footer.php';
  ?>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
