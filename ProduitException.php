<?php
class ProduitException extends Exception
{
    private static $logFile = "exceptions.log";
    private function log($logFile,$message) {
        $message.=" fichier ".$this->getFile().", ";
        $message.=" ligne ".$this->getLine();
        file_put_contents($logFile,
        "exception ".date('d:M:Y H:i:s')." ".$message."\n",
        FILE_APPEND);

    }
    public function __construct($message, $code) {
        parent::__construct($message,$code);
        $this->log(self::$logFile,$message);
    }
}
