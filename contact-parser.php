<?php
$textfile = 'contacts.txt';

function parseContacts($filename) {
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contents = trim($contents);
    $contactsArray = explode("\n", $contents);
    // turns contents into an array of strings
    // remembering to close the file!
    fclose($handle);
    	
    	foreach($contactsArray as $string) {
    		// creates a substring containing only the phone number
    		$numbers = substr($string, -10, 10);
    		// using substr to access different parts of the phone number
    		$phone = substr($numbers, 0, -7) . '-' . substr($numbers, 3, -4) . '-' . substr($numbers, 6);
    		// creates substring containing names . "|"
    		$names = substr($string, 0, -10);
    		// variable that appends names, and phone number with hypens
    		$nameAndNumber = $names . $phone;	
    		// turns strings into arrays, separated by "|" character
    		$contacts = explode("|", $nameAndNumber);
    		var_dump ($contacts);
    	}
    // todo - read file and parse contacts
}
parseContacts($textfile);
