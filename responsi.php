<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lokasiAwal = isset($_POST['lokasiAwal']) ? $_POST['lokasiAwal'] : '';
    $lokasiTujuan = isset($_POST['lokasiTujuan']) ? $_POST['lokasiTujuan'] : '';
    $jarak = isset($_POST['jarak']) ? $_POST['jarak'] : '';
    $biaya = isset($_POST['biaya']) ? $_POST['biaya'] : '';

    if ($lokasiAwal && $lokasiTujuan && $jarak && $biaya) {
        $data = "Lokasi Awal: $lokasiAwal, Lokasi Tujuan: $lokasiTujuan, Jarak: $jarak km, Biaya: Rp$biaya\n";
        $file = fopen("data.txt", "a");
        if ($file) {
            fwrite($file, $data);
            fclose($file);
            echo "Data berhasil disimpan. <a href='lihat_data.php'>Lihat Data</a>";
        } else {
            echo "Gagal menyimpan data.";
        }
    } else {
        echo "Data input tidak valid.";
    }
}
?>
