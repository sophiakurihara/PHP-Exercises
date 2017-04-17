<?php
// we are using the prebuilt contacts.txt file
$textfile = 'contacts.txt';
// menu items list created using Heredoc
$menu = <<<MENU
	1. View all contacts
	2. Add new contact
	3. Search contacts by Name
	4. Delete existing contact
	5. Exit
MENU;
// variable containing function to refresh cache of file


// initial function to display contents of contacts.txt from main menu
function addNewContact($filename) {
	fwrite(STDOUT, 'Please add a new contact in this format: ' . PHP_EOL);
	fwrite(STDOUT, 'NAME HERE | PHONE#' . PHP_EOL);
	$newContact = fgets(STDIN);

	$handle = fopen($filename, 'a');
	$addLine = fwrite($handle, $newContact);
	fclose($handle);

	displayContacts($filename);
}

function displayContacts($filename) {
	clearstatcache();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));

	echo ('Name | Number' . PHP_EOL);
	echo ('---------------' . PHP_EOL);
	echo($contents . PHP_EOL);
}

function searchContacts($filename) {
	fwrite(STDOUT, 'Please enter a name to search contacts: ' . PHP_EOL);
	$name = trim(fgets(STDIN));
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
	$contentsArray = explode(PHP_EOL,$contents);

	foreach($contentsArray as $key => $value) {
		// fix case sensitivity
		if(is_numeric(strpos($value, $name)) !== false) {
			$contactFound = true;
			echo $value;
		} 
	}
	if($contactFound == false) {
		echo('Contact not found' . PHP_EOL);
	} 
}


function deleteContact($filename) {
	fwrite(STDOUT, 'Please enter a contact to delete: ' . PHP_EOL);
	$name = fgets(STDIN);
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
	$contentsArray = explode(PHP_EOL,$contents);

	foreach($contentsArray as $contact) {
		if(is_numeric(strpos($contact['name'], trim($name))) !==false) {
			$contactFound = true;
			break;
		}
	}

	if($contactFound == true) {
		$handle = fopen($filename, 'w');

		foreach ($contentsArray as $contact) {
			if(is_numeric(strpos($contact['name'], trim($name))) == false) {
				$plainNumber = substr($contact['number'], 0, 3) . substr($contact['number'], 4, 3) . substr($contact['number'], 8);
				fwrite($handle, PHP_EOL . $contact['name'] . "|" . $plainNumber);
			}
		}
		fclose($handle);
		echo "\nContact DELETED!\n\n\n";
	} else {
		echo "No contact found.";
	}
	displayContacts($filename);
}


// when this function is called, returns user to main menu
function returnToMain() {
	fwrite(STDOUT, $menu . PHP_EOL);
	fwrite(STDOUT, 'MAIN MENU:' . PHP_EOL);
	fwrite(STDOUT, 'Please enter an option (1. View, 2. Add, 3. Search, 4. Delete, 5. Exit):' . PHP_EOL);

	$option = fgets(STDIN);
	// calls function fiveOptions() to reinitialize user input
	fiveOptions($option);

}

function fiveOptions($option) {
	$textfile = 'contacts.txt';
// try to turn this into a switch case?
	if ($option == 1) {
		displayContacts($textfile);
		returnToMain();
	} elseif ($option == 2) {
		addNewContact($textfile);
		returnToMain();
	} elseif ($option == 3) {
		searchContacts($textfile);
		returnToMain();
	} elseif ($option == 4) {
		deleteContact($textfile);
		returnToMain();
	} else {
		clear;
	}
}
// THE VERY BEGINNING OF OUR APPLICATION
fwrite(STDOUT, 'Welcome to your contact manager.' . PHP_EOL);
fwrite(STDOUT, $menu . PHP_EOL);
fwrite(STDOUT, 'Please enter an option (1, 2, 3, 4, 5):' . PHP_EOL);

$option = fgets(STDIN);
// initial call to fiveOptions() function
fiveOptions($option);
