<?php
function checkClassName($input){
    $pattern='/^(C|A|P)[^&|%$#@*?<>:;!~`]+[0-9](G|H|I|K|L|M)$/';
    if (!preg_match_all($pattern,$input)){
        echo 'invalid';
    }else{
        echo 'valid';
    }
}

$name='C0318G';
//M0318G,->invalid
checkClassName($name);