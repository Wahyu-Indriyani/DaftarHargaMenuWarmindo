// Fungsi untuk memvalidasi formulir kritik dan saran
document.getElementById('kritiksaranForm').addEventListener('submit', function(event) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const kritik = document.getElementById('kritik').value;
    const saran = document.getElementById('saran').value;

    // Validasi bahwa semua bidang sudah diisi
    if (name === '' || email === '' || phone === '' || kritik == '' || saran == '') {
        alert('All fields are required!');
        event.preventDefault(); // Mencegah pengiriman formulir
    } 
});

// Fungsi untuk memeriksa apakah input nama memenuhi syarat
function validateName() {
    const nameInput = document.getElementById('name');
    const nameValue = nameInput.value.trim(); // Menghapus spasi di awal dan akhir input

    if (nameValue.length < 3) {
        alert("Name must contain at least three letters.");
        nameInput.focus(); // Fokus kembali ke input nama
        return false; // Menghentikan pengiriman formulir
    }

    return true; // Lanjutkan pengiriman formulir jika input valid
}

// Fungsi untuk menangani pengiriman formulir kiritik dan saran
function submitKritikSaranForm(){
    // Memanggil fungsi validasi nama sebelum pengiriman formulir
    if (!validateName()) {
        return false; // Menghentikan pengiriman formulir jika input tidak valid
    }

    // Lanjutkan dengan pengiriman formulir jika semua input valid
    return true;
}
