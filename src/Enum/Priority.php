<?php

declare (strict_types = 1);

 namespace App\Enum;

 enum Priority : string {
    case LOW = "faible";
    case MEDIUM = "moyenne";

    case HIGH = "absolue";

    public function badgeClass(): string{
        return match ($this){

            SELF::HIGH => 'text-bg-danger',
            SELF::MEDIUM => 'text-bg-warning',
            SELF::LOW => 'text-bg-primary',


        };
    }
 }
