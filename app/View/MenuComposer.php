<?php
namespace App\View;

use App\Models\MenuItem;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;
use Subham\FilamentDynamicSettings\Facades\Settings;

class MenuComposer
{
    public function __construct() 
    {

    }

    public function compose(View $view):void
    {
        // here is the logic for our mens..
        $menuId = Settings::get('header_menu','menu');
        if(empty($menuId))
        {
            $view->with('mainMenuItems',collect());
        }

        $menuItems = Cache::rememberForever("menu_items_{$menuId}",function() use($menuId){
            return  MenuItem::whereNull('parent_id')->with('children')->where('menu_id',$menuId)->orderBy('order')->get();
        });
        $view->with('mainMenuItems',$menuItems);
    }
}