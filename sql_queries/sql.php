<?php
// connect to a DB

$db = new PDO('mysql:host=localhost;dbname=php_examples;', 'root', 'root');  //setting SQL database

$results = $db->query("SELECT * FROM hamsters");

print '<h2>All Hamsters</h2>';
foreach ($results as $hamster) {
    print $hamster['name'] . ', Weight: ' . $hamster['weight'] . ', Gender: ' . $hamster['gender'];
}

$results = $db->query("SELECT * FROM habitats");
$habitats = $results->fetchAll();

print '<h2>All Habitats</h2>';
foreach ($habitats as $h) {
    print $h['name'] . "<br />";
}

//Add a new habitat

if (!empy($_GET['new_habitat'])) {
    $sth = $db->prepare("INSERT INTO habitats (name) VALUES (:name)");
    $sth->execute([':name' => $_GET['new_habitat']]);

    $results = $db->query("SELECT * FROM habitats");
    $habitats = $results->fetchAll();

    foreach ($habitats as $h) {
        print $h['name'] . "<br />";
    }
    
    $sth = $db->prepare("DELETE FROM habitats WHERE name = :name");
    $sth->execute([':name' => $_GET['new_habitat']]);
}