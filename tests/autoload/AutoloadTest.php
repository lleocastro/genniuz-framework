<?php

require_once (__DIR__ . '/../../public/index.php');

use \Tests\Autoload\Test;
use \Tests\Autoload\Dir1\One;
use \Tests\Autoload\Dir1\Dir2\Two;
use \Tests\Autoload\Dir1\Dir2\Dir3\Dir7\Seven;

echo "<br>";
echo "<br>";
echo "<br>";

//new One();
//new Two();
//new Three();
// new Four();
// new Five();
// new Six();

// echo "<br>";
// Seven::getEcho();
// echo "<br>";

echo "<br>";
new Test();
echo "<br>";

echo "<br>";
echo "<br>";

