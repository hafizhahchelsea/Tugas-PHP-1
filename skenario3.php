<?php

echo "<h2>Skenario 1</h2>";

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


echo "<h2>Skenario 2</h2>";

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


echo "<h2>Skenario 3</h2>";
//jika andi pulang sekolah pukul 15:30 maka andi tiba dirumah pukul 15:45
// jika andi mengaji 30 menit maka andi harus mandi terlebih dahulu sebelum mengaji 
// jika andi mengerjakan tugas selama 2 jam tanpa terputus 
// jika menghafalkan dialog untuk festival kesenian budaya yang akan diikuti disekolah selama setengah jam 
// ibu meminta andi untuk membeli bumbu masakan sebelum makan malam 
//makan malam dilakukan setelah sholat maghrib tetapi harus selesai sebelum sholat isya 
/*antara pukul 17:00 hingga sebelum tidur, andi perlu menyisihkan waktu 30 menit tanpa terputus untuk
 chatting mengenai persiapan festival kesenian budaya yang akan diikuti disekolah dengan raya yang berada diarab.
 perbedaan waktu dengan arab adalah 4 jam lebih cepat dari waktu ditempat andi*/
 /*sebelum tidur, andi dan keluarganya memiliki kebiasaan mengobrol bersama keluarga selama 30 menit.
 mengobrol bersama keluarga dilakukan setelah tugas sekolah andi selesai dikerjakan. 
 dapat dimajukan jika tidak ada tugas sekolah*/ 
 //andi tidur jam 22:00 dan bangun jam 04:00 

 $jadwal = [
     "15:30 - 16:00" => "Tiba di rumah dan mandi",
     "16:00 - 16:30" => "Mengaji",
     "16:30 - 17:00" => "Menghafal dialog festival",
     "17:00 - 17:15" => "Membantu ibu membeli bumbu",
     "17:15 - 17:45" => "Chattingan dengan Raya(Arab)",
     "17:45 - 18:10" => "Mengerjakan sholat maghrib",
     "18:10 - 18:50" => "Makan malam",
     "18:50 - 19:10" => "Sholat isya",
     "19:10 - 21:10" => "Mengerjakan Tugas",
     "21:10 - 21:40" => "Mengobrol bersama keluarga",
     "21:40 - 21:55" => " waktu luang andi",
     "21:55 - 22:00" => "persiapan tidur",
     "22:00 - 04:00" => "tidur",
     "04:00 - 04:30" => "sholat subuh", 
     "04:30 - 04:45" => "membersihkan tempat tidur",
     "04:45 - 05:15" => "mandi pagi", 
     "05:15 - 05:45" => "sarapan",
     "05:45 - 06:00" => "menata jadwal",
     "06:00 - 06:15" => "berangkat sekolah",
     "06:15 - 15:30" => "Sekolah",
 ];
  
 echo "<h2>Jadwal Harian Andi</h2>";
 echo "<table border='1'>";
 echo "<tr><th>Waktu</th><th>Kegiatan</th></tr>";
 foreach ($jadwal as $waktu => $kegiatan) {
     echo "<tr><td>$waktu</td><td>$kegiatan</td></tr>";
 }

$jam = "03:30";
$jam = date("H:i", strtotime($jam));
echo"<br>";

if ($jam >= ("15:30") && $jam <= ("16:00")) {
    echo "jam $jam = Tiba di rumah dan mandi";
} elseif ($jam >= ("16:00 ") && $jam <= ("16:30")) {
    echo "jam $jam = Mengaji";
} elseif ($jam >= ("16:30") && $jam <= ("17:00")) {
    echo "jam $jam = Menghafal dialog festival";
} elseif ($jam >= ("17:00") && $jam <= ("17:15")) {
    echo "jam $jam = membantu ibu membeli bumbu";
} elseif ($jam >= ("17:15") && $jam <= ("18:45")) {
    echo "jam $jam = chatting dengan Raya (arab)";
} elseif ($jam >= ("17:45") && $jam <= ("18:10")) {
    echo "jam $jam = sholat magrib";
} elseif ($jam >= ("18:10") && $jam <= ("18:50")) {
    echo "jam $jam = Makan malam";
} elseif ($jam >= ("18:50") && $jam <= ("19.10")) {
    echo "jam $jam = sholat isya";
} elseif ($jam >= ("19:10") && $jam <= ("21:10")) {
    echo "jam $jam = mengerjakan tugas";
} elseif ($jam >= ("21:10") && $jam <= ("21:40")) {
    echo "jam $jam = mengobrol bersama keluarga";
} elseif ($jam >= ("21:40") && $jam <= ("21:55")) {
    echo "jam $jam = waktu luang";
} elseif ($jam >= ("21:55") && $jam <= ("22:00")) {
    echo "jam $jam = persiapan tidur";
} elseif ($jam >= ("22:00") && $jam <= ("04:00")) {
    echo "jam $jam = tidur ";
} elseif ($jam >= ("04:00") && $jam <= ("04:30")) {
    echo "jam $jam = sholat subuh";
} elseif ($jam >= ("04:30") && $jam <= ("04:45")) {
    echo "jam $jam = membersihlkan tempat tidur";
} elseif ($jam >= ("04:45") && $jam <= ("05:15")) {
    echo "jam $jam = mandi";
} elseif ($jam >= ("05:15") && $jam <= ("05:45")) {
    echo "jam $jam = sarapan";
} elseif ($jam >= ("05:45") && $jam <= ("06:00")) {
    echo "jam $jam = menata jadwal";
} elseif ($jam >= ("06:00") && $jam <= ("06:15")) {
    echo "jam $jam = berangakat sekolah";
} elseif ($jam >= ("06:15") && $jam <= ("15:30")) {
    echo "jam $jam = bersekolah";
} else {
    echo "jam $jam = Andi kesel lek";
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
 <p> jawab: Andi memiliki waktu luang sekitar 2 jam 15, karena waktu Andi untuk mengerjakan tugas adalah 2 jam sedangkan waktu luang yang terjadwal adalah 15 menit maka jika tidak ada tugas waktu luang Andi otomatis akan bertambah