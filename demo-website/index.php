<?php

require 'functions.php';

require 'DatabaseHelper.php';

//require 'router.php';

$config = require 'config.php';

$dbHelper = new DatabaseHelper($config['database'], 'root', 'toor');

$sql = "select * from posts where id = :id";

$id = $_GET['id'];

$data = $dbHelper->query($sql, [':id' => $id])->fetch();

dd($data);
?>