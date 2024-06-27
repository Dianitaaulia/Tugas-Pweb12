<?php
$nilaimhs=array("Amalia" => 85,"Jordan"=> 90,"Alexa" => 60,"Asti" => 71,"Melati" => 91,"Rafa" => 30);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['nama'])){
        $nama=$_POST['nama'];
        if(array_key_exists($nama,$nilaimhs)){
            echo "Nama $nama ada di kelas ini, dengan nilai {$nilaimhs[$nama]}<br>";
        }
        else{
            echo "Nama $nama tidak ditemukam di kelas ini.<br>";
        }
    }
}
 echo "<br><br>";
echo "<b>Daftar Nilai Mahasiswa/i<b>";
echo "<pre>";
print_r($nilaimhs);
echo "</pre>";

rsort($nilaimhs);
reset($nilaimhs);
echo "<b>Nilai Mahasiswa/i Setelah Diurutkan Dari Yang Terbesar</b>";
echo "<pre>";
print_r($nilaimhs);
echo "</pre>";

?>