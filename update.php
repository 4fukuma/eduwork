<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $stmt = $pdo->prepare("UPDATE products SET nama_produk = ?, harga = ?, deskripsi = ?, stok = ? WHERE id = ?");
    $stmt->execute([$nama_produk, $harga, $deskripsi, $stok, $id]);

    header("Location: index.php#products");
    exit();
}
?>