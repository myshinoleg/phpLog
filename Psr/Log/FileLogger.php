<?php
namespace Log;

class FileLogger implements logger
{
    public function log($messege)
    {
        file_put_contents('fileLog.txt', print_r(date('Y-m-d H:i:s') . $messege, true));
    }

}

