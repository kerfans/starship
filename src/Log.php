<?php
namespace Starshipeeees\Log;
use Starshipeeees\Log\Drivers\FileLog;

class Log
{
    public static function info($message){FileLog::getInstance()->info($message);}
    public static function error($message){FileLog::getInstance()->error($message);}
    public static function debug($message){FileLog::getInstance()->debug($message);}
    public static function critical($message){FileLog::getInstance()->critical($message);}
    public static function alert($message){FileLog::getInstance()->alert($message);}
    public static function warning($message){FileLog::getInstance()->warning($message);}
    public static function emergency($message){FileLog::getInstance()->emergency($message);}
    public static function notice($message){FileLog::getInstance()->notice($message);}
}