<?php
$nama = "wawa";

$tanggal = date("d");
$panjangNama = strlen($nama);

if ($panjangNama == ($tanggal - 2)) {
    echo "Berhasil";
} elseif ($panjangNama < ($tanggal - 2)) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}
?>
