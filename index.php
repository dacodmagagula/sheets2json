<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Origin: *");

require_once('./vendor/autoload.php');
use GuzzleHttp\Client;

$guzzle = new Client();

$defaultSheetId="1VdyJPZbBHzEiVTRwdsGYnORl4upwUmgxOkrJ6fRppjs"; //add your Google Sheets ID here.

$currentSheetId = !empty($_GET['sheetId'])? $_GET['sheetId'] : $defaultSheetId; //you can also use this as a general purpose parser for all your google sheets by adding a google sheetId to your parameter

$response = $guzzle->get('https://spreadsheets.google.com/feeds/cells/'.$currentSheetId.'/1/public/full?alt=json');

$resultsArray = json_decode($response->getBody(), true);

//header
$header = [];

//collection
$objects = [];

foreach ($resultsArray['feed']['entry'] as $key => $value) {

	if($value['gs$cell']['row']=="1"){

		$header["col".$value['gs$cell']['col']]= str_replace(" ","_", strtolower(str_replace(':', "", $value['gs$cell']['$t'])));

	}else{

		$objects[$value['gs$cell']['row']][$header["col".$value['gs$cell']['col']]] = $value['gs$cell']['$t'];

	}
}

echo json_encode(array_values($objects), true);