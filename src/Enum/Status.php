<?php

declare (strict_types = 1);

 namespace App\Enum;

 enum Status : string {
    case DONE = "Fait";
    case WAITING = "En attente";

    public function badgeClass() : string
    {
        return match ($this){
            SELF::DONE => 'text-bg-success',
            SELF::WAITING => 'text-bg-secondary',
        };
    }
 }
