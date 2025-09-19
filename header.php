<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Aplikasi Antrian RS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f8f9fa; }
    .antrian-box {
      font-size: 3rem;
      font-weight: bold;
      padding: 20px;
      background: #e3f2fd;
      border-radius: 10px;
      margin: 20px auto;
      max-width: 300px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="index.php">🏥 RS Antrian</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Ambil Antrian</a></li>
        <li class="nav-item"><a href="display.php" class="nav-link">Layar Pasien</a></li>
        <li class="nav-item"><a href="admin.php" class="nav-link">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">