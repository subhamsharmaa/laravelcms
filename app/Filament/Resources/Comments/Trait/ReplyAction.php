<?php

namespace App\Filament\Resources\Comments\Trait;

use App\Filament\Resources\Comments\Schemas\CommentForm;
use App\Models\Comment;
use Filament\Actions\Action;
use Filament\Notifications\Notification;

trait ReplyAction
{
    public static function getReplyAction()
    {
        return Action::make('reply')
                    ->schema(CommentForm::getReplyForm())
                    ->action(function(array $data,Comment $record,$action)
                    {
                        if(!auth()->user()->hasPermissionTo('Reply:Comment'))
                        {
                            $action->halt();
                        }
                        $record->replies()->create([
                            'user_id'=>auth()->user()->id,
                            'body' => $data['body'],
                            'is_approved' => true,
                            'post_id' => $record->post_id
                        ]);

                        Notification::make()
                            ->success()
                            ->title("Reply Sent")
                            ->send();
                    })
                    ->visible(auth()->user()->hasPermissionTo('Reply:Comment'));
    }
    
}