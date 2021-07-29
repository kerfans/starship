<?php


namespace Starship\Log\Drivers;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class FileLog
{

    protected static $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        self::$logger = $logger;
    }

    public static function info($message)
    {
        echo LogLevel::INFO."----".$message;
        self::$logger->info($message);
    }

    public static function error($message)
    {
        self::$logger->error($message);
    }
    public static function debug($message)
    {
        self::$logger->debug($message);
    }
}