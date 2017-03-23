<?php

date_default_timezone_set('America/Chicago');

function logMessage($logLevel, $message) {
	$filename = date('Y-m-d') . ".log";
	$handle = fopen($filename, 'a');
	
	fwrite($handle, date('Y-m-d G:i:s') . ' [' . $logLevel . '] ' . $message . PHP_EOL);
}

function logInfo($type, $message) {
	logMessage($type, $message);
}

function logError($type, $message) {
	logMessage($type, $message);
}

function clearFile($logLevel, $message) {
	$filename = date('Y-m-d') . ".log";
	$handle = fopen($filename, 'w');
	
	fwrite($handle, date('Y-m-d G:i:s') . ' [' . $logLevel . '] ' . $message . PHP_EOL);
}

function errorMessages($filename) {
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);

	$contentsArray = explode(PHP_EOL,$contents);

	foreach($contentsArray as $key => $value) {
		if (strpos($value,'[ERROR]') !== false) {
			print_r($value . PHP_EOL);
		}
	}
}
// logInfo("INFO", "This is an info message.");
// logError("ERROR", "This is an info message.");
// logInfo("INFO", "This is an info message.");

errorMessages('2017-03-21.log');
