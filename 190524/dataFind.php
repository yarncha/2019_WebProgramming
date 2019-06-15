<?php

$infoArray;

//"data.txt"를 읽어 배열에 값 넣기

$ofile = fopen("data.txt", "r");

while(!feof($ofile)) {
  $aValue = fgets($ofile);
  $bValue = fgets($ofile);
  $infoArray[$aValue] = $bValue;
}
//var_dump($infoArray);

fclose($ofile);

// 웹 페이지에서 값 읽어 오기

 $fstr = $_POST['a1'];
 $cstr = $_POST['b1'];
 //trim($fstr);
 //trim($cstr);
 //$fullstr = "./data/".$fstr;

//file 이름과 내용의 값을 가진경우
 if(!empty($fstr) && !empty($cstr)) {
     $co = 0;
     echo "<ul>";
/*
   for($x=0; $x < count($infoArray); $x++) {

   }
 */

  foreach($infoArray as $x => $x_value) {

    if(strpos($x,$fstr) !==false && strpos($x_value, $cstr) !== false) {
      $co = $co +1;
      echo "<li>$x : ";
      $re_value = rtrim($x_value, "\n");
      echo "$re_value</li>";
    }
  }

  if ($co == 0) {
    echo "No file";
  }

}

// 화일 이름만 있을 경우
else if (!empty($fstr) && empty($cstr)) {

 $co = 0;
 echo "<ul>";

 foreach($infoArray as $x => $x_value) {

   if(strpos($x,$fstr) !==false) {
     $co = $co +1;
     echo "<li>$x : ";
     $re_value = rtrim($x_value, "\n");
     echo "$re_value</li>";
   }
 }

 if ($co == 0) {
   echo "No file";
 }

}

else if(empty($fstr) && !empty($cstr)) {

 $co = 0;
 echo "<ul>";

 foreach($infoArray as $x => $x_value) {

   if(strpos($x_value,$cstr) !==false) {
     $co = $co +1;
     echo "<li>$x : ";
     $re_value = rtrim($x_value, "\n");
     echo "$re_value</li>";
   }
 }

 if ($co == 0) {
   echo "No file";
 }

}
else {
 echo "Enter the keywords of list that you want to search.";
}
 echo "</ul>";

?>
