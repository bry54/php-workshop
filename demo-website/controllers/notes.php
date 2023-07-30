<?php

$heading = "Notes";

$config = require 'config.php';

$dbHelper = new DatabaseHelper($config['database']);

$notes = $dbHelper->query('select * from notes')->fetchAll();

require "views/notes.view.php";