<?php
namespace Psr;

class OutLogger implements logger
{
    public function Log($messege)
    {
        echo date('Y-m-d H:i:s'), $messege;
    }

}
