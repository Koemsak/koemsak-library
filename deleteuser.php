<?php
require_once('database/database.php');
$id = $_GET['id'];
$isDelete = deleteUserByID($id);

header("Location: http://localhost/online-library/?page=user");