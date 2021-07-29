<?php
namespace Starship\Log;
use Starship\Log\Drivers\FileLog;

class Log
{
    public static function info($message)
    {
        FileLog::info($message);
    }

    public static function error($message)
    {
        FileLog::error($message);
    }
    public static function debug($message)
    {
        FileLog::debug($message);
    }
}