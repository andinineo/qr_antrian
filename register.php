<?php include "header.php"; ?>
<div class="card shadow-lg text-center p-4">
  <h3 class="mb-3">✅ Pendaftaran Berhasil!</h3>
  <p>Nomor Antrian Anda: <span class="badge bg-success fs-5">#<?=$nextNumber?></span></p>
  <img src="<?=htmlspecialchars($qrImageUrl)?>" class="img-fluid my-3" style="max-width:250px;">
  <p class="text-muted">Scan QR ini saat tiba di loket untuk konfirmasi kedatangan.</p>
  <a href="index.php" class="btn btn-outline-primary mt-2">Daftar Lagi</a>
  <a href="admin.php" class="btn btn-dark mt-2">Lihat Admin</a>
</div>
<?php include "footer.php"; ?>