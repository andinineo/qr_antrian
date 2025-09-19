// script.js

// Fungsi ambil nomor antrian baru
function ambilNomor() {
    fetch('register.php', { method: 'POST' })
        .then(response => response.json())
        .then(data => {
            alert("Nomor antrian kamu: " + data.queue_number);
            document.getElementById("current-number").innerText = data.queue_number;
        })
        .catch(error => console.error('Error:', error));
}

// Fungsi panggil nomor berikutnya (admin)
function panggilNomor() {
    fetch('call_next.php', { method: 'POST' })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById("current-number").innerText = data.queue_number;
                // Bisa tambahkan suara notifikasi di sini
            } else {
                alert("Tidak ada antrian!");
            }
        })
        .catch(error => console.error('Error:', error));
}

// Auto refresh nomor antrian terbaru tiap 5 detik
function updateNomor() {
    fetch('checkin.php')
        .then(response => response.json())
        .then(data => {
            if (data.current_number) {
                document.getElementById("current-number").innerText = data.current_number;
            }
        })
        .catch(error => console.error('Error:', error));
}

setInterval(updateNomor, 5000);