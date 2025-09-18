<?php include "header.php"; ?>
<div class="card shadow-lg p-4">
  <h2 class="mb-3 text-center">📋 Pendaftaran Pasien</h2>
  <p class="text-muted text-center">Isi data pasien untuk mendapatkan nomor antrian & QR Code</p>
  <form action="register.php" method="post">
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" name="patient_name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">NIK (opsional)</label>
      <input type="text" name="nik" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">No. HP</label>
      <input type="tel" name="phone" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary w-100">Daftar & Dapatkan QR</button>
  </form>
</div>
<?php include "footer.php"; ?>