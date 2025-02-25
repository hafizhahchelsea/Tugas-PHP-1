<html>
<head>
    <title>
        echi belajar ikhlas
    </title>
    <style>
        .y{
            color:blue;
        }
    </style>
</head>

<body>
    echi cantik banget
    <?php
    $namaechi = "Hafizhah Chelsea Cahyani";
    echo '<br>echi';
    echo "<br>echi suka tidur";
    echo "<div class='y'> ".$namaechi."</div>"; // mengetik didalam petik
    //ini rahasia (ini komentar satu baris)
    #ini juga judge (ini juga satu baris atau satu satunya)
    /**we listen we dont judge 
     * laillahaillalah
     * subahannalah
     * lahaulawalakuataillabillahilalihiladzim(ini bisa berbaris baris)
    */
    echo "$namaechi"; // mengetik didalam petik 
    $angka1 = 5;
    $angka2 = 10;
    $penjumlahan = $angka1 + $angka2; // dan hanya muncul sebelahan tidak dibawahnya
    $x =$angka1 * $angka2;

    echo $penjumlahan; // hanya muncul angka 15 saja karena nulisnya tidak komplit 
    echo "<br>$angka1 + $angka2 = ".$penjumlahan; // memunculkan lebih detail dan diluar petik
    echo "<br>";
    echo $x ." = $angka1 x $angka2 "; // memunculkan jumlah perkalian di dalam petik
    echo "<br> $angka1<sup> $angka2 </sup> ="; // jika di html untuk memunculkan pangkat 
    echo number_format (pow($angka1,$angka2),0,'','.'); // memunculkan hasil perpangkatan di php 
    /*number_format
    (angkanya, jumlah angka dibelakang koma, 
    'tanda koma/titik paling belakang', 
    tanda koma/titik di antara angka)*/
    ?>
</body>

</html>