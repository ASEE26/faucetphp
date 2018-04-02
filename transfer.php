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
echo $sup_transfer;
echo "</br></br></br>";

$transfer_result = json_decode($sup_transfer);
$transfer_fee = $transfer_result->{'fee'};
$transfer_hash = $transfer_result->{'tx_hash'};

echo "Fee: ".$transfer_fee. "</br>Hash: ".$transfer_hash;
?>


