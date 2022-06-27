<?php

class CreateEconom extends Creator
{
    static public function create_order(): object
    {
        return new EconomTaxi();
    }

}

