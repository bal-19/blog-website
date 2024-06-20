<x-layout>
    <x-slot:title>{{ $post->title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://i.pravatar.cc/500" alt="{{ $post->author->username }}">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->username }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="{{ $post->created_at }}" title="{{ $post->created_at->format('l, d F Y') }}">{{ $post->created_at->format('l, d F Y') }}</time></p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
                </header>
                <p class="lead"><?= nl2br($post->content) ?></p>
            </article>
        </div>
    </section>
</x-layout>