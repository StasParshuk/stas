<?php

class CreateAple extends Creator
{
    static public function create_pay(): object
    {
        return new ApplePay();
    }

}

