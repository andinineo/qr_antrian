<?php
require 'config.php';
$token = $_GET['token'] ?? '';
if ($token === '') {
    die('Token tidak ditemukan.');
}
$stmt = $conn->prepare("SELECT id, patient_name, queue_number, status FROM queues WHERE token = ?");
$stmt->bind_param('s', $token);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
if (!$row) die('Antrian tidak ditemukan.');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Konfirmasi kedatangan: ubah status -> waiting (tetap) atau bisa set called/arrived
    $id = $row['id'];
    $upd = $conn->prepare("UPDATE queues SET status = 'waiting' WHERE id = ?");
    $upd->bind_param('i', $id);
    $upd->execute();
    $upd->close();
    $msg = "Kedatangan terkonfirmasi. Silakan tunggu dipanggil.";
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Check-in Antrian</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
  <h1>Check-in</h1>
  <p>Nama: <strong><?=htmlspecialchars($row['patient_name'])?></strong></p>
  <p>Nomor antrian: <strong>#<?= $row['queue_number'] ?></strong></p>
  <p>Status saat ini: <strong><?=htmlspecialchars($row['status'])?></strong></p>

  <?php if (!empty($msg)): ?>
    <p style="color:green"><?=$msg?></p>
  <?php endif; ?>

  <form method="post">
    <button type="submit">Konfirmasi Kedatangan</button>
  </form>

  <p><a href="index.php">Kembali ke pendaftaran</a></p>
</div>
</body>
</html>