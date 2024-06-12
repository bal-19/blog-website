<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    {{-- Str::limit(string, limit, '...') --> unuk melimit panjang string --}}
    <div class="bg-white mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 rounded-md">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
            </div>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article class="flex max-w-xl flex-col items-start justify-between border-b-2 border-gray-300 pb-8 px-5">
                        <div class="flex items-center gap-x-1 text-xs">
                            <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-gray-500">
                                {{ $post->category->name }}
                            </a> 
                            |
                            <time datetime="2020-03-16">{{ $post->created_at->diffForHumans() }}</time>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="{{ '/blog/' . $post->slug }}">
                                <span class="absolute inset-0"></span>
                                {{ $post->title }}
                            </a>
                            </h3>
                            <p class="mt-5 text-sm leading-6 text-gray-600">{{ Str::limit($post->content, 200, '...') }}</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="https://avatars.githubusercontent.com/u/152265152?v=4" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900">
                                    <a href="/authors/{{ $post->author->username }}" class="underline">
                                        <span class="absolute inset-0"></span>
                                        {{ $post->author->name }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>