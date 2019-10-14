<?php

$time = date('G');

if($time < 12){
    echo '午前です。';
}elseif($time >= 12){
    echo '午後です。';
}