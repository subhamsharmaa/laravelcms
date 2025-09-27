<?php

namespace App;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PostStatus:string implements HasLabel,HasColor
{
    case DRAFT = "draft";
    case PUBLISHED = "published";

    public function getLabel(): string|Htmlable|null
    {
        return strtoupper($this->name);
    }

    public function getColor(): string|array|null
    {
        return match($this){
            self::DRAFT => "warning",
            self::PUBLISHED => "success",
        };
    }
}
