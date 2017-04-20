<?php
function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root786');
    } catch (PDOException $e) {
        die('could not connect');
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    // this one stores every row into memory which is not at all ideal.
    $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    return $tasks;
}
