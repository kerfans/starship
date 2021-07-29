<?php
require_once "./vendor/autoload.php";

use Starship\Log;

$helper = new Log\helper();
echo $helper->hello_startship();

echo "--------------------------------";

Log\Log::info("info log");
