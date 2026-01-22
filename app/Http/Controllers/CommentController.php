<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        $data = $request->validated();
        Comment::create($data + [
            'user_id'     => auth()->id(),
            'guest_name'  => auth()->check() ? null : $data['guest_name'],
            'guest_email' => auth()->check() ? null : $data['guest_email'],
        ]);
        return back()->with('success', 'Comment Submitted');
    }
}
