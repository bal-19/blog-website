<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    <div class="bg-white mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 rounded-md">
        <div class="isolate px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact Me</h2>
            </div>
            <form action="#" method="" class="mx-auto mt-16 max-w-xl sm:mt-20" x-data="{ isEnable: false }">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="form-input block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition-all duration-300">
                    </div>
                    </div>
                    <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
                    <div class="mt-2.5">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="form-input block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition-all duration-300">
                    </div>
                    </div>
                    <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
                    <div class="mt-2.5">
                        <input type="text" name="company" id="company" autocomplete="organization" class="form-input block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition-all duration-300">
                    </div>
                    </div>
                    <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email" class="form-input block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition-all duration-300">
                    </div>
                    </div>
                    <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
                    <div class="relative mt-2.5">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                        <label for="country" class="sr-only">Country</label>
                        <select id="country" name="country" class="form-select h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm transition-all duration-300">
                            <option>ID</option>
                        </select>
                        <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                        </div>
                        <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="form-input block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition-all duration-300">
                    </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                        <div class="mt-2.5">
                            <textarea name="message" id="message" rows="4" class="form-textarea block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition duration-300"></textarea>
                        </div>
                    </div>
                    <div class="flex gap-x-4 sm:col-span-2">
                        <div class="flex h-6 items-center">
                          <button @click="isEnable = !isEnable" :aria-checked="isEnable" :class="{ 'bg-indigo-600': isEnable, 'bg-gray-200': !isEnable }" type="button" class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                            <span class="sr-only">Agree to policies</span>
                            <span :aria-checked="isEnable" :class="{ 'translate-x-3.5': isEnable, 'translate-x-0': !isEnable }" aria-hidden="true" class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                          </button>
                        </div>
                        <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
                          By selecting this, you agree to our
                          <a href="#" class="font-semibold text-indigo-600 hover:underline">privacy&nbsp;policy</a>.
                        </label>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit" :disabled="!isEnable" :class="{ 'opacity-50 transition duration-300 cursor-not-allowed': !isEnable, 'hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition duration-300': isEnable }" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold shadow-sm text-white">Let's talk</button>
                </div>
            </form>
        </div>  
    </div>
</x-layout>