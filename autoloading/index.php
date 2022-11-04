<?php

require 'App/init.php';

$avanza = new Mobil('Avanza', 'Silver Blue', 'Daihatsu');
$avanza->cetakInfoKendaraan();

echo "<br>";

$mercedes = new Mobil('Mercedes Benz', 'Hitam', 'Mercedes');
$mercedes->cetakInfoKendaraan();

echo "<br>";

$owii = new Mobil('Pak Owii Poenya', 'Sky blue');
$owii->cetakInfoKendaraan();