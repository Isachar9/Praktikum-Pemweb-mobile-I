<h1>Hitung Jumlah Karakter</h1>
<form id="form1" name="form1" method="post" action="
<?php 
    echo $_SERVER['PHP_SELF']; ?>">
    <textarea name="karakterq"></textarea><br/><br/>
    <input type="submit" name="hitung" id="hitung" value="Submit" />
</form>
<?php
   if(isset($_POST['hitung'])){
      $hasil=strlen($_POST['karakterq']);
      echo $hasil . " karakter";
   }
?>

<h1>Hitung Jumlah kata<h1>
<form id="form2" name="form2" method="post" action="
<?php 
    echo $_SERVER['PHP_SELF']; 
?>">
   <textarea name="kata"></textarea><br/><br/>
   <input type="submit" name="hitungkata" id="hitungkata" value="Submit" />
</form>
<?php
   if(isset($_POST['hitungkata'])){
      $hasil=explode(" ", $_POST['kata']);
      echo "hasil" . count($hasil) . "kata";
   }
?>