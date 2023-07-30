<?php

$heading = "Create Note";

$config = require 'config.php';
$databaseHelper = new DatabaseHelper($config['database']);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $databaseHelper->query('INSERT INTO notes(title, body, user_id) VALUES (:title, :body, :user_id)', [
       'title' => $_POST['title'],
       'body' => $_POST['body'],
       'user_id' => 1,
    ]);
}

require "views/note-create.view.php";