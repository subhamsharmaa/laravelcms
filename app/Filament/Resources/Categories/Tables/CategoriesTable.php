<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('resource.category.fields.name'))
                    ->searchable(),

                TextColumn::make('slug')
                    ->label(__('resource.category.fields.slug'))
                    ->searchable(),

                TextColumn::make('parent.name')
                    ->label(__('resource.category.fields.parent_category'))
                    ->searchable(),

                IconColumn::make('active')
                    ->label(__('resource.category.fields.status'))
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label(__('resource.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->label(__('resource.updated_at'))
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
                    BulkAction::make('toggle_status')
                        ->label(__('resource.category.action.toggle'))
                        ->action(function (Collection $records) {
                            try {
                                foreach ($records as $record) {
                                    $record->active = !$record->active;
                                    $record->save();
                                }

                                Notification::make()
                                    ->title(__('resource.category.notification.toggle_status.success.title'))
                                    ->body(__('resource.category.notification.toggle_status.success.body'))
                                    ->success()
                                    ->send();
                            } catch (\Throwable $e) {
                            
                                Notification::make()
                                    ->title(__('resource.category.notification.toggle_status.error.title'))
                                    ->body(__('resource.category.notification.toggle_status.error.body'))
                                    ->danger()
                                    ->send();
                            }
                        })

                ]),
            ]);
    }
}
