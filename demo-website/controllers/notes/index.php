<?php

$heading = "Notes";

$config = require 'config.php';

$dbHelper = new DatabaseHelper($config['database']);

$notes = $dbHelper->query('select * from notes')->findAll();

require "views/notes/index.view.php";