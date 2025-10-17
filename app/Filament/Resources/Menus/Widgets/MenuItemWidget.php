<?php

namespace App\Filament\Resources\Menus\Widgets;

use App\Models\MenuItem;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Actions\DeleteAction;
use SolutionForest\FilamentTree\Actions\EditAction as ActionsEditAction;
use SolutionForest\FilamentTree\Widgets\Tree;

class MenuItemWidget extends Tree
{
    protected static string $model = MenuItem::class;

    protected static int $maxDepth = 2;

    protected ?string $treeTitle = 'MenuItemWidget';

    protected bool $enableTreeTitle = true;

    public ?Model $record = null;

    protected function getFormSchema(): array
    {
        return [
            Section::make()
                ->columns(2)
                ->schema([
                    Select::make('parent_id')
                        ->relationship('parent','title'),

                    TextInput::make('title')
                        ->required(),

                    TextInput::make('url')
                        ->required()
                ])
        ];
    }

    protected function getTreeQuery(): Builder
    {
        return MenuItem::where('menu_id',$this->record?->id);
    }

    protected function getViewFormSchema(): array
    {
        return [
            // INFOLIST, CAN DELETE
        ];
    }

    protected function getTreeToolbarActions(): array
    {
        return [
            \SolutionForest\FilamentTree\Actions\CreateAction::make()
                ->mutateDataUsing(function(array $data){
                    $data['menu_id'] = $this->record?->id;
                    return $data;
                }),
        ];
    }

    // CUSTOMIZE ICON OF EACH RECORD, CAN DELETE
    // public function getTreeRecordIcon(?\Illuminate\Database\Eloquent\Model $record = null): ?string
    // {
    //     return null;
    // }

    // CUSTOMIZE ACTION OF EACH RECORD, CAN DELETE 
    protected function getTreeActions(): array
    {
        return [
            // Act::make('helloWorld')
            //     ->action(function () {
            //         Notification::make()->success()->title('Hello World')->send();
            //     }),
            // ViewAction::make(),
            ActionsEditAction::make(),
            // ActionGroup::make([
                
            //     ViewAction::make(),
            //     EditAction::make(),
            // ]),
            DeleteAction::make(),
        ];
    }
    // OR OVERRIDE FOLLOWING METHODS
    //protected function hasDeleteAction(): bool
    //{
    //    return true;
    //}
    //protected function hasEditAction(): bool
    //{
    //    return true;
    //}
    //protected function hasViewAction(): bool
    //{
    //    return true;
    //}
}
