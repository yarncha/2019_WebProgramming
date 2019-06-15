<?php
  $infoArray;

  $myfile = fopen("data.txt", "r");

  while(!feof($ofile)) {
    $aValue = fgets($ofile);
    $bValue = fgets($ofile);
    $infoArray[$aValue] = $bValue;
  }

  fclose($ofile);

  echo "<ul>";
  foreach($infoArray as $x => $x_value) {
    if ($x !== 0){
          echo "<li>$x : ";
          $re_value = rtrim($x_value, "\n");
          echo "$re_value</li>";
    }

  }
   echo "</ul>";

?>
