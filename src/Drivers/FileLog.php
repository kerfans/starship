<?php


namespace Starshipeeees\Log\Drivers;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class FileLog implements LoggerInterface
{
    private static $instance;
    private function __construct(){}
    public static function getInstance(){
        if(!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone(){}

    public function info($message, array $context = array()){$this->log(LogLevel::INFO,$message,$context);}
    public function error($message, array $context = array()){$this->log(LogLevel::INFO,$message,$context);}
    public function debug($message, array $context = array()){$this->log(LogLevel::INFO,$message,$context);}
    public function critical($message, array $context = array()){$this->log(LogLevel::INFO,$message,$context);}
    public function alert($message, array $context = array()){$this->log(LogLevel::INFO,$message,$context);}
    public function warning($message, array $context = array()){$this->log(LogLevel::INFO,$message,$context);}
    public function emergency($message, array $context = array()){$this->log(LogLevel::INFO,$message,$context);}
    public function notice($message, array $context = array()){$this->log(LogLevel::INFO,$message,$context);}

    public function log($level, $message, array $context = array())
    {
        $day = date("Y-m-d");
        $time = date("Y-m-d H:i:s");
        $dir = dirname(__FILE__,3).DIRECTORY_SEPARATOR."log";
        $file  = $dir.DIRECTORY_SEPARATOR .$day.'.log';
        if(!is_dir($dir)){
            mkdir($dir, 0777, true);
        }
        $content = "level:".$level.'---time:'.$time."---message:".$message."\n";
        file_put_contents($file, $content,FILE_APPEND);
    }

}