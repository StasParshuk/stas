<?php

class ApplePay implements Buy,MoneyTransfer
{
    public function buy():string{
        return "buy apple";
    }
    public function transfer($distance):int|float{
        return 1;
    }
}

