<?php

namespace App\Filament\Resources\Menus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('resource.menu.fields.name'))
                    ->live(onBlur:true)
                    ->required()
                    ->afterStateUpdated(fn(Set $set,$state)=>$set('slug',Str::slug($state))),

                TextInput::make('slug')
                    ->label(__('resource.menu.fields.slug'))
                    ->unique()
                    ->required(),
            ]);
    }
}
