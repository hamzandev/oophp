<?php

use App\Kendaraan\User;
use App\Service\User as ServiceUser;

require 'App/init.php';

new User();
echo "<br>";
new ServiceUser();

// $avanza = new Mobil('Avanza', 'Silver Blue', 'Daihatsu');
// $avanza->cetakInfoKendaraan();

// echo "<br>";

// $mercedes = new Mobil('Mercedes Benz', 'Hitam', 'Mercedes');
// $mercedes->cetakInfoKendaraan();

// echo "<br>";

// $owii = new Mobil('Pak Owii Poenya', 'Sky blue');
// $owii->cetakInfoKendaraan();