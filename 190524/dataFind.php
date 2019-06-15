<?php
  $infoArray;   //값들을 저장할 배열

  //"data.txt"를 읽어 배열에 값 넣기
  $ofile = fopen("data.txt", "r");
  while(!feof($ofile)) {
    $aValue = fgets($ofile);
    $bValue = fgets($ofile);
    $infoArray[$aValue] = $bValue;
  }
  fclose($ofile);

  //post방식으로 보낸 값을 받아오기
  $fstr = $_POST['a1'];
  $cstr = $_POST['b1'];

  echo "<ul>";
  if(!empty($fstr) && !empty($cstr)) {    //두 값이 모두 들어왔을 때
    $co = 0;
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
  } else if (!empty($fstr) && empty($cstr)) {   //파일 이름만 들어왔을 때
    $co = 0;
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
  } else if(empty($fstr) && !empty($cstr)) {    //내용만 들어왔을 때
    $co = 0;
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
  } else {    //아무 값도 들어오지 않았을 때
    echo "Enter the keywords of list that you want to search.";
  }
  echo "</ul>";

?>
