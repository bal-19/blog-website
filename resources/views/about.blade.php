<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>
    <div class="bg-white mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 rounded-md">
        <div class="relative isolate overflow-hidden py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight sm:text-6xl">Work with us</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sint id corrupti! Numquam ratione odit, minima excepturi earum non sint.</p>
                </div>
                <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 sm:grid-cols-2 md:flex lg:gap-x-10">
                        <a href="#" class="hover:underline">Open roles <span aria-hidden="true">&rarr;</span></a>
                        <a href="#" class="hover:underline">Internship program <span aria-hidden="true">&rarr;</span></a>
                        <a href="#" class="hover:underline">Our values <span aria-hidden="true">&rarr;</span></a>
                        <a href="#" class="hover:underline">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
                    </div>
                    <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-800">Offices worldwide</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight">12</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-800">Full-time colleagues</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight">300+</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-800">Hours per week</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight">40</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-800">Paid time off</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight">Unlimited</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-layout>