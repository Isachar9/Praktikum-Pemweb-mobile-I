<?php
?>
<form action="<?php $_SERVER['PHP_SELF'];?>"method="post">
<b>Input Kalimat</b>
<input type="text" name="kalimat" size="30"><br>
<input type="submit" value="kirim>"
</form>

<?php
$teks_awal = trim($_POST['kalimat']);
$teks_modif = strtolower($teks_awal);
$teks=str_replace("","",$teks_modif);
$jumlah = strlen($teks);

$a = substr_count($teks, "a");
$i = substr_count($teks, "i");
$u = substr_count($teks, "u");
$e = substr_count($teks, "e");
$o = substr_count($teks, "o");

$vocal = $a+$i+$u+$e+$o;
$konsonan = $jumlah - $vocal;

echo "kalimat <b>\"".$teks_awal."\"<b> memiliki : <br>";
echo "jumlah huruf vocal = $vocal<br>\n";
echo "jumlah huruf konsonan = $konsonan<br><br><br>";
?>
