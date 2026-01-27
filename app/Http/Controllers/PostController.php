<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class PostController extends Controller
{
    /**
     * show single post
     */
    public function show(Request $request, Post $post)
    {
        $tags = $post->tags->pluck('name')->toArray();
        $post->load([
            'comments' => function ($query) {
                $query->whereNull('parent_id')
                    ->approved()
                    ->with([
                        'replies' => function ($q) {
                            $q->approved();
                        }
                    ]);
            }
        ]);

        $post->loadCount([
            'allComments as total_comments_count' => function ($q) {
                $q->approved();
            }
        ]);

        $relatedPosts = Post::with('categories')
            ->where('id', '!=', $post->id)
            ->withAnyTags($tags)
            ->post()
            ->published()
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();
        return view('post.show', ['post' => $post, 'relatedPosts' => $relatedPosts]);
    }

    /**
     * postByTag
     */
    public function postByTag(Request $request, $tag)
    {
        $posts = Post::with('categories')
            ->withAnyTags([$tag])
            ->post()
            ->published()
            ->orderBy('published_at', 'desc')
            ->paginate(9);
        return view('tag.show', ['posts' => $posts, 'tag' => $tag]);
    }
}
