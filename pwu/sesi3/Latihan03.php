<?php
    $buah = array("Salak","Rambutan","Apel","Duku" );

   /* print_r($buah);
   */
  foreach($buah as $nval){
      echo "Buah ",$nval."<br>";
  }
  echo "<br>";
  echo "<ol>";
  foreach($buah as $nval){
      echo "<li>".$nval."</li>";
  }
  echo "</ol>";