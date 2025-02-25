<?php

/* belajar if/ else (jika/ maka) */
         
// jika senin , selasa, rabu mengenakan seragam osis
// jika kamis, mengenakan seragam batik
// jika jumat, mengenakan seragam olahraga
// jika sabtu, mengenakan baju bebas

$hari ="selasa";
if($hari == "senin" || 
$hari =="selasa" ||
$hari =="rabu" 
){
    echo "$hari mengenakan seragam osis ";
} else if($hari == "kamis"){
    echo "$hari mengenakan seragam batik";
} else if($hari == "jumat"){
    echo "$hari mengenakan seragam olahraga";
} else if($hari == "sabtu"){
    echo "$hari mengenakan baju bebas";
}  else {
    echo "$hari liburr bos capeqq";
}