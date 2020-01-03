
<?php
	echo "PHP is now working<br /><br />";
  $json = file_get_contents("https://zpie.now.sh/json");
  $arr = json_decode($json);
  $recs = $arr->records;
  for($i=0;$i<5;$i++){
    $rec = $recs[$i];
    echo $rec->name;
    echo("<br />");
  }
  echo "<br /><br />";
?>
<p><a href="./aircrud.php">Test AirTable</a></p>
