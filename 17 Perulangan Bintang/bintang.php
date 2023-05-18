<!DOCTYPE html>
<html>

<head>
  <title>Perulangan Bintang</title>
</head>

<body>
    <h4>Menu Perulangan Bintang</h4>
    <h5>Silakan pilih menu: </h5>
    <b>Menu : </b><br>
        <select name="pilih" id="pilih" naem="menu">
            <option value="menu1"> Segitiga Atas Kiri </option>
            <option value="menu2"> Segitiga Atas Kanan</option>
            <option value="menu3" selected> Segitiga Bawah Kiri</option>
            <option value="menu4"> Segitiga Bawah Kanan</option>
        </select> <br>

<?php
function ataskiri(){
$bintang=5;
for($i=$bintang; $i>0; $i--){
for($j=$bintang; $j>=$i; $j--){
    echo"*";
}
echo "<br>";
}
}

function ataskanan(){
    $bintang=5;
    for($i=$bintang; $i>0; $i--){
        for($j=1; $j<=$i; $j++){
            echo " &nbsp";
        }
        for($k=$bintang; $k>=$i; $k--){
            echo"*";
        }
        echo"<br>";
    }
}

function bawahkiri(){
    $bintang=5;
    for($i=1; $i<=$bintang; $i++){
        for($j=$bintang; $j>=$i; $j-=1){
            echo "*";
        }
        echo"<br>";
    }
}

function bawahkanan(){
    $bintang=5;
    for($i=1; $i<=$bintang; $i++){
        for($j=1; $j<=$i; $j++){
            echo " &nbsp";
        }
        for($k=$bintang; $k>=$i; $k-=1){
            echo"*";
        }
        echo"<br>";
    }
}

if('pilih' == "menu4"){
    echo "pilihan kamu <br>";
    bawahkanan();
}
?>

</body>
</html>