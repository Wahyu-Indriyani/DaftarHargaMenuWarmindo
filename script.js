// Fungsi untuk memeriksa apakah input nama memenuhi syarat
function validateName() {
  const nameInput = document.getElementById("name");
  const nameValue = nameInput.value.trim(); // Menghapus spasi di awal dan akhir input

  if (nameValue.length < 3) {
    alert("Name must contain at least three letters.");
    nameInput.focus(); // Fokus kembali ke input nama
    return false; // Menghentikan pengiriman formulir
  }

  return true; // Lanjutkan pengiriman formulir jika input valid
}

// Fungsi untuk menangani pengiriman formulir kiritik dan saran
function submitKritikSaranForm() {
  // Memanggil fungsi validasi nama sebelum pengiriman formulir
  if (!validateName()) {
    return false; // Menghentikan pengiriman formulir jika input tidak valid
  }

  // Lanjutkan dengan pengiriman formulir jika semua input valid
  return true;
}
