
<?php
	echo "PHP is now working<br /><br />";
  $json = file_get_contents("https://zpie.now.sh/json");
  $arr = json_decode($json);
  $recs = $arr->records;
  for($i=0;$i<count($recs);$i++){
    $rec = $recs[$i];
    echo $rec->name;
    echo("<br />");
  }
  echo "<br /><br />";

$url = 'https://zpie.now.sh/adddata';
$data = array('created' => '12345678', 'name' => 'Good Old Budders', 'age' => '13', 'married' => 'Just mommy Kellie');
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
var_dump($result);

/*
$url = 'http://www.someurl.com';
$myvars = 'myvar1=' . $myvar1 . '&myvar2=' . $myvar2;

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
*/
?>
<p><a href="./aircrud.php">Test AirTable</a></p>

