<?php

class StandartTaxi implements model,price
{
    private int|float $taxa = 0.7;
    public function create_order():object{
        return new StandartTaxi();
    }
    public function model_car():string{
        return "lanos";
    }
    public function price($distance):int|float{
        return $distance * $this->taxa;
    }
}