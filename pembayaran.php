<?php

$bulan = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];


$bulan_dibayar = [];

$pembayaran = [
    ['no_transaksi' => 'SPP-2024-001', 'tanggal' => '2024-01-30', 'nis' => '22001001', 'bulan_tagihan' => '1', 'tahun_tagihan' => '2024', 'admin_id' => '1'],
    
];


foreach ($pembayaran as $data) {
    $bulan_dibayar[$data['nis']][$data['bulan_tagihan']] = true;
}

echo "<form action='' method='post'>";
echo "NIS: <input type='text' name='nis'><br>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

if (isset($_POST['nis'])) {
    $nis = $_POST['nis'];

    echo "<h2>Laporan Tagihan SPP Siswa dengan NIS: $nis</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Bulan</th><th>Status Pembayaran</th></tr>";
    foreach ($bulan as $bulan_ke) {
        $status_pembayaran = (isset($bulan_dibayar[$nis][$bulan_ke]) && $bulan_dibayar[$nis][$bulan_ke] == true) ? "Lunas" : "Belum Lunas";
        echo "<tr><td>Bulan $bulan_ke</td><td>$status_pembayaran</td></tr>";
    }
    echo "</table>";
}
?>