<?php 
ini_set('display_errors', true);
//Adding Lib for SuperiorCoin Functions
require "../vendor/autoload.php";
use Superior\Wallet;
$walletFaucet = new Superior\Wallet();
//$balanceFaucet = $walletFaucet->getBalance();

$pablo= '5NKJdxdiCmccLyw53D8MzUhZYzDDvdBXshrVhUgYSYjyJFk3Wn5bMjsDSCxzSi1d95M83fENY7uEmUm5t2Uj8rGEFXFTQ3q';

$options = [
    'destinations' => (object) [
        'amount' => '1',
        'address' => $pablo
    ]
];


$sup_transfer = $walletFaucet->transfer($options);
print_r($sup_transfer);
echo "</br></br></br>";

// {"code":-4,"message":"not enough money"};

$transfer_result = json_decode($sup_transfer);

if(isset($transfer_result->{'code'})){
	$transfer_errorcode = $transfer_result->{'code'};
	$transfer_errormessage = $transfer_result->{'message'};
	echo "</br> Error Transfer! </br> ";

	echo "Error Code: ".$transfer_errorcode. "</br>Error Message: ".$transfer_errormessage;
} else {
	echo "</br> Success Transfer!";
	print_r($sup_transfer);
}
?>


