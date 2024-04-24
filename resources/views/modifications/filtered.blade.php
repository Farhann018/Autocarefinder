{{-- @dd($modifications, $type) --}}
<x-guest-layout>
    <div class="max-w-sm md:max-w-md lg:max-w-[90rem] mx-auto w-full py-20">
        <div class="flex flex-col gap-y-5 justify-center">
            <div class="text-2xl md:text-5xl font-medium text-center">
                Modification
            </div>
            <div class="text-center">
                Rev up your ride with our modifications!
            </div>
        </div>
        <div class="my-10">
            <form action="{{ route('modifications.filter', ['type' => $type]) }}" method="GET" class="max-w-xl mx-auto">
                @csrf
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm border text-black border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Items.." name="keyword" required />
                    <button type="submit"
                        class="text-black hover:text-black hover:shadow-lg transition-all absolute end-2.5 bottom-2.5 bg-[#FCE116] hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                </div>
            </form>                                                
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ml-8 md:ml-16 mt-20 gap-y-16">
            @foreach ($modifications as $items)
                <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                    <div
                        class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
                        <img class="w-full h-fit" src="{{ Storage::url($items->image) }}" alt="Modification item pic">
                    </div>
                    <div class="p-6">
                        <h5
                            class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            {{ $items->name }}
                        </h5>
                        <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                            {{ $items->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
