<?php

class Produk
{
  private $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0; 

  // Contructor
    public function __construct ($judul  = "judul", $penulis = "penulis", $penerbit  = "penerbit", $harga = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

  // Setter & Getter 
    public function setJudul($judul) {
      return $this->judul = $judul;
    }

    public function getJudul() {
      return $this->judul;
    }

    public function setPenulis($penulis) {
      return $this->penulis = $penulis;
    }

    public function getPenulis() {
      return $this->penulis;
    }

    public function setPenerbit($penerbit) {
      return $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
      return $this->penerbit;
    }

    public function setDiskon($diskon) {
      $this->diskon = $diskon;
    }

    public function getDiskon() {
      return $this->diskon;
    }

    public function setHarga($harga) {
      return $this->harga = $harga;
    }

    public function getHarga() {
      return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }
  
  public function getInfoProduk() {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}

class Komik extends Produk {
  public $jmlHalaman;

  public function __construct($judul  = "judul", $penulis = "penulis", $penerbit  = "penerbit", $harga = 0, $jmlHalaman = 0) {
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk() {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {
  public $waktuMain;

  public function __construct($judul  = "judul", $penulis = "penulis", $penerbit  = "penerbit", $harga = 0, $waktuMain = 0) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
}

  public function getInfoProduk() {
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

class cetakInfoProduk {
  public function cetak (Produk $produk) {
    $str = "{$produk->judul} | {$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("uncharted", "Neil Druckmann", "Sonny Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("Judul Baru");
echo $produk1->getJudul();
echo $produk1->getPenulis();