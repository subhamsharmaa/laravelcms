<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('resource.category.fields.name'))
                    ->required()
                    ->live(onBlur:true)
                    ->afterStateUpdated(function(Set $set,?string $state){
                        $slug = Str::slug($state);
                        $set('slug',$slug);
                    }),
                    
                TextInput::make('slug')
                    ->label(__('resource.category.fields.slug'))
                    ->required()
                    ->unique(),

                Select::make('parent_id')
                    ->label(__('resource.category.fields.parent_category'))
                    ->relationship('parent', 'name')
                    ->searchable(),

                Toggle::make('active')
                    ->label(__('resource.category.fields.status'))
                    ->required(),

                Textarea::make('description')
                    ->label(__('resource.category.fields.description'))
                    ->columnSpanFull(),
            ]);
    }
}
