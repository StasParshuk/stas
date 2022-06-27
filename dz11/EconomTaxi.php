<?php

class EconomTaxi  implements Model,Price
{
    private int|float $taxa = 0.5;
    public function create_order():object{
        return new self;
    }
    public function model_car():string{
        return "lanos";
    }
    public function price($distance):int{
        $taxa = 0.5;
        return $distance * $this->taxa;
    }
}

