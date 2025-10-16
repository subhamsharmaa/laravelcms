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
<section class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">Latest Posts</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Blog Post 1 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600" alt="Blog post" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-3">
                    <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full">Design</span>
                    <span>March 12, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    10 UI Design Principles Every Developer Should Know
                </h3>
                <p class="text-gray-600 mb-4">
                    Learn the fundamental principles of user interface design that will help you create better applications.
                </p>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
            </div>
        </article>

        <!-- Blog Post 2 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600" alt="Blog post" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-3">
                    <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full">Programming</span>
                    <span>March 10, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Getting Started with Laravel 11
                </h3>
                <p class="text-gray-600 mb-4">
                    A comprehensive guide to building modern web applications with Laravel's latest features.
                </p>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
            </div>
        </article>

        <!-- Blog Post 3 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600" alt="Blog post" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-3">
                    <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full">Business</span>
                    <span>March 8, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Building a Successful SaaS Product
                </h3>
                <p class="text-gray-600 mb-4">
                    Key strategies and lessons learned from launching and scaling a software-as-a-service business.
                </p>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
            </div>
        </article>

        <!-- Blog Post 4 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600" alt="Blog post" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-3">
                    <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full">Tutorial</span>
                    <span>March 5, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Mastering Tailwind CSS in 2024
                </h3>
                <p class="text-gray-600 mb-4">
                    Tips and tricks to become more productive with Tailwind CSS utility classes.
                </p>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
            </div>
        </article>

        <!-- Blog Post 5 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600" alt="Blog post" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-3">
                    <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full">Productivity</span>
                    <span>March 3, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Time Management for Developers
                </h3>
                <p class="text-gray-600 mb-4">
                    Effective strategies to manage your time and boost productivity as a software developer.
                </p>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
            </div>
        </article>

        <!-- Blog Post 6 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
            <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?w=600" alt="Blog post" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-3">
                    <span class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full">Lifestyle</span>
                    <span>March 1, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Work-Life Balance in Tech
                </h3>
                <p class="text-gray-600 mb-4">
                    Finding harmony between your career in technology and personal life well-being.
                </p>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
            </div>
        </article>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-12">
        <nav class="flex space-x-2">
            <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300">Previous</button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">1</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300">2</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300">3</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300">Next</button>
        </nav>
    </div>
</section>
@endsection