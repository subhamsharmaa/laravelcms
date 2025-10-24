<?php

namespace App\Filament\Resources\Menus\Widgets;

use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Post;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Actions\DeleteAction;
use SolutionForest\FilamentTree\Actions\EditAction as ActionsEditAction;
use SolutionForest\FilamentTree\Widgets\Tree;
use Illuminate\Support\Str;
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

                    Select::make('type')
                        ->options([
                            'custom' => "Custom",
                            'category' => "Category",
                            'post' => "Post",
                            'page' => "Page"
                        ])
                        ->required()
                        ->live(onBlur:true),

                    Select::make('slug')
                        ->label('Content')
                        ->searchable()
                        ->preload()
                        ->options(function(Get $get){
                            if($get('type') == "category")
                            {
                                return Category::active()->pluck('name','slug');
                            }
                            else if($get('type') == "post")
                            {
                                return Post::post()->pluck('title','slug');
                            }
                            else if($get('type') == "page")
                            {
                                return Post::page()->pluck('title','slug');
                            }
                        })
                        ->visible(fn(Get $get)=> $get('type') != 'custom'),

                    TextInput::make('url')
                        ->required()
                        ->unique()
                        ->hintAction(
                                Action::make('generate_slug')
                                    ->action(function(Get $get,Set $set){
                                        $slug = match($get('type')){
                                            'category'=> "/category/".$get('slug'),
                                            'post' => "/".$get('slug'),
                                            'page'=>"/".$get('slug'),
                                            default => "/".Str::slug($get('title'))
                                        };
                                        $set('url',$slug);
                                    })
                            )
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
