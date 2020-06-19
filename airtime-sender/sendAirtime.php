
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
<?php

require "helpers/AirtimeSender.php";

//create object from sender class
$airtimeObj = new AirtimeSender();

//get values from POST request
$total = $_POST['total'];

$phoneArray = array();
$amountArray = array();
$networkArray = array();

//feed values to arrays
for($i = 0; $i <= $total; $i++){
	array_push($phoneArray, $_POST["phone".$i]);
	array_push($amountArray, $_POST["amount".$i]);
	array_push($networkArray, $_POST["network".$i]);
}


//$airtimeObj->sendAirtime($phone, $amount);

//loop through recipients sending airtime to each

for($i = 0; $i <= $total; $i++){
	$results = $airtimeObj->sendAirtime($phoneArray[$i], $amountArray[$i]);

	$response = $results["data"]->responses["0"];
	if($response->status == "Sent"){
		echo "<div class='card'><div class='card-body'>".$response->phoneNumber .": Airtime worth ".$response->amount ." successfully purchased.</div></div><br>";		
	}
	else{
		echo "<div class='card'><div class='card-body'>".$response->phoneNumber .": " .$response->errorMessage."</div></div>";
	}

}


?>
<br>
<div class="row">
	<a class="btn btn-info btn-block btn-lg" href="index.php">Send again</a>	
</div>
</div>
	</body>
</html>


