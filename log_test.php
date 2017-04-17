<?php
require_once 'Log.php';
$instance = new Log();

$instance->filename = '2017-04-04.log';

$instance->logInfo("INFO", "This is an info message.");
$instance->logError("ERROR", "This is an info message.");
$instance->logInfo("INFO", "This is an info message.");
?>

