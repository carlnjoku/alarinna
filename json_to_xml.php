<?php

require_once 'XML_Serializer/XML/Serializer.php';

$data = json_decode(file_get_contents('http://localhost/neo4j-alarinna/web/get_userss'), true);

// An array of serializer options
$serializer_options = array (
  'addDecl' => TRUE,
  'encoding' => 'ISO-8859-1',
  'indent' => '  ',
  'rootName' => 'member',
  'mode' => 'simplexml'
); 

$Serializer = &new XML_Serializer($serializer_options);
$status = $Serializer->serialize($data);

if (PEAR::isError($status)) die($status->getMessage());


$xml = $Serializer->getSerializedData();


file_put_contents("/Users/carl/solr-6.3.0/server/solr/neo4j/members.xml", $xml);

?>