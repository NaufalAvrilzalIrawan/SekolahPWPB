<?php
// define('NAMA', 'Naufal A.I');
// echo NAMA;

// echo "<br>";

// const UMUR = 12;
// echo UMUR . " Tahun";

// class Coba {
//     const NAMA = 'Jack';
// }

// echo "Nama saya " . Coba::NAMA;


echo "Baris Ke-" . __LINE__;
echo "<br>";
echo "Tempat " . __FILE__;
echo "<br>";
echo "Tempat " . __DIR__;
echo "<br>";
echo "Funtion " . __FUNCTION__;
echo "<br>";
echo "Class " . __CLASS__;
echo "<br>";
echo "Tempat " . __TRAIT__;
echo "<br>";
echo "Method " . __METHOD__;
echo "<br>";
echo "Tempat " . __NAMESPACE__;
echo "<br><br>";

function coba(){
    return __FUNCTION__;
}

echo "berada di function : " . coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>