<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Cache;
use SolutionForest\FilamentTree\Concern\ModelTree;

class MenuItem extends Model
{
    use ModelTree;
    protected $fillable = ['menu_id','title','url','type','parent_id','order'];

    public function parent():BelongsTo
    {
        return $this->belongsTo(self::class,'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class,'parent_id');
    }

    public static function booted()
    {
        static::saved(function($item){
            Cache::forget("menu_items_{$item->menu_id}");
        });
        
        static::deleted(function($item){
            Cache::forget("menu_items_{$item->menu_id}");
        });
    }
}
