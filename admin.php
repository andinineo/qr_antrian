<?php include "header.php"; ?>
<div class="card shadow-lg p-4">
  <h2 class="mb-4">📊 Dashboard Antrian</h2>
  <div class="d-flex gap-2 mb-3">
    <form action="call_next.php" method="post">
      <input type="hidden" name="action" value="call_next">
      <button class="btn btn-success">Panggil Nomor Berikutnya</button>
    </form>
    <form action="call_next.php" method="post" onsubmit="return confirm('Reset semua antrian?')">
      <input type="hidden" name="action" value="reset">
      <button class="btn btn-danger">Reset Antrian</button>
    </form>
  </div>

  <table class="table table-striped table-hover">
    <thead class="table-primary">
      <tr>
        <th>No</th><th>Nama</th><th>Antrian</th><th>Status</th><th>Dipanggil</th><th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($rows as $r): ?>
      <tr>
        <td><?=$r['id']?></td>
        <td><?=htmlspecialchars($r['patient_name'])?></td>
        <td><span class="badge bg-dark">#<?=$r['queue_number']?></span></td>
        <td>
          <?php if ($r['status']=='waiting') echo "<span class='badge bg-warning text-dark'>Menunggu</span>"; ?>
          <?php if ($r['status']=='called') echo "<span class='badge bg-info text-dark'>Dipanggil</span>"; ?>
          <?php if ($r['status']=='served') echo "<span class='badge bg-success'>Selesai</span>"; ?>
        </td>
        <td><?=$r['called_at'] ?? '-'?></td>
        <td>
          <form action="call_next.php" method="post" class="d-inline">
            <input type="hidden" name="action" value="call">
            <input type="hidden" name="id" value="<?=$r['id']?>">
            <button class="btn btn-sm btn-primary">Panggil</button>
          </form>
          <form action="call_next.php" method="post" class="d-inline">
            <input type="hidden" name="action" value="serve">
            <input type="hidden" name="id" value="<?=$r['id']?>">
            <button class="btn btn-sm btn-success">Selesai</button>
          </form>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php include "footer.php"; ?>