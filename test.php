<?php
require_once "./vendor/autoload.php";

use Starshipeeees\Log;

$helper = new Log\helper();
echo $helper->hello_startship();

echo "--------------------------------"."\n";

Log\Log::info("info mesage");
Log\Log::error("error mesage");
