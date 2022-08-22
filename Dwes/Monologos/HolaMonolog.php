<?php

namespace Dwes\Monolog;
include "vendor/autoload.php";
use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\IntrospectionProcessor;


class HolaMonolog
{

    private $miLog;
    private $hora;

    public function __construct(int $hora)
    {
        $this->miLog=new Logger("miLogger");
        $this->miLog->pushHandler(new RotatingFileHandler("logs/milog.log", 5,Logger::WARNING));
        $this->miLog->pushHandler(new StreamHandler("php://stderr", Logger::DEBUG));
        $this->miLog->pushProcessor(new IntrospectionProcessor());

        if($hora>24 || $hora<0){
            $this->miLog->warning("Parámetro hora incorrecto");
        }

    }

    public function saludar():void{
        if ($this->hora<12) $this->miLog->info("Buenos días");
        else if ($this->hora>=12 && $this->hora<21) $this->miLog->info("Buenas tardes");
        else $this->miLog->info("Buenas noches");
    }

    public function despedir():void{
        if ($this->hora<12) $this->miLog->info("Hasta esta tarde");
        else if ($this->hora>=12) $this->miLog->info("Hasta mañana");
    }
}