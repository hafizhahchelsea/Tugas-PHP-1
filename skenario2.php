<?php

//jika jam 00:00-04:00 maka keterangan dini hari 
// jika jam 04:00- 10:00 maka keterangan pagi 
//jika jam 10:00- 15:00 maka keterangan siang 
//jika jam 15:00 - 17:30 maka keterangan sore 
//jika jam 17:30 - 18:30 maka keterangan petang 
// jika jam 18:30 - 24:00 maka keterangan malam 
// jika kurang dari 00:00 dan lebih dari 24:00 maka keterangan dunia lain 

$jam = "18:30";
$jam = date("H:i", strtotime($jam));

if ($jam >= ("00:00") && $jam <= ("04:00")) {
    echo "jam $jam = dini hari";
} elseif ($jam >= ("04:00") && $jam <= ("10:00")) {
    echo "jam $jam = pagi";
} elseif ($jam >= ("10:00") && $jam <= ("15:00")) {
    echo "jam $jam = siang";
} elseif ($jam >= ("15:00") && $jam <= ("17:30")) {
    echo "jam $jam = sore";
} elseif ($jam >= ("17:30") && $jam <= ("18:30")) {
    echo "jam $jam = petang";
} elseif ($jam >= ("18:30") && $jam <= ("24:00")) {
    echo "jam $jam = malam";
} else {
    echo "jam $jam = dunia lain";
}
