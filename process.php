<?php

//----------------------------------------------------
// Google Form Sandwich
// Created by Jaz Witham (Jazzerup)
// 2011
// http://www.jazzerup.com
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND
// Script uses the Google API to save values of a form into
// a Google Spreadsheet
//----------------------------------------------------
 
 
// Gmail email address and password for google spreadsheet
$user = "joboaler@youcubed.org";
$pass = "g33IMaTREE!";

// Google Spreadsheet ID (You can get it from the URL when you view the spreadsheet)
$spreadsheetKey = "0AmQrzaof1-1sdG9BcGhFTE4wdVBDMXJZczVZVEtBeWc";
// od6 is the first worksheet in the spreadsheet
$worksheetID = "od6";
$thankyou = "thankyou.php";

//-----------------------------------------------------------
// No need to edit below unless you're a hacker =)
//-----------------------------------------------------------
 
// Include the loader and Google API classes for spreadsheets
require_once 'Zend/Loader.php';
Zend_Loader::loadClass('Zend_Http_Client');
Zend_Loader::loadClass('Zend_Gdata');
Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
Zend_Loader::loadClass('Zend_Gdata_Spreadsheets');
Zend_Loader::loadClass('Zend_Gdata_Docs');
 
// Authenticate ourselves with Google Docs and create a Zend_Gdata_Spreadsheets object.
$authService = Zend_Gdata_Spreadsheets::AUTH_SERVICE_NAME;
$httpClient = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $authService);
$spreadsheetService = new Zend_Gdata_Spreadsheets($httpClient);
 
foreach ($_POST as $var => $value) {
//Populate the form values into an array to save to the google spreadsheet
      $FormData[$var] = $value;
}
 
// Save your form data to your Google spreadsheet
$insertedListEntry = $spreadsheetService->insertRow($FormData, $spreadsheetKey, $worksheetID);
 
//Redirect to your thank you page
header( "Location: $thankyou" ) ;

?>