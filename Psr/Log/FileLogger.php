<?php
namespace Psr;

class FileLogger implements logger
{
    public function Log($messege)
    {
        file_put_contents('fileLog.txt', print_r(date('Y-m-d H:i:s') . $messege, true));
    }

}

