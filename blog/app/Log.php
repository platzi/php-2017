<?php

namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Log {
    private static $_logger = null;

    private static function getLogger() {
        if (!self::$_logger) {
            self::$_logger = new Logger('App Log');
        }

        return self::$_logger;
    }

    public static function logError($error) {
        self::getLogger()->pushHandler(new StreamHandler('../logs/application.log', Logger::ERROR));
        self::getLogger()->addError($error);
    }

    public static function logInfo($info) {
        self::getLogger()->pushHandler(new StreamHandler('../logs/application.log', Logger::INFO));
        self::getLogger()->addInfo($info);
    }

}