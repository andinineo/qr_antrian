<?php include 'header.php'; ?>
<div class="container mt-5">
  <h2 class="text-center">Ambil Antrian</h2>
  <form id="ambilForm" action="register.php" method="post" class="mt-4">
    <div class="mb-3">
      <label for="poli" class="form-label">Pilih Poli</label>
      <select name="poli_id" id="poli" class="form-control" required>
        <?php
          $polies = $conn->query("SELECT * FROM poli");
          while($p = $polies->fetch_assoc()) {
            echo "<option value='{$p['id']}'>{$p['nama_poli']}</option>";
          }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" name="patient_name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">NIK (Opsional)</label>
      <input type="text" name="nik" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">No. HP</label>
      <input type="tel" name="phone" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Daftar &amp; Dapatkan QR</button>
  </form>
</div>
<?php include 'footer.php'; ?>