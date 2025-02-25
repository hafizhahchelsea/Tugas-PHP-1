<?php 

// jika  nilai 100-90 maka mendapatkan keterangan A 
// jika nilai 89-80 maka mendapatkan keterangan B 
// jika nilai 79-70 maka mendapatkan keterangan C 
// jika nilai 69-0 maka mendapatkan keterangan D
// jika kurang dari 0 dan lebih dari 100 maka mendapatkan keterangan nilai wajib di antara 0-100

$nilai ="89";
if ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai $nilai = A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "Nilai $nilai = B";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "Nilai $nilai = C";
} elseif ($nilai >= 0 && $nilai <= 69) {
    echo "Nilai $nilai = D";
} else {
    echo "Nilai $nilai = nilai wajib di antara 0-100";
}