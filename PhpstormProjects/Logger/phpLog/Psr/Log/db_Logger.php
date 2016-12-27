<?php
namespace files;

class db_Logger implements logger
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

