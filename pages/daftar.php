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
  <div class="container py-3">
  <header>
    <?php
      include '../component/navbar.php';
    ?>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">Daftar Beasiswa</h1>
    </div>
  </header>
  <main>
    <div id="formBeasiswa" class="container mt-2">
        <form action="../controllers/tambah-data.php" method="POST" name="form-daftar"  class="mx-auto" style="max-width: 600px;" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Masukkan Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Masukkan Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" minlength="12" maxlength="17">
            </div>
            <div class="mb-3">
                <label for="semester" class="form-label">Semester Saat Ini</label>
                <select class="form-select" id="semester" name="semester" required>
                    <option value="">Pilih</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="ipk" class="form-label">IPK Terakhir</label>
                <input type="number" class="form-control" id="ipk" name="ipk" step="0.01" readonly>
            </div>
            <div class="mb-3">
                <label for="beasiswa" class="form-label">Pilih Beasiswa</label>
                <select class="form-select" id="beasiswa" name="beasiswa" required>
                    <?php
                        $beasiswa = $_GET['beasiswa'] ?? '';
                        $beasiswaOptions = ['KIPK', 'Unggulan', 'Prestasi'];
                        echo "<option value=''>Pilih Beasiswa</option>";
                        foreach ($beasiswaOptions as $option) {
                            $selected = $option === $beasiswa ? "selected" : "";
                            echo "<option value='$option' $selected>" . ucfirst($option) . "</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="berkas" class="form-label">Upload Berkas Syarat</label>
                <input type="file" class="form-control" id="berkas" name="berkas" accept=".pdf,.jpg,.jpeg,.png,.zip" required>
            </div>
            <button type="submit" value="tambah" name="tambah" id="tambah" class="btn btn-primary w-100">Daftar</button>
            <a href="index.php" class="btn btn-secondary w-100 mt-2">Batal</a>
        </form>
    </div>  
  </main>

  <?php
    include '../component/footer.php';
  ?>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script>
        // Fungsi untuk membuat IPK secara random
        function generateRandomIPK(min, max) {
            return (Math.random() * (max - min) + min).toFixed(2);
        }
        document.getElementById('ipk').value = generateRandomIPK(2.5, 3.5);

        //Fungsi untuk disabled tombol daftar ketika IPK kurang dari 3
        function validateIPK() {
            const ipk = parseFloat(document.getElementById('ipk').value);
            document.getElementById('tambah').disabled = ipk < 3;
            document.getElementById('beasiswa').disabled = ipk < 3;
            document.getElementById('berkas').disabled = ipk < 3;
        }
        validateIPK();
    </script>
</body>
</html>
