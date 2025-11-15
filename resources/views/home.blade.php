@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4">Welcome to MyBlog</h1>
        <p class="text-xl mb-8">Discover amazing stories and insights</p>
        <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
            Start Reading
        </button>
    </div>
</section>

<!-- Featured Post -->
<section class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">Featured Post</h2>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="md:flex">
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800" alt="Featured" class="w-full h-full object-cover">
            </div>
            <div class="md:w-1/2 p-8">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-4">
                    <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full">Technology</span>
                    <span>•</span>
                    <span>March 15, 2024</span>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-4">The Future of Web Development</h3>
                <p class="text-gray-600 mb-6">
                    Explore the latest trends and technologies shaping the future of web development. 
                    From AI integration to progressive web apps, discover what's next in the digital world.
                </p>
                <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                    Read More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts Grid -->
@include('components.bloglist', ['sectionTitle' => 'Latest Posts', 'posts' => $posts])
@endsection