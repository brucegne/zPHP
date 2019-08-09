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

do {
    $response = $request->getResponse();
    $array = json_decode(json_encode($response->records), true);
    var_dump($array);
}
while( $request = $response->next() );

print_r($request);

/*


// Create an array with all the fields you want 
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
