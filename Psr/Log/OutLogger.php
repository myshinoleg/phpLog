<?php
namespace Log;

class OutLogger implements logger
{
    public function log($messege)
    {
        echo date('Y-m-d H:i:s'), $messege;
    }

}
