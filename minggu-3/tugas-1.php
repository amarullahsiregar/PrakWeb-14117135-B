<?php
function faktorial($value){

    if($value<=1){
        return 1;
    }else{
        return $value * faktorial($value - 1);
    }
}

    echo "nilai faktorial dari 4 = ".faktorial(4);

?>