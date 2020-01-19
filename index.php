<?php
print ("<h3>Tugas 2 PHP</h3>");
echo "<b>Soal:</b><br>";
$waktu1 = 36;
$pekerja1 = 12;
$pekerja2 = 24;
echo "Untuk mengerjakan 1 unit rumah dibutuhkan waktu $waktu1 hari dengan $pekerja1 tenaga kerja.<br>";
echo "Berapa waktu akan dihabiskan bila menggunakan $pekerja2 orang tenaga kerja?<br><br>";
echo "<b>Jawaban: </b><br>";
$waktu2 = ($waktu1*$pekerja1)/$pekerja2;
echo "Waktu akan dihabiskan bila menggunakan $pekerja2 orang tenaga kerja adalah <b>$waktu2</b> hari.<br>";


?>
