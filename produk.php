<?php

class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 2000;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "boruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->tambahProperty = "hai";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "boruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sonny Computer";
$produk4->harga = 250000;
// echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "Komik : " . $produk3->getLabel();
echo "<hr>";
echo "Game : " . $produk4->getLabel();

