<?php
class laptop {
  
   var $pemilik;
  
   function hidupkan_laptop() {
     return "Hidupkan Laptop";
   }
}
  
$laptop_jesi = new laptop();
$laptop_bunga = new laptop();
$laptop_intan = new laptop();
 
$laptop_jesi->pemilik="Jesi";
$laptop_bunga->pemilik="Bunga";
$laptop_intan->pemilik="Intan";
  
echo $laptop_jesi->pemilik; // Jesi
echo "<br />";
echo $laptop_bunga->pemilik; // Bunga
echo "<br />";
echo $laptop_intan->pemilik; // Intan
echo "<br />";
?>