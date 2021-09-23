<?php 

// define('NAMA', 'Bayu Cucan Herdian');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// class Coba {
//   const NAMA = 'Bayu';
// }

// echo Coba::NAMA;

// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __DIR__;

// function coba() {
//    return __FUNCTION__;
// }
// echo coba;

class Coba {
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>