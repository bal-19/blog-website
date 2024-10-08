<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    {{-- Str::limit(string, limit, '...') --> unuk melimit panjang string --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto min-h-screen max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our
                    Blog</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test
                    assumptions and connect with the needs of your audience early and often.</p>
                <form action="/posts" method="GET" class="max-w-screen-md mx-auto" onsubmit="return validateSearch()">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <label for="blog-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative w-full">
                        <input type="search" name="search" id="blog-search"
                            class="block w-full p-4 ps-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for article..." autocomplete="off" />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                            <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <div class="my-6 grid gap-8 lg:grid-cols-2">
                @forelse ($posts as $post)
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-md transition-transform duration-150 dark:bg-gray-800 dark:border-gray-700 hover:scale-105">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <a href="/posts?category={{ $post->category->slug }}"
                                class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded transition-all duration-150 dark:bg-{{ $post->category->color }}-200 dark:text-{{ $post->category->color }}-800 hover:bg-{{ $post->category->color }}-200">
                                {{ $post->category->name }}
                            </a>
                            <time datetime="{{ $post->created_at }}"
                                class="text-sm">{{ $post->created_at->diffForHumans() }}</time>
                        </div>
                        <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                                href="{{ '/posts/' . $post->slug }}">{{ $post->title }}</a></h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                            {{ Str::limit($post->content, 200, '...') }}</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <img class="w-7 h-7 rounded-full"
                                    src="data:image/jpeg;base64,{{ base64_encode($post->author->image) }}"
                                    alt="{{ $post->author->name }}" />
                                <a href="/posts?author={{ $post->author->username }}"
                                    class="font-medium dark:text-white hover:underline">
                                    {{ $post->author->name }}
                                </a>
                            </div>
                            <a href="{{ '/posts/' . $post->slug }}"
                                class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-2 flex justify-center items-center">
                        <p class="text-lg text-center text-gray-500">Uh oh! We couldn't find any posts.</p>
                    </div>
                @endforelse
            </div>

            {{ $posts->links() }}

        </div>
    </section>

    <script>
        function validateSearch() {
            var searchInput = document.getElementById('blog-search').value.trim();
            if (searchInput === "") {
                Swal.fire({
                    icon: "warning",
                    title: "WARNING",
                    text: "Input tidak boleh kosong",
                    showConfirmButton: false,
                    timer: 1500
                });
                return false;
            }
            return true;
        }
    </script>
</x-layout>
