<?php

namespace App\Http\Controllers;

use App\Filament\Resources\Comments\CommentResource;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        $data = $request->validated();
        $comment = Comment::create($data + [
            'user_id'     => auth()->id(),
            'guest_name'  => auth()->check() ? null : $data['guest_name'],
            'guest_email' => auth()->check() ? null : $data['guest_email'],
        ]);

        $users = User::permission('SendNotification:Comment')->get();
        Notification::make()
                ->title("New Comment Received")
                ->actions([
                    Action::make('view')
                        ->url(CommentResource::getUrl('edit',['record'=>$comment]))
                ])
                ->sendToDatabase($users);
                ;

        return back()->with('success', 'Comment Submitted');
    }
}
