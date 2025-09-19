<?php include "header.php"; ?>
<div class="text-center">
  <h2>📺 Layar Antrian</h2>
  <p class="text-muted">Nomor antrian yang sedang dipanggil</p>
  <div id="current-number" class="antrian-box display-3">-</div>
</div>
<script>
  // auto refresh tiap 3 detik
  setInterval(updateNomor, 3000);
</script>
<?php include "footer.php"; ?>