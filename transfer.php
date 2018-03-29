<?php 
//Adding Lib for SuperiorCoin Functions
require "../vendor/autoload.php";
use Superior\Wallet;
$walletFaucet = new Superior\Wallet();
//$balanceFaucet = $walletFaucet->getBalance();

$pablo= '5NKJdxdiCmccLyw53D8MzUhZYzDDvdBXshrVhUgYSYjyJFk3Wn5bMjsDSCxzSi1d95M83fENY7uEmUm5t2Uj8rGEFXFTQ3q';

$tx_hash = $walletFaucet->transfer($options);
$options = [
    'destinations' => (object) [
        'amount' => '4',
        'address' => $pablo
    ]
];

?>