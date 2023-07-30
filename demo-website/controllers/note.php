<?php

$heading = "Note";

$config = require 'config.php';

$dbHelper = new DatabaseHelper($config['database']);

$note = $dbHelper->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();

require "views/note.view.php";