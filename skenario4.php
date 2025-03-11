
<html>
<head>

<h2> Anggota kelompok:
 <br><h5> 1. Hafizhah Chelsea Cahyani (15)
<br> <h5>2. Syahnas Aulia (32)
 </h2>
</head>

<?php

// kasus 1
/* Barra ingin menuliskan tanggal Senin, 10 - Mar - 2025, dengan ketentuan:
Hari: 	Minggu, Senin, Selasa, Rabu, Kamis, Jumat, Sabtu.
Tanggal:	1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31.
Bulan: 	Jan, Feb, Mar, Apr, Mei, Jun, Jul, Ags, Sep, Okt, Nov, Des
Tahun: 	2024, 2025, 2026
*/

//hari
echo "<h2> kasus 1 </h2>";
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

echo "Hari: ";
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    if ($i < count($hari) - 1) {
        echo ", ";
    }
}
echo "\n";

// Tanggal 
$tanggal = range(1, 31);

echo "<br> Tanggal: ";
foreach ($tanggal as $index => $tgl) {
    echo $tgl;
    if ($index < count($tanggal) - 1) {
        echo ", ";
    }
}
echo "\n";

// Bulan 
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

echo " <br> Bulan: ";
$i = 0;
while ($i < count($bulan)) {
    echo $bulan[$i];
    if ($i < count($bulan) - 1) {
        echo ", ";
    }
    $i++;
}
echo "\n";

// Tahun 
$tahun = [2024, 2025, 2026];

echo " <br> Tahun: ";
$i = 0;
do {
    echo $tahun[$i];
    if ($i < count($tahun) - 1) {
        echo ", ";
    }
    $i++;
} while ($i < count($tahun)); 

// echo "<br> Hari: " . $hari[0]; // Menampilkan Senin

// echo "<br> Tanggal: " . $tanggal[9]; // Menampilkan tanggal 10 (indeks 9 karena array mulai dari 0)

// echo "<br> Bulan: " . $bulan[2]; // Menampilkan Maret (indeks 2 karena array mulai dari 0)

// echo "<br> Tahun: " . $tahun[1]; // Menampilkan 2025 (indeks 1 karena array mulai dari 0)

echo "<br><br><strong>Hasil Akhir:</strong> " . $hari[4] . ", " . $tanggal[8] . " " . $bulan[10] . " " . $tahun[0];

//kasus 2
//Zuyyina sedang senang berhitung dengan bernyanyi Anak Ayam Turun 30 hingga tinggal induknya.

echo "<h2> kasus 2 </h2>";

echo "lagu anak ayam turun:<br>";
for ($ayam = 30; $ayam >= 1; $ayam--){
    echo "anak ayam turun $ayam, mati satu tinggal " . ($ayam - 1) . "<br>";
}
echo "tinggal induknya.<br>";

//kasus 3 
echo "<h2> kasus 3 </h2>";

// Mawar yang dimiliki Sholeh
$mawarDimiliki = [];
for ($mawar = 21; $mawar >= 10; $mawar--) {
    $mawarDimiliki[] = $mawar;
}

// Mawar yang akan diberikan ke ibunya
$mawarUntukIbu = [];
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    $mawarUntukIbu[] = $mawar;
}

// Menampilkan hasil
echo "<h2>Hasil Perhitungan Mawar</h2>";

// Menampilkan mawar yang dimiliki Sholeh
echo "Mawar yang dimiliki Sholeh: " . implode(", ", $mawarDimiliki) . "<br>";
echo "Jumlah mawar yang dimiliki: " . count($mawarDimiliki) . "<br><br>";

// Menampilkan mawar yang diberikan ke ibunya
echo "Mawar yang diberikan ke ibu: " . implode(", ", $mawarUntukIbu) . "<br>";
echo "Jumlah mawar yang diberikan: " . count($mawarUntukIbu) . "<br><br>";

// Mawar yang tersisa setelah diberikan ke ibu
$mawarTersisa = array_diff($mawarDimiliki, $mawarUntukIbu);
echo "Mawar yang tersisa setelah diberikan ke ibu: " . implode(", ", $mawarTersisa) . "<br>";
echo "Jumlah mawar yang tersisa: " . count($mawarTersisa) . "<br>";

//kasus 4

/*Ambyar suka mendengarkan musik sesuai dengan suasana hatinya.
Jika sedang galau, Ambyar mendengarkan lagu Mesin Waktu - Budi Doremi.
Jika sedang bersemangat, Ambyar mendengarkan lagu Selamat Pagi - Ran
Jika sedang marah, Ambyar mendengarkan lagu Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira.
*/

echo "<h2> kasus 4 </h2>";

$playlist = [
    ["suasana" => "galau", "lagu" => "Mesin Waktu - Budi Doremi"],
    ["suasana" => "bersemangat", "lagu" => "Selamat Pagi - Ran"],
    ["suasana" => "marah", "lagu" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];

$suasanaAmbyar = "marah"; 

foreach ($playlist as $item) {
    $suasana[] = $item["suasana"];
    $lagu[] = $item["lagu"];
}

$key = array_search($suasanaAmbyar, $suasana);
echo "Ambyar sedang $suasana[$key], maka dia mendengarkan lagu: $lagu[$key]";

?>