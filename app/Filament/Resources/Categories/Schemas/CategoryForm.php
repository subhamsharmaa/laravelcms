<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Filament\Forms\SeoFields;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Basic Information'))
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label(__('resource.category.fields.name'))
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(function (Set $set, ?string $state) {
                                    $slug = Str::slug($state);
                                    $set('slug', $slug);
                                }),

                            TextInput::make('slug')
                                ->label(__('resource.category.fields.slug'))
                                ->required()
                                ->unique(ignoreRecord: true),
                        ]),

                        Grid::make(2)->schema([
                            Select::make('parent_id')
                                ->label(__('resource.category.fields.parent_category'))
                                ->relationship('parent', 'name')
                                ->searchable()
                                ->placeholder('Select a parent category'),

                            Toggle::make('active')
                                ->label(__('resource.category.fields.status'))
                                ->onIcon('heroicon-m-check')
                                ->offIcon('heroicon-m-x-mark')
                                ->inline(false)
                                ->default(true),
                        ]),

                        Textarea::make('description')
                            ->label(__('resource.category.fields.description'))
                            ->rows(3)
                            ->columnSpanFull()
                    ])
                    ->collapsible(),

                SeoFields::make()
            ]);
    }
}
