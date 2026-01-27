{{-- Avatar --}}
<div class="flex gap-3 mb-4" style="margin-left: {{ $level * 2.5 }}rem;">
    {{-- Avatar Section --}}
    <div class="flex-shrink-0">
        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-semibold shadow-md">
            {{ strtoupper(substr($comment->user?->name ?? $comment->guest_name, 0, 1)) }}
        </div>
    </div>

    {{-- Comment Content --}}
    <div class="flex-1 min-w-0">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            {{-- Header --}}
            <div class="px-4 py-3 bg-gray-50 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <span class="font-semibold text-gray-900">
                        {{ $comment->user?->name ?? $comment->guest_name }}
                    </span>
                    <span class="text-sm text-gray-500">
                        {{ $comment->created_at->diffForHumans() }}
                    </span>
                </div>
            </div>

            {{-- Comment Body --}}
            <div class="px-4 py-3">
                <p class="text-gray-700 leading-relaxed">{{ $comment->body }}</p>
            </div>

            {{-- Reply Button --}}
            <div class="px-4 py-2 bg-gray-50 border-t border-gray-200">
                <button 
                    onclick="document.getElementById('reply-form-{{ $comment->id }}').classList.toggle('hidden')"
                    class="text-sm font-medium text-blue-600 hover:text-blue-800 transition-colors duration-200 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/>
                    </svg>
                    Reply
                </button>
            </div>
        </div>

        {{-- Reply Form --}}
        <div id="reply-form-{{ $comment->id }}" class="hidden mt-3 bg-white rounded-lg shadow-sm border border-gray-200 p-4">
            <form action="{{ route('comments.store', $comment) }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                <input type="hidden" name="post_id" value="{{ $post->id }}">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Name Field --}}
                    <div>
                        <label for="guest_name_{{ $comment->id }}" class="block text-sm font-medium text-gray-700 mb-1">
                            Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            name="guest_name" 
                            id="guest_name_{{ $comment->id }}"
                            value="{{ old('guest_name') }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow"
                            placeholder="Your name">
                        @error('guest_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div>
                        <label for="guest_email_{{ $comment->id }}" class="block text-sm font-medium text-gray-700 mb-1">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            name="guest_email" 
                            id="guest_email_{{ $comment->id }}"
                            value="{{ old('guest_email') }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow"
                            placeholder="your@email.com">
                        @error('guest_email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Comment Field --}}
                <div>
                    <label for="body_{{ $comment->id }}" class="block text-sm font-medium text-gray-700 mb-1">
                        Comment <span class="text-red-500">*</span>
                    </label>
                    <textarea 
                        name="body" 
                        id="body_{{ $comment->id }}"
                        rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow resize-none"
                        placeholder="Write your reply...">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="flex justify-end gap-2">
                    <button 
                        type="button"
                        onclick="document.getElementById('reply-form-{{ $comment->id }}').classList.add('hidden')"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 transition-colors duration-200">
                        Cancel
                    </button>
                    <button 
                        type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition-colors duration-200 shadow-sm">
                        Post Reply
                    </button>
                </div>
            </form>
        </div>

        {{-- Recursive Replies --}}
        @if($comment->replies->count() > 0)
            <div class="mt-4">
                @foreach ($comment->replies as $reply)
                    @include('comment._comment', [
                        'comment' => $reply,
                        'level' => $level + 1
                    ])
                @endforeach
            </div>
        @endif
    </div>
</div>