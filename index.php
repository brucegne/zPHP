
<?php
	echo "PHP is now working";
  $json = file_get_contents("https://zpie.now.sh/json");
  $arr = json_decode($json);
  var_dump($arr);
  foreach($arr as $key=>$value){
      echo $key . "=>" . $value . "<br>";
  }
  echo "<hr>";  
?>
<p><a href="./aircrud.php">Test AirTable</a></p>
