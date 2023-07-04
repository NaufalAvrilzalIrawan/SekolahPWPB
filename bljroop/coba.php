<?php
class coba {

}

$a = new coba();
$b = new coba();
$c = new coba();

var_dump($a);
var_dump($b);
var_dump($c);


class Mobil {
    public $nama,
           $merk,
           $warna,
           $MaxSpeed,
           $Seat;

    public function maju(){
        return "Maju Maju Maju!";
    }
}

class MobilSport extends Mobil {
    public $turbo = false;

    public function turboon() {
        $turbo = true;
        return "tarik teuing mas!";
    }
}

echo "<br>";

$angkot =  new Mobil();
echo $angkot->maju();
echo "<br><br>";

$lambo = new MobilSport();
echo $lambo->maju();
echo "<br>";
echo $lambo->turboon();

?>