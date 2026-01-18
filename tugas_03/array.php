<?php
$angka = [10, 20, 30, 40, 50];

// Menampilkan seluruh isi array
echo "Isi Array: " . implode(", ", $angka) . "\n";

// Menghitung total dan rata-rata
$total = array_sum($angka);
$rataRata = $total / count($angka);

echo "Total: $total \n";
echo "Rata-rata: $rataRata \n";
?>