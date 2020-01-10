<?php
$connection = new MongoClient('mongodb://brucegne:p2shiver@ds043368.mongolab.com:43368/demo');
$db = $connection->demo;
$collection = $db->contacts;

$cursor = $collection->find()->sort(array('lname' => 1));
foreach ($cursor as $rec ) {
  echo $rec['_id'].'   '.$rec['fname'].'  '.$rec['lname'].'<br />';
}

$srch=$_GET['fname'];

$rec = $collection->findOne(array('fname' => $srch));

echo '<br><br>';

echo $rec['_id'].'   '.$rec['fname'].'  '.$rec['lname'].'<br />';
?>