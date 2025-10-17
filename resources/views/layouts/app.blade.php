<!DOCTYPE html>
<html lang="en" x-data>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="text-2xl font-bold text-gray-800">MyBlog</div>
                <!-- Navigation -->
                <ul class="flex space-x-8">
                    @foreach($mainMenuItems as $item)
                    @if($item->children && $item->children->count())
                    <li class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="text-gray-600 hover:text-gray-900 flex items-center focus:outline-none">
                            {{$item->title}}
                           
                        </button>

                        <ul x-show="open" x-transition
                            class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md z-10 py-1">
                            @foreach($item->children as $childItem)
                            <li><a href="{{$item->url}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">{{$childItem->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @else
                    <li><a href="{{$item->url}}" class="text-gray-600 hover:text-gray-900">{{$item->title}}</a></li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">MyBlog</h3>
                    <p class="text-gray-400">Sharing knowledge and experiences through writing.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Twitter</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Facebook</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 MyBlog. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>