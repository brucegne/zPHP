
<?php
	echo "PHP is now working<br /><br />";
  $json = file_get_contents("https://zpie.now.sh/json");
  $arr = json_decode($json);
  var_dump($arr->records);
  $recs = $arr->records;
  for($i=0;$i<5;$i++){
    echo($recs[$i].name);
    echo("<br />");
  }
  echo "<br /><br />";
  foreach($arr as $key=>$value){
      echo $key . "=>" . $value . "<br>";
  }
  echo "<hr>";  
?>
<p><a href="./aircrud.php">Test AirTable</a></p>
