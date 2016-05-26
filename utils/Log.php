<?php

class Log 
{
    private $fileName;
    private $handle;
    // the word default equates to the equal sign.
    public function __construct($prefix = 'log'){
        $date = date("Y-m-d"); 
        //assigns the file prefix-date.log to filename.
        // $this->fileName = "$prefix-$date.log"; - this grows into the next line
        $this->setFileName("$prefix-$date.log");
        // it file exists append to it. if not create one.
        $this->setHandle();

    }
    public function setFileName($fileName)
    {
        $this->fileName=(string)$fileName;
    }
    // you dont pass $Handle b/c your not using it in the function
    protected function setHandle()
    {
        $this->handle=fopen($this->fileName, 'a');
    }

    public function logMessage($logLevel, $message)
    {
        $date = date("Y-m-d H:i:s");
        fwrite($this->handle, "{$date} {$logLevel} {$message}\n");
    }
    public function logError($Message){
        $this->logMessage('ERROR', $Message);
    }
    public function logInfo($Message){
        $this->logMessage('INFO', $Message);
    }
    public function __destruct(){
        // fclose closes the script from your computer
        fclose($this->handle);
    }
} 
?>



