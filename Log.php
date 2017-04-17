<?php
class Log
{
	public $filename = date('Y-m-d') . ".log";

	public function logMessage($logLevel, $message) {
		$handle = fopen($this->filename, 'a');
	
		fwrite($handle, date('Y-m-d G:i:s') . ' [' . $logLevel . '] ' . $message . PHP_EOL);
	}

	public function logInfo($type, $message) {
		logMessage($type, $message);
	}

	public function logError($type, $message) {
		logMessage($type, $message);
	}	

}
?>