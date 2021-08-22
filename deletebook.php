<?php
require_once('database/database.php');
$id = $_GET['id'];
$isDelete = deleteBookByID($id);

header("Location: http://localhost/koemsak-library/?page=bookinfo");