<?php
$graph = [
    "A" => ["B", "C"],
    "B" => [],
    "C" => []
];

foreach ($graph as $node => $tetangga) {
    echo "Node $node terhubung ke: " . implode(", ", $tetangga) . "\n";
}
?>