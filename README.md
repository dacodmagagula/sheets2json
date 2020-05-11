## Sheets2Json

<p>This code parses Google Sheets Json to a Json version that's easy to consume</p>
<p>It can be used flexibly to parse any GoogleSheet if you pass a googlesheet ID as a parameter value (eg. index.php?sheetId=xxxx) or simply to parse one Google Sheet with the sheetId specified in the code in index.php .</p>
<p>You can also just copy the code in index.php and translate into any language of your choice.</p>

### Example

#### From
<br>
<br>
<img src="https://dacod.co.za/images/sheets2json.png" alt="sheets2json.png"/>
<br>
<br>
TO
<br>
<br>

#### TO

`
[
	{
		name: "Dacod",
		age: "24",
		country_of_birth: "South Africa"
	},
	{
		name: "Nkosinathi",
		age: "22",
		country_of_birth: "Zimbabwe"
	},
	{
		name: "Musa",
		age: "34",
		country_of_birth: "South Africa"
	},
	{
		name: "Angel",
		age: "33",
		country_of_birth: "Algeria"
	},
	{
		name: "Mfana",
		age: "25",
		country_of_birth: "eSwatini"
	}
]`

<br>
<br>


### How to Use

1. Clone repository and run `composer install` (or translate code in index.php into different language)

2. Publish your sheet to the web

<img src="https://dacod.co.za/images/publishSheetToWeb.png" alt="publishSheetToWeb.png">

3. Copy Sheet ID

<img src="https://dacod.co.za/images/copySheetId.png" alt="copySheetId.png">

4. Paste Sheet ID in `index.php` or pass it as a parameter via the URL `index.php?sheetId=xxxx`

### Lisese

You can use this code however you like (see LISENSE).

