<?php

class LuxTaxi implements model,price,core
{
    private int $taxa = 1;
    public function create_order():object{
        return new luxTaxi();
    }
    public function model_car():string{
        return  "lanos";
    }
    public function price($distance):int{
        return $distance * $this->taxa;
    }
}
