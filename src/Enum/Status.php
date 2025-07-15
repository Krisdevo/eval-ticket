<?php

declare (strict_types = 1);

 namespace App\Enum;

 enum Status : string {
    case DONE = "Fait";
    case WAITING = "Accompli";

    public function badgeClass() : string
    {
        return match ($this){
            SELF::DONE => 'text-success',
            SELF::WAITING => 'text-secondary',
        };
    }
 }
