<?php
class Node {
    public $data;
    public $next;
    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

// Membuat 3 node
$head = new Node(100);
$node2 = new Node(200);
$node3 = new Node(300);

// Menghubungkan node
$head->next = $node2;
$node2->next = $node3;

// Menampilkan isi
$current = $head;
while ($current != null) {
    echo $current->data . " -> ";
    $current = $current->next;
}
echo "NULL\n";
?>