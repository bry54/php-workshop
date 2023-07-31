<?php

$heading = "Create Note";

$config = require 'config.php';
$databaseHelper = new DatabaseHelper($config['database']);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = [];

    if (!Validator::isAcceptableLength($_POST['title'], 5, 20)){
        $errors['title'] = 'Title should be of length between 5 and 20';
    }

    if (!Validator::isAcceptableLength($_POST['body'], 5, 250)){
        $errors['body'] = 'Body should be of length between 5 and 250';
    }

    if (empty($errors)) {
        $databaseHelper->query('INSERT INTO notes(title, body, user_id) VALUES (:title, :body, :user_id)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);
    }
}

require "views/notes/create.view.php";