<?php

namespace App;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PostStatus:string implements HasLabel
{
    case DRAFT = "draft";
    case PUBLISHED = "published";

    public function getLabel(): string|Htmlable|null
    {
        return strtoupper($this->name);
    }
}
