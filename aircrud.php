<html>
<head>
<style>
    body {
        font-size: 24pt;
    }
</style>    

<?php

// Simple example to setup and retrieve all data from a table 

include('./Airtable.php');
include('./Request.php');
include('./Response.php');


use TANIOS\Airtable\Airtable;

$airtable = new Airtable(array(
    'api_key'   => 'keyE1hUaiUcOSiqc7',
    'base'      => 'appOEjuG867PcJetu',
));

$request = $airtable->getContent( 'Family' );


$response = $request->getResponse();
$array = json_decode(json_encode($response->records), true);
echo('<table border="0">');
echo('<tr><th>ID</th><th>Name</th><th>Notes</th></tr>');
for($i=0;$i < count($array);$i++) {
    $ID = $array[$i]['id'];
    $name = $array[$i]['fields']['Name'];
    $notes = $array[$i]['fields']['Notes'];
    echo('<tr><td>'.$ID.'</td><td>'.$name.'</td><td>'.$notes.'</td></tr>');
}
echo('</table>');

</head>
</html>

// print_r($request);

/*

$update_contact_details = array(
	'Telephone #' => '514-123-2942',
);
$update_contact = $airtable->updateContent("Contacts/{entry-id}",$update_contact_details);
print_r($update_contact);

// Create an array with a   ll the fields you want 
$new_contact_details = array(
    'Name'        =>"Contact Name",
    'Notes'     => "1234 Street Name, City, State, Zip, Country",
    'Balance' => '123-532-1239',
);

// Save to Airtable
$new_contact = $airtable->saveContent( "Family", $new_contact_details );

// The ID of the new entry
echo $new_contact->id;

print_r($new_contact);


$check = $airtable->quickCheck("Family","Name","Kellie");
if($check->count > 0){
    $array = json_decode(json_encode($check->records), true);
    echo($array[0]['id']);
    echo('<br />');
    echo($array[0]['fields']['Name']);
    echo('<br />');
    echo($array[0]['fields']['Notes']);
    // the value is already there
//    var_dump($check->records);
} else {
    // it's not there
}
*/
