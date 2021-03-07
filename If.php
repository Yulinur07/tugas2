<html><head><title>Statement IF</title></head>
<body>
<form action="" method="post">
<?php
$nilai1 = "";
echo "Berapa Nilai PHPmu?
<input name=\"nilai1\" value=\"$nilai1\" size=\"3\" type=\"text\">
<input name=\"cek\" type=\"submit\" value=\"Cek\"> </form>";
if(isset($_POST["cek"])){
    $nilai1=$_POST["nilai1"]; //perintah untuk menguji penekanan tombol Cek
    echo "<br><h1>";
    if($nilai1=="") {
        echo "Anda Belum Memasukkan Nilai...!"; }
    elseif(!is_numeric($nilai1)) //jika nilai1 tidak bertype numerik
    {echo "Ini Bukan Nilai Angka...!"; }
    else
    {
        if($nilai1<=30) // statement pertama
        { echo "Anda mendapatkan nilai huruf <b> E </b>"; }
        elseif($nilai1<=50) // statement kedua
        { echo "Anda mendapatkan nilai huruf <b> D </b>"; }
        elseif($nilai1<=70) // statement ketiga
        { echo "Anda mendapatkan nilai huruf <b> C </b>"; }
        elseif($nilai1<=85) // statement keempat
        { echo "Anda mendapatkan nilai huruf <b> AB </b>"; }
        else // statement kelima
        { echo "Anda mendapatkan nilai huruf <b> A </b>"; }
    
    }
    echo"</h1>";
}
?>
</body>
</html>