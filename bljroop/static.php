<?php

// class ContohStatik {
//     public static $angka = 1;

//     public static function nilai() {
//         return "Ini sudah " . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatik::$angka;
// echo "<br>";
// echo ContohStatik::nilai();
// echo "<br>";
// echo ContohStatik::nilai();
// echo "<br>";
// echo ContohStatik::nilai();

// echo "<br><br><br><br><br><br><br><br><hr>";

// $obj = new ContohStatik;
// echo $obj->angka;




class Contoh {
    public static $angka = 1;

    public function halo () {
        return "Ini sudah " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo Contoh::$angka;

echo "<br>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
echo Contoh::$angka;
?>