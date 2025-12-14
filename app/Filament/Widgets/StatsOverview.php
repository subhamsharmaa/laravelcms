<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\User;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Cache;

class StatsOverview extends StatsOverviewWidget
{
    use HasWidgetShield;
    protected function getStats(): array
    {
        $stats = Cache::remember('dashboard_stats',now()->addMinute(5),function(){
                $posts = Post::published()
                            ->selectRaw("
                                SUM(CASE WHEN type = 'post' THEN 1 ELSE 0 END) as total_posts,
                                SUM(CASE WHEN type = 'page' THEN 1 ELSE 0 END) as total_pages
                            ")
                            ->first();

                return [
                    'totalPosts' => $posts->total_posts,
                    'totalPages' => $posts->total_pages,
                    'totalUsers' => User::count()
                ];
        });
        return [
            Stat::make('Total Post',$stats['totalPosts']),
            Stat::make('Total Pages',$stats['totalPages']),
            Stat::make('Total Users', $stats['totalUsers'])
        ];
    }
}
