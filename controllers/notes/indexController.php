<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$notes = $db->query('select * from notes')->get();

view('notes/index.view.php', [
    'title' => 'All notes',
    'notes' => $notes,
]);