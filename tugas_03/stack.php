<?php
$stack = [];

// Push (Menambah data)
array_push($stack, 10, 20, 30);

// Pop (Menghapus data teratas)
array_pop($stack);

// Menampilkan isi stack
echo "Isi Stack: " . implode(", ", $stack) . "\n";
?>