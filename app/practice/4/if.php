<?php

$language = 1;

if( $language === 1 ){
    echo 'こんにちは';
}elseif( $language === 2){
    echo 'Hello';
}elseif( $language === 3){
    echo 'Bonjour';
}else{
    echo '入力した数値が違います、';
}