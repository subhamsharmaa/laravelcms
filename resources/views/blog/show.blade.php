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
            <span class="text-gray-900">The Future of Web Development</span>
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
                <span>March 15, 2024</span>
                <span>•</span>
                <span>8 min read</span>
            </div>

            <!-- Title -->
            <h1 class="text-5xl font-bold text-gray-900 mb-6 leading-tight">
                The Future of Web Development: Trends to Watch in 2024
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
            <div class="prose prose-lg max-w-none">
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    The landscape of web development is constantly evolving, with new technologies and methodologies 
                    emerging at a rapid pace. As we progress through 2024, several key trends are shaping the future 
                    of how we build and interact with the web.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-4">1. AI-Powered Development Tools</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Artificial Intelligence is revolutionizing the way developers write code. From intelligent code 
                    completion to automated testing and bug detection, AI-powered tools are becoming indispensable 
                    in modern development workflows. These tools not only increase productivity but also help 
                    maintain code quality and consistency across large projects.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-4">2. Progressive Web Applications (PWAs)</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Progressive Web Applications continue to bridge the gap between web and native applications. 
                    With improved offline capabilities, push notifications, and near-native performance, PWAs offer 
                    users a seamless experience across all devices. Major companies are increasingly adopting PWAs 
                    to reach broader audiences without the complexity of maintaining separate native applications.
                </p>

                <blockquote class="border-l-4 border-blue-600 pl-6 my-8 italic text-gray-700 text-xl">
                    "The future of web development lies not in choosing between web and native, but in creating 
                    experiences that transcend platform boundaries."
                </blockquote>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-4">3. Serverless Architecture</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Serverless computing is changing how we think about backend infrastructure. By abstracting 
                    server management, developers can focus entirely on writing code while cloud providers handle 
                    scaling, maintenance, and security. This approach not only reduces operational costs but also 
                    enables faster deployment and better resource utilization.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-4">4. WebAssembly (WASM)</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    WebAssembly is opening new possibilities for web applications by enabling near-native performance 
                    in the browser. Languages like Rust, C++, and Go can now run on the web, making it possible to 
                    build complex applications such as video editors, games, and CAD software entirely in the browser.
                </p>

                <div class="bg-gray-100 p-8 rounded-lg my-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Key Takeaways</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            AI tools are becoming essential for modern web development
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            PWAs offer the best of both web and native experiences
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            Serverless architecture simplifies backend development
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            WebAssembly expands what's possible in the browser
                        </li>
                    </ul>
                </div>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-4">Conclusion</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    The future of web development is exciting and full of opportunities. By staying informed about 
                    these trends and continuously learning, developers can position themselves at the forefront of 
                    this ever-evolving field. Whether you're building your next project or planning your learning 
                    roadmap, these trends should be on your radar.
                </p>
            </div>

            <!-- Tags -->
            <div class="mt-12 pt-8 border-t">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Tags:</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm">Web Development</span>
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm">Technology</span>
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm">AI</span>
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm">PWA</span>
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm">WebAssembly</span>
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
                        <div class="flex space-x-4">
                            <a href="#" class="text-blue-600 hover:text-blue-700">Twitter</a>
                            <a href="#" class="text-blue-600 hover:text-blue-700">LinkedIn</a>
                            <a href="#" class="text-blue-600 hover:text-blue-700">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Related Posts -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Related Articles</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Related Post 1 -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600" alt="Related post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-blue-600 font-semibold">Design</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">
                            UI Design Principles
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Essential principles for creating beautiful user interfaces.
                        </p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
                    </div>
                </article>

                <!-- Related Post 2 -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600" alt="Related post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-blue-600 font-semibold">Programming</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">
                            Getting Started with Laravel
                        </h3>
                        <p class="text-gray-600 mb-4">
                            A comprehensive guide to building modern applications.
                        </p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
                    </div>
                </article>

                <!-- Related Post 3 -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600" alt="Related post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-blue-600 font-semibold">Tutorial</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">
                            Mastering Tailwind CSS
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Tips to become productive with Tailwind utility classes.
                        </p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Comments Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Comments (3)</h2>

            <!-- Comment 1 -->
            <div class="mb-8 pb-8 border-b">
                <div class="flex items-start space-x-4">
                    <img src="https://i.pravatar.cc/60?img=5" alt="Commenter" class="w-12 h-12 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-2">
                            <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                            <span class="text-gray-500 text-sm">2 days ago</span>
                        </div>
                        <p class="text-gray-700">
                            Great article! I've been following the WebAssembly developments closely, and it's 
                            amazing to see how far it has come. Can't wait to see what 2024 brings!
                        </p>
                    </div>
                </div>
            </div>

            <!-- Comment 2 -->
            <div class="mb-8 pb-8 border-b">
                <div class="flex items-start space-x-4">
                    <img src="https://i.pravatar.cc/60?img=8" alt="Commenter" class="w-12 h-12 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-2">
                            <h4 class="font-bold text-gray-900">Mike Chen</h4>
                            <span class="text-gray-500 text-sm">1 day ago</span>
                        </div>
                        <p class="text-gray-700">
                            The section on serverless architecture really resonated with me. We recently migrated 
                            our backend to a serverless solution and the cost savings have been significant.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Comment 3 -->
            <div class="mb-8">
                <div class="flex items-start space-x-4">
                    <img src="https://i.pravatar.cc/60?img=3" alt="Commenter" class="w-12 h-12 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-2">
                            <h4 class="font-bold text-gray-900">Emily Rodriguez</h4>
                            <span class="text-gray-500 text-sm">5 hours ago</span>
                        </div>
                        <p class="text-gray-700">
                            Thanks for this comprehensive overview! Would love to see a follow-up article 
                            diving deeper into AI-powered development tools.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Comment Form -->
            <div class="mt-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Leave a Comment</h3>
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Your name">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="your@email.com">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Comment</label>
                        <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Write your comment here..."></textarea>
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