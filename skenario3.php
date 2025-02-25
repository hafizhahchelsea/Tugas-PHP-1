<?php

echo "<h2>Skenario 1: Penentuan Nilai</h2>";
$nilai = 89;
if ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai $nilai = A";
} elseif ($nilai >= 80) {
    echo "Nilai $nilai = B";
} elseif ($nilai >= 70) {
    echo "Nilai $nilai = C";
} elseif ($nilai >= 0) {
    echo "Nilai $nilai = D";
} else {
    echo "Nilai $nilai = nilai wajib di antara 0-100";
}


echo "<h2>Skenario 2: Penentuan Waktu</h2>";
$jam = strtotime("18:30");
if ($jam >= strtotime("00:00") && $jam < strtotime("04:00")) {
    echo "jam " . date("H:i", $jam) . " = dini hari";
} elseif ($jam < strtotime("10:00")) {
    echo "jam " . date("H:i", $jam) . " = pagi";
} elseif ($jam < strtotime("15:00")) {
    echo "jam " . date("H:i", $jam) . " = siang";
} elseif ($jam < strtotime("17:30")) {
    echo "jam " . date("H:i", $jam) . " = sore";
} elseif ($jam < strtotime("18:30")) {
    echo "jam " . date("H:i", $jam) . " = petang";
} elseif ($jam < strtotime("24:00")) {
    echo "jam " . date("H:i", $jam) . " = malam";
} else {
    echo "jam " . date("H:i", $jam) . " = dunia lain";
}


echo "<h2>Skenario 3: Jadwal Harian Andi</h2>";
$jadwal = [
    "15:30 - 16:00" => "Tiba di rumah dan mandi",
    "16:00 - 16:30" => "Mengaji",
    "16:30 - 17:00" => "Menghafal dialog festival",
    "17:00 - 17:15" => "Membantu ibu membeli bumbu",
    "17:15 - 17:45" => "Chatting dengan Raya (Arab)",
    "17:45 - 18:10" => "Sholat maghrib",
    "18:10 - 18:50" => "Makan malam",
    "18:50 - 19:10" => "Sholat isya",
    "19:10 - 21:10" => "Mengerjakan Tugas",
    "21:10 - 21:40" => "Mengobrol dengan keluarga",
    "21:40 - 21:55" => "Waktu luang",
    "21:55 - 22:00" => "Persiapan tidur",
    "22:00 - 04:00" => "Tidur",
    "04:00 - 04:30" => "Sholat subuh",
    "04:30 - 04:45" => "Membersihkan tempat tidur",
    "04:45 - 05:15" => "Mandi pagi",
    "05:15 - 05:45" => "Sarapan",
    "05:45 - 06:00" => "Menata jadwal",
    "06:00 - 06:15" => "Berangkat sekolah",
    "06:15 - 15:30" => "Sekolah"
];

echo "<table border='1'>";
echo "<tr><th>Waktu</th><th>Kegiatan</th></tr>";
foreach ($jadwal as $waktu => $kegiatan) {
    echo "<tr><td>$waktu</td><td>$kegiatan</td></tr>";
}
echo "</table>";

$jam = strtotime("19:10");
$ada_tugas = false;
if ($jam >= strtotime("19:10") && $jam < strtotime("21:10")) {
    echo "<br>Jam " . date("H:i", $jam) . " = ";
    echo $ada_tugas ? "Mengerjakan tugas" : "Waktu luang karena tidak ada tugas";
} elseif ($jam >= strtotime("21:10") && $jam < strtotime("21:40")) {
    echo "<br>Jam " . date("H:i", $jam) . " = Mengobrol dengan keluarga";
} elseif ($jam >= strtotime("21:40") && $jam < strtotime("21:55")) {
    echo "<br>Jam " . date("H:i", $jam) . " = Waktu luang";
} elseif ($jam >= strtotime("21:55") && $jam < strtotime("22:00")) {
    echo "<br>Jam " . date("H:i", $jam) . " = Persiapan tidur";
} elseif ($jam >= strtotime("22:00") && $jam < strtotime("04:00")) {
    echo "<br>Jam " . date("H:i", $jam) . " = Tidur";
} else {
    echo "<br>Jam " . date("H:i", $jam) . " = Tidak ada jadwal";
}

?>

<br><h2> Anggota kelompok:
 <br><h5> 1. Hafizhah Chelsea Cahyani (15)
<br> <h5>2. Syahnas Aulia (32)
 <br>
 <h3> Bahan Diskusi </h3>
 <p> 1. Apa yang perlu diperhatikan saat menentukan jadwal andi, sehingga tidak ada jadwal yang bertumbuk atau terlewatkan? </p>
 <p> jawab: memperhatikan keterangan yang telah diberikan dan menyesenyuakan semua jadwal agar tidak tertumpuk dan juga terlewatkan
 <p> 2. Jelaskan alasanmu dalam menetyukan urutan kegiatan tersebut!
 <p>jawab: karena menyesuaikan jadwal kegiatan yang sudah di wajibkan dan juga waktu yang sudah di tetapkan dan juga menyesuaikan jam cahttingan raya dan Andi
 <p> 3. Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya ?
 <p> jawab: karena selisih Wwaktu Andi dan Raya adalah 4 jam maka saat Andi chat pukul 17:15 sampai 17:45 otomatis di rumah Raya pukul 21:15 sampai 21:45
 <p> 4. Apakah masih ada waktu untuk Andi memiliki waktu luang? jam berapakah?
 <p> jawab: Andi masih memiliki waktu luang sekitar 15 menit di hitung dari pukul 21:40-21:55 
 <p> 5. jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki?
 <p> jawab: Andi memiliki waktu luang sekitar 2 jam 15, karena waktu Andi untuk mengerjakan tugas adalah 2 jam sedangkan waktu luang yang terjadwal adalah 15 menit maka jika tidak ada tugas waktu luang Andi otomatis akan bertambah