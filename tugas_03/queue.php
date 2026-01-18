<?php
$queue = [];

// Enqueue (Menambah data)
array_push($queue, "A", "B", "C");

// Dequeue (Menghapus data paling depan)
array_shift($queue);

// Menampilkan isi queue
echo "Isi Queue: " . implode(", ", $queue) . "\n";
?>