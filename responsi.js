// Fungsi untuk memasukkan lokasi awal atau tujuan
function masukkanLokasi(id) {
    const lokasi = prompt(`Masukkan ${id === 'lokasiAwal' ? 'Lokasi Awal' : 'Lokasi Tujuan'}:`);
    if (lokasi !== null) {
        document.getElementById(id).value = lokasi;
        alert(`${id === 'lokasiAwal' ? 'Lokasi Awal' : 'Lokasi Tujuan'}: ${lokasi} telah dimasukkan.`);
    }
}

// Fungsi untuk menghitung biaya pengiriman
function hitungBiaya() {
    const jarak = document.getElementById('jarak').value; // Mengambil nilai jarak dari input
    const biaya = jarak * 15000; // Menghitung biaya pengiriman
    document.getElementById('hasil').innerText = `Biaya: Rp${biaya}`; // Menampilkan hasil biaya
    document.getElementById('biaya').value = biaya; // Menyimpan biaya ke input tersembunyi
}
