<section class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">{{$sectionTitle}}</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Blog Post 1 -->
         @foreach($posts as $post)
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600" alt="Blog post" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-3">
                    @foreach($post->categories as $category)
                    <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full"><a href="{{route('category.show',$category)}}">{{$category->name}}</a></span>
                    @endforeach
                    <span>{{$post->published_at->format('d-m-Y')}}</span>
                </div>
                <a href="{{route('post.show',$post)}}">
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    {{$post->title}}
                </h3>
                </a>
                <p class="text-gray-600 mb-4">
                    {{$post->exercpt}}
                </p>
                <a href="{{route('post.show',$post)}}" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
            </div>
        </article>
        @endforeach
    </div>

    @if($showPaginationLink ?? true)
    <div class="mt-4">
        {{$posts->links()}}
    </div>
    @endif
</section>