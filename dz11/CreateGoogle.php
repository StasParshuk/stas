<?php

class CreateGoogle extends Creator
{
    static public function create_pay(): object
    {
        return new GooglePay();
    }
}

