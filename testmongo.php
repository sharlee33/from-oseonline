<?php

// connexion mongo
//$connection = new MongoClient( "mongodb://$OPENSHIFT_MONGODB_DB_HOST:$OPENSHIFT_MONGODB_DB_PORT" );
$connection = new MongoClient(getenv("OPENSHIFT_MONGODB_DB_URL"));
$db = $connection->selectDB("tests");
$collection = $db->selectCollection("Valeurs");

$doc = array("name" => "Action 30 Europe", "date" => "15/10/2014", "valeur" => "13,73" );
$collection->insert($doc);


?>
