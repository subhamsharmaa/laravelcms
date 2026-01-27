@extends('layouts.app')

@section('content')
<!-- Breadcrumb -->
<section class="bg-gray-100 py-4">
    <div class="container mx-auto px-4">
        <nav class="text-sm text-gray-600">
            <a href="#" class="hover:text-gray-900">Home</a>
            <span class="mx-2">/</span>
            <a href="#" class="hover:text-gray-900">Blog</a>
            <span class="mx-2">/</span>
            <span class="text-gray-900">{{$post->title}}</span>
        </nav>
    </div>
</section>

<!-- Article Header -->
<article class="bg-white">
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <!-- Category and Date -->
            <div class="flex items-center space-x-3 text-sm text-gray-600 mb-6">
                <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full font-semibold">Technology</span>
                <span>•</span>
                <span>{{$post->published_at->format('d-m-Y')}}</span>
                <span>•</span>
                <span>8 min read</span>
            </div>

            <!-- Title -->
            <h1 class="text-5xl font-bold text-gray-900 mb-6 leading-tight">
                {{$post->title}}
            </h1>

            <!-- Author Info -->
            <div class="flex items-center space-x-4 mb-8 pb-8 border-b">
                <img src="https://i.pravatar.cc/100?img=12" alt="Author" class="w-16 h-16 rounded-full">
                <div>
                    <h3 class="font-bold text-gray-900">John Doe</h3>
                    <p class="text-gray-600">Senior Web Developer</p>
                </div>
            </div>

            <!-- Featured Image -->
            <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1200" 
                 alt="Featured" 
                 class="w-full h-96 object-cover rounded-lg mb-8">

            <!-- Article Content -->
            {!!$post->content!!}

            <!-- Tags -->
            <div class="mt-12 pt-8 border-t">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Tags:</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($post->tags as $tag)
                    <a href="{{route('post.bytag',$tag->slug)}}">
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm">{{ucwords($tag->name)}}</span>
</a>
                  @endforeach
                </div>
            </div>

            <!-- Share Buttons -->
            <div class="mt-8 pt-8 border-t">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Share this article:</h3>
                <div class="flex space-x-4">
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        Twitter
                    </button>
                    <button class="bg-blue-800 text-white px-6 py-2 rounded-lg hover:bg-blue-900 transition">
                        Facebook
                    </button>
                    <button class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition">
                        Pinterest
                    </button>
                    <button class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition">
                        LinkedIn
                    </button>
                </div>
            </div>

            <!-- Author Bio -->
            <div class="mt-12 bg-gray-50 rounded-lg p-8">
                <div class="flex items-start space-x-6">
                    <img src="https://i.pravatar.cc/150?img=12" alt="Author" class="w-24 h-24 rounded-full">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">About John Doe</h3>
                        <p class="text-gray-700 mb-4">
                            John is a senior web developer with over 10 years of experience building scalable web 
                            applications. He's passionate about emerging technologies and loves sharing his knowledge 
                            through writing and speaking at conferences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Related Posts -->
@include('components.bloglist', ['sectionTitle' => "Related Post", 'posts' => $relatedPosts,'showPaginationLink'=>false])

<!-- Comments Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Comments ({{$post->total_comments_count}})</h2>

            <!-- Comment 1 -->
            @foreach($post->comments as $comment)
                @include('comment._comment',['post'=>$post,'comment'=>$comment,'level'=>0])
            @endforeach
            <!-- Comment Form -->
            <div class="mt-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Leave a Comment</h3>
                @if(session('success'))
                <div class="mb-4 rounded-lg bg-green-100 border border-green-200 text-green-8000 px-4 py-3">
                {{session('success')}}
                </div>
                @endif
                <form class="space-y-4" method="post" action="{{route('comments.store')}}">
                @csrf
                <input type="hidden" name="post_id" value="{{$post->id}}"/>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Your name" name="guest_name">
                           <span> @error('guest_name') {{$message}} @enderror</span>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="your@email.com" name="guest_email">
                            <span> @error('guest_email') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Comment</label>
                        <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Write your comment here..." name="body"></textarea>
                        <span> @error('body') {{$message}} @enderror</span>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Post Comment
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection