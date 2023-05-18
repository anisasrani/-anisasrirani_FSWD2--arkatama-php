<?php

class animal
{
    public $nama_hewan;
    public $jenis_hewan;

    function __construct($nama_hewan, $jenis_hewan)
    {
        $this->nama_hewan=$nama_hewan;
        $this->jenis_hewan=$jenis_hewan;
    }
    
    public function getinfo()
    {
        return "Ini adalah hewan $this->nama_hewan dan berjenis $this->jenis_hewan";
    }
}

class cat extends animal
{
    public $jenis_kucing;

    function __construct($jenis_kucing)
    {
        $this->jenis_kucing=$jenis_kucing;
    }

    public function getinfo()
    {
        return "Ini adalah kucing berjenis $this->jenis_kucing, dia hewan yang lucu dan menggemaskan";
    }
}

class dog extends animal
{
    public $jenis_anjing;

    function __construct($jenis_anjing)
    {
        $this->jenis_anjing=$jenis_anjing;
    }

    public function getinfo()
    {
        return "Ini adalah anjing berjenis $this->jenis_anjing, dia dapat berlari cepat";
    }
}

// Objek dari class animal
$harimau = new animal('Harimau', 'Karnivora');
echo $harimau->getinfo();
echo "<br>";

// Objek dari class cat
$anggora = new cat('Anggora');
echo $anggora->getinfo();
echo "<br>";

//Objek dari class dog
$buldog = new dog('Buldog');
echo $buldog->getinfo();
echo "<br>";

?>

