<?php   


$vat = 15;
echo "rate of vat is $vat%";
echo "<br>";

$priceExcludingVat = 100;

echo "Actual price is $priceExcludingVat";
echo "<br>";


$vatToPay = ($priceExcludingVat / 100) * $vat;


$totalPrice = $priceExcludingVat + $vatToPay;


echo "The price after adding tax is $totalPrice";
  
?> 