<?php

$heading = "Note";

$config = require 'config.php';

$dbHelper = new DatabaseHelper($config['database']);

$note = $dbHelper->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] == 1);

require "views/notes/show.view.php";