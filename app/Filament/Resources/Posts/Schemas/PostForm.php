<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\PostStatus;
use App\PostType;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                // Select::make('type')
                                //     ->label(__('resource.post.fields.type'))
                                //     ->required()
                                //     ->options(PostType::class)
                                //     ->default(request()->query('type') ?? PostType::PAGE),

                                TextInput::make('title')
                                    ->label(__('resource.post.fields.title'))
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (Set $set, ?string $state) {
                                        $slug = Str::slug($state);
                                        $set('slug', $slug);
                                    }),


                                TextInput::make('slug')
                                    ->label(__('resource.post.fields.slug'))
                                    ->required()
                                    ->unique(),

                                Textarea::make('exercpt')
                                    ->label(__('resource.post.fields.exercpt'))
                                    ->columnSpanFull(),

                                RichEditor::make('content')
                                    ->label(__('resource.post.fields.content'))
                                    ->required()
                                    ->columnSpanFull()
                            ]),

                        Grid::make(1)
                            ->schema([

                                FileUpload::make('feature_image')
                                    ->label(__('resource.post.fields.feature_image'))
                                    ->image(),

                                Toggle::make('is_featured')
                                    ->label(__('resource.post.fields.is_featured'))
                                    ->required(),

                                
                                Toggle::make('comment_status')
                                    ->label(__('resource.post.fields.comment_status'))
                                    ->required(),


                                Select::make('status')
                                    ->label(__('resource.post.fields.status'))
                                    ->required()
                                    ->options(PostStatus::class)
                                    ->default(PostStatus::DRAFT->value),

                                DateTimePicker::make('published_at')
                                    ->label(__('resource.post.fields.published_at'))
                                    ->default(now())
                                    ->required(),

                                Select::make('parent_id')
                                    ->relationship('parent','title')
                                    ->searchable()
                                    ->label(__('resource.post.fields.parent_id'))
                            ])
                    ])
            ]);
    }
}
