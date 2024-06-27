<?php
function ganjil(){
    for($i=0;$i<100;$i++){
        if($i%2==1){
            echo "$i, ";
        }
    }
}

function lingkaran($jari){
    return 3.14*$jari*$jari;
}
?>