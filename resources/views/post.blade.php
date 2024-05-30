<x-layout>
    <x-slot:title>{{ $post->title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    <div class="bg-white mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 rounded-md">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="-mb-6 mx-auto max-w-2xl lg:mx-0">
                <div class="relative mt-2 flex items-center gap-x-4">
                    <img src="https://avatars.githubusercontent.com/u/152265152?v=4" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                    <div class="text-sm leading-6">
                        <p class="mt-2 text-md leading-8 text-gray-500">
                            <a href="/authors/{{ $post->author->username }}" class="hover:underline">
                                {{ $post->author->name }}
                            </a> 
                            | 
                            <a href="/categories/{{ $post->category->slug }}" class="hover:underline">
                                {{ $post->category->name }}
                            </a> 
                            | 
                            <time>{{ $post->created_at->format('l, d F Y') }}</time>
                        </p>
                    </div>
                </div>
                <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $post->title }}</h2>
            </div>
            <div class="mt-10 max-w-max border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16">
                <p class="mt-2 mb-4 text-sm leading-6 text-gray-600"><?= nl2br($post->content) ?></p>
                <a class="mt-4 inline-flex items-center gap-x-2 text-sm leading-6 text-blue-500 hover:underline" href="/blog">&larr; Back</a>
            </div>
        </div>
    </div>
</x-layout>