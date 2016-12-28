<?php
namespace Logs;

class FileLogger implements Logger
{
    public function log($messege)
    {
        file_put_contents('fileLog.txt', print_r(date('Y-m-d H:i:s') . $messege, true));
    }

}

