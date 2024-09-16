<?php
$basket = array(
                array('banana', 6, 1, 'fruit'), 
                array('apple', 3, 1.5, 'fruit'), 
                array('wine', 2, 10, 'wine'));
$fruitTVA = 6;
$wineTVA = 21;

$totalCost = 0;
$totalTva = 0;

for ($i = 0; $i < count($basket); $i++){
    $totalProduct = $basket[$i][1]*$basket[$i][2];
    $totalCost  = $totalCost + $totalProduct;
    if ($basket[$i][3] == 'fruit'){
        $totalTva = $totalTva + TVAvalue($totalProduct, $fruitTVA);
    }
    else if ($basket[$i][3] == 'wine'){
        $totalTva = $totalTva + TVAvalue($totalProduct, $wineTVA);
    }
}

$totalCost = formatFloat($totalCost, 2);
$totalTva = formatFloat($totalTva, 2);
echo "total : {$totalCost} \xE2\x82\xAc, TVA : {$totalTva} \xE2\x82\xAc";

function formatFloat(float $myFloat, int $decimal) : string
{
    return number_format((float)$myFloat, $decimal, '.', '');
}

function TVAvalue(float $CostTVAC, float $tvaRate) : float
{
    return $CostTVAC*(1-(100/(100+$tvaRate)));
}