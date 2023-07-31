<?php

$heading = "Create Note";

$config = require 'config.php';
$databaseHelper = new DatabaseHelper($config['database']);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = [];

    if (!Validator::isString($_POST['title'])){
        $errors['title'] = 'Title is a require field';
    }

    if (!Validator::isAcceptableLength($_POST['title'])){
        $errors['title'] = 'Body is a require field';
    }

    if (empty($errors)) {
        $databaseHelper->query('INSERT INTO notes(title, body, user_id) VALUES (:title, :body, :user_id)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);
    }
}

require "views/note-create.view.php";