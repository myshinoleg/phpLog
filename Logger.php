<?php

interface ILogger
{
    public function log($messege);
}

abstract class ALogger implements ILogger
{
    public static $instance;
    private function _construct(){ }
    private function _clone(){ }

    public static function getInstance()
    {
        if (self::$instance)
            return self::$instance;
        elseif (self::$instance = ALogger())
            return self::$instance;
    }

}

class FileLogger extends ALogger
{
    public function log($messege)
    {
        file_put_contents('fileLog.txt', print_r(date('Y-m-d H:i:s ') . $messege, true));
    }

}

class OutLogger extends ALogger
{
    public function log($messege)
    {
        echo date('Y-m-d H:i:s'), $messege;
    }

}

class DB_Logger extends ALogger
{
    private $host;
    private $dbase;
    private $username;
    private $password;

    public function _construct()
    {
        $this->host = "localhost";
        $this->dbase = "testphp";
        $this->username = "root";
        $this->password = "0000";
    }

    public function setConnection($host, $dbase, $username, $password)
    {
        $this->host = $host;
        $this->dbase = $dbase;
        $this->username = $username;
        $this->password = $password;
    }

    public function log($messege)
    {
        $this->_construct();
        $connection = new mysqli($this->host, $this->username, $this->password, $this->dbase);
        if ($connection->connect_error) die ('Error: ('. $connection-mysqli_connect_errno .')'. $connection->connect_error);
        else {
            echo "Connection complete \n";
        }
        $d = date('Y-m-d H:i:s');
        $Add_Date = mysqli_query($connection, "INSERT INTO resphp (dat, mes) VALUES ('$d', '$messege');");
        if ($Add_Date) {
            echo "Date added \n";
        }
     }

}

