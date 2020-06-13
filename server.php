<?php
$_POST = json_decode(file_get_contents("php://input"), true); // это для того что бы php мог работать с JSON форматом
echo var_dump($_POST);