<?php
require 'config.php';
$action = $_POST['action'] ?? '';
if ($action === 'reset') {
    $conn->query("TRUNCATE TABLE queues");
    header('Location: admin.php'); exit;
}

if ($action === 'call_next') {
    // ambil waiting paling kecil queue_number
    $res = $conn->query("SELECT id FROM queues WHERE status='waiting' ORDER BY queue_number ASC LIMIT 1");
    if ($r = $res->fetch_assoc()) {
        $id = $r['id'];
        $stmt = $conn->prepare("UPDATE queues SET status='called', called_at = NOW() WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
        // di sini bisa ditambahkan notifikasi (sms/push) ke pasien
    }
    header('Location: admin.php'); exit;
}

if ($action === 'call' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $stmt = $conn->prepare("UPDATE queues SET status='called', called_at = NOW() WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
    header('Location: admin.php'); exit;
}

if ($action === 'serve' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $stmt = $conn->prepare("UPDATE queues SET status='served' WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
    header('Location: admin.php'); exit;
}

header('Location: admin.php'); exit;
?>