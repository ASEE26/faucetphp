<?php 
ini_set('display_errors', true);
//Adding Lib for SuperiorCoin Functions
require "../vendor/autoload.php";
use Superior\Wallet;
$walletFaucet = new Superior\Wallet();
//$balanceFaucet = $walletFaucet->getBalance();
$transfer_ammount='1';
//pablo
$transfer_address= '5NKJdxdiCmccLyw53D8MzUhZYzDDvdBXshrVhUgYSYjyJFk3Wn5bMjsDSCxzSi1d95M83fENY7uEmUm5t2Uj8rGEFXFTQ3q';

echo "<h1>I'm trying to send ".$transfer_ammount." Sups </br> To adress ".$transfer_address."</h1>";

$options = [
    'destinations' => (object) [
        'amount' => $transfer_ammount,
        'address' => $transfer_address
    ]
];


$sup_transfer = $walletFaucet->transfer($options);
print_r($sup_transfer);
echo "</br></br></br>";

// {"code":-4,"message":"not enough money"};

//{"fee":81906500,"tx_blob":"","tx_hash":"bdd1684067bc9fb3a57f6b5b27bc65eb1ed1a8649f9598649998f849b96e96ed","tx_key":""}


$transfer_result = json_decode($sup_transfer);
if(isset($transfer_result->{'code'})){
	} if (isset($transfer_result->{'fee'})) {
	echo "</br> <h1>Success Transfer!</h1> </br>";
	$transfer_fee = $transfer_result->{'fee'};
	$transfer_hash = $transfer_result->{'tx_hash'};
	echo 
	"Transfer Fee: ".$transfer_fee. 
	"</br>Transfer Hash: ".$transfer_hash;
} else {
	$transfer_errorcode = $transfer_result->{'code'};
	$transfer_errormessage = $transfer_result->{'message'};
	echo "</br> <h1>Error Transfer!</h1> </br> ";
	echo 
	"Error Code: ".$transfer_errorcode. 
	"</br>Error Message: ".$transfer_errormessage;
}
?>


