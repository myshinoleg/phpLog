<?php
namespace Logs;

class OutLogger implements Logger
{
    public function log($messege)
    {
        echo date('Y-m-d H:i:s'), $messege;
    }

}
