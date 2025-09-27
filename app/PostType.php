<?php

namespace App;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PostType:string implements HasLabel,HasColor
{
    case POST = "post";
    case PAGE = "page";
    
    public function getLabel(): string|Htmlable|null
    {
        return strtoupper($this->name);
    }

    public function getColor(): string|array|null
    {
        return match($this){
            self::POST => "primary",
            self::PAGE => "success",
        };
    }
}
