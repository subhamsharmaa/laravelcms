<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('feature_image')
                    ->label(__('resource.post.fields.feature_image')),

                TextColumn::make('title')
                    ->searchable()
                    ->label(__('resource.post.fields.title')),

                TextColumn::make('slug')
                    ->searchable()
                    ->label(__('resource.post.fields.slug')),

                IconColumn::make('is_featured')
                    ->label(__('resource.post.fields.is_featured'))
                    ->boolean(),

                TextColumn::make('type')
                    ->label(__('resource.post.fields.type')),

                TextColumn::make('status')
                    ->label(__('resource.post.fields.status')),

                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable()
                    ->label(__('resource.post.fields.published_at'))
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('author.name')
                    ->label(__('resource.post.fields.author'))
                    ->badge()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('parent.title')
                    ->label(__('resource.post.fields.parent_id'))
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('comment_status')
                    ->boolean()
                    ->label(__('resource.post.fields.comment_status'))
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('view_count')
                    ->numeric()
                    ->sortable()
                    ->label(__('resource.post.fields.view_count'))
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
