<?php


try {

  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root786');

}
catch (PDOException $e) {

  die ('could not connect');

}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results[0]->description);

require 'index.view.php';
?>
