<?php

interface Logger{
    public function log($msg);
}

class FileLogger implements Logger{
    public function log($msg)
    {
        echo '<p>Logging to a <b>File</b> : '.$msg.'</p>';
    }
}

abstract class LoggerDecorator implements Logger{
    public $logger;
    public function __construct(Logger $logger){
        $this->logger = $logger;
    }
    abstract public function log($msg);
}

class EmailLogger extends LoggerDecorator{
    public function log($msg){
        $this->logger->log($msg);
        echo '<p>Logging to <b>Email</b>: '.$msg.'</p>';
    }
}

class FaxLogger extends LoggerDecorator{
    public function log($msg){
        $this->logger->log($msg);
        echo '<p>Logging to <b>Fax</b>: '.$msg.'</p>';
    }
}

$log = new FileLogger();
$log = new EmailLogger($log);
$log = new FaxLogger($log);
$log->log('Saving File...');