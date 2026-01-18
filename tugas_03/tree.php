<?php
class TreeNode {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

$root = new TreeNode("Root");
$root->left = new TreeNode("Child Kiri");
$root->right = new TreeNode("Child Kanan");

echo "Root: " . $root->data . "\n";
echo "Kiri: " . $root->left->data . "\n";
echo "Kanan: " . $root->right->data . "\n";
?>