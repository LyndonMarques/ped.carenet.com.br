<?php

require_once("medoo.php");

$db = new medoo(array(
    'database_type' => 'mysql',
    'database_name' => 'medoo',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
));

$trainers = $db->insert(
    'cidades',
    [
        'cidade' => 'Recife',
        'cep' => '741258963'
    ]
);

$trainers = $db->select(
    'cidades',
    [
        'id', 'cidade', 'cep'
    ]
);

foreach($trainers as $row) {
    echo $row['cidade']."<br>";
}