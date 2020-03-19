<?php
$band = array("Citizen of Glass" => "4.50", "Night" => "9", "New Eyes" => "5", "Strange Trails" => "10");
$totaal = "0";
$aantal = count($band);

foreach($band as $naam=> $euro ){
    echo "$naam kost €$euro".PHP_EOL;
    $totaal= $totaal + $euro;
}

echo "de totaal prijs is €$totaal".PHP_EOL;
echo "Het gemiddelde is €".($totaal / $aantal);

?>