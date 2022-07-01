<?php

class GooglePay implements Buy,MoneyTransfer
{
    public function buy():string{
        return "buy google";
    }
    public function transfer($distance):int|float{
        return 1;
    }
}


