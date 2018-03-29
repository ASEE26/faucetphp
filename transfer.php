<?php ini_set('display_errors', true);?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>';
 //ini_set('display_errors', true);

require "../vendor/autoload.php";
use Superior\Wallet;
$wallet = new Superior\Wallet();

$address = $wallet->getAddress();
echo ($address);

$balance = $wallet->getBalance();
$getfaucetbal = json_decode($balance);
$realBalance = number_format($getfaucetbal->{'balance'}/100000000);
$realBalance = number_format($realBalance, 10, '.', '');
echo "<p>Balance General: $realBalance</p>";

$balanceDisponible = number_format($getfaucetbal->{'unlocked_balance'}/100000000);
$balanceDisponible = number_format($balanceDisponible, 10, '.', '');
echo "BalanceDisponible: $balanceDisponible";

//echo '<p>Height</p>';

$height = $wallet->getHeight();
//echo ($height);

echo '<p>Transfers</p>';

    //$destination1 = array();
    //$destination1=array["amount" => $_POST['amount1'],"address" => $_POST['account'] ];
   $destination1 = (object) ['amount' => $_GET['amount1'],
                            'address' => $_GET['account']];

    $options = ['destinations' => $destination1];


    $objeto = $wallet->transfer($options);
    echo "$objeto";
   // echo ($address);

    echo $destination1->{'amount'};

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    Transfer Amount:<br>
    <input type="text" name="amount1"><br/>
    Account Destination:<br>
    <input type="text" name="account"><br/>
    <input type="submit" value="Send">
</form>


</body>
</html>