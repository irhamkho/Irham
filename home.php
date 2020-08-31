<?php
class japlak{
  
    var $pemesan;
    var $jenis;
    var $level;
  
   function tampil_matang() {
     return "Japlak Sudah Matang";
    }
   function tampil_mentah() {
     return "Japlak Belum Matang";
   }
}
  
$japlak1 = new japlak();
  
$japlak1->pemesan="Irham Khoeruamani";
$japlak1->jenis="Japlak";
$japlak1->level="Level 15";
  
echo $japlak1->pemesan;
echo "<br />";
echo $japlak1->jenis;
echo "<br />";
echo $japlak1->level;
echo "<br />";
  
echo $japlak1->tampil_matang();
echo "<br />";
echo $japlak1->tampil_mentah();
?>