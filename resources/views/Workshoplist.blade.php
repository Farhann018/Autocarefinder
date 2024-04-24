<x-guest-layout>
    <div class="hidden md:block relative">
        <img class="h-screen w-screen " src="{{ Vite::asset('/resources/images/main2.png') }}" alt="image description">
        <div class="absolute top-[15rem] left-[10rem] ">
            <div class="w-[50rem] text-6xl font-extrabold text-white">
                Streamlining the Path
                to Uncover the Perfect
                Upgrades for Your Vehicle
            </div>
        </div>
        <div class="absolute top-[32rem] left-[10rem] font-sans font-medium ">
            <div class="w-[48rem] text-2xl tracking-wide leading-[1.5rem] text-gray-100">
                Effortlessly pinpoint the ideal car for you with our streamlined search approach. Find your perfect
                match.
            </div>
        </div>
        <div class="absolute top-[38rem] left-[10rem] ">
            <a href="{{ route('register') }}"
                class="bg-[#FCE116] hover:bg-black text-black hover:text-white font-bold py-4 px-32 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                Register your workshop
            </a>
        </div>
        <div class="absolute top-[52rem] left-[10rem] ">
            @include('components.search')
        </div>
    </div>
    <div class="block md:hidden bg-gray-200 py-20"
        style="background-image: url('{{ Vite::asset('/resources/images/main.png') }}'); background-size: cover; background-position: center;">
        <div class="flex flex-col gap-y-4 text-center px-10 w-full">
            <div class="text-2xl font-extrabold">
                Streamlining the Path
                to Uncover the Perfect
                Upgrades for Your Vehicle
            </div>
            <div class="text-sm">
                Effortlessly pinpoint the ideal car for you with our streamlined search approach. Find your perfect
                match.
            </div>
            <div class="flex flex-col gap-y-6 w-full mb-10">
                <div class="w-full">
                    <a href="{{ route('register') }}"
                        class="bg-[#FCE116] w-full text-black hover:text-white uppercase font-extrabold py-2 px-10 shadow-xl rounded-md text-base transition-all">
                        Register your workshop
                    </a>
                </div>
            </div>
            <div>
                @include('components.search')
            </div>
        </div>
    </div>
    <div class="bg-gray-200">
        <div class="max-w-sm md:max-w-[100rem] pt-20 md:pt-80 pb-20 mx-auto ">
            <div class="flex justify-center text-center">
                <div class="text-2xl md:text-5xl font-bold ">
                    Featured Workshops
                    <hr class="h-[0.10rem] w-full md:w-[30rem] my-8 border-0 bg-gray-700">
                </div>
            </div>
            {{-- @foreach ($shoplist as $item)
                <div class="w-full h-fit md:h-[22rem] mb-8">
                    <div class="flex flex-col md:flex-row justify-start gap-x-5">
                        <div class="flex items-center">
                            @if ($item->image)
                                <img class="rounded-xl h-[18rem] w-fit" src="{{ Storage::url($item->image) }}"
                                    alt="Image description">
                            @else
                                <img class="h-[10rem] md:h-[18rem] w-fit" src="{{ Vite::asset('/resources/images/workshop.png') }}"
                                    alt="Placeholder image">
                            @endif
                        </div>
                        <div class="flex flex-col py-12 gap-y-4 pr-12 w-[70rem] bg-white p-5 rounded-2xl">
                            <div class="text-4xl font-bold">
                                {{ $item->name }}
                            </div>
                            <div class="hidden md:flex justify-start w-fit md:w-full font-medium text-black text-lg">
                                {{ $item->description }}
                            </div>
                            <div class="flex gap-x-4 items-center ">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 2c3.31 0 6 2.66 6 5.95C18 12.41 12 19 12 19S6 12.41 6 7.95C6 4.66 8.69 2 12 2m0 4a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m8 13c0 2.21-3.58 4-8 4s-8-1.79-8-4c0-1.29 1.22-2.44 3.11-3.17l.64.91C6.67 17.19 6 17.81 6 18.5c0 1.38 2.69 2.5 6 2.5s6-1.12 6-2.5c0-.69-.67-1.31-1.75-1.76l.64-.91C18.78 16.56 20 17.71 20 19" />
                                    </svg>
                                </div>
                                <div class="font-sans font-medium">
                                    {{ $item->location }}
                                </div>
                            </div>
                            <div class="flex gap-x-4 items-center ">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                                    </svg>
                                </div>

                                <div class="font-medium ">
                                    {{ $item->number }}
                                </div>
                            </div>
                            <div class="flex justify-end w-fit md:w-full">
                                <a href="{{ route('Shopdetail', ['Shopdetail' => $item]) }}"
                                    <button>
                                        <span class="box bg-[#FCE116]">
                                            See details
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($shoplist as $item)
                    <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl h-fit">
                            @if ($item->image)
                                <img class="h-[17rem] w-full" src="{{ Storage::url($item->image) }}"
                                    alt="Image description">
                            @endif
                        </div>
                        <div class="p-6 text-center text-black">
                            <h4
                                class="block mb-2 font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                <div class="flex justify-between items-center">
                                    <div>
                                        {{ $item->name }}
                                    </div>
                                    <div class="p-2 rounded-full bg-[#FCE116]">
                                        <div x-data="{ showTooltip: false }" class="relative">
                                            <span @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                                                class="cursor-pointer ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M19.95 21q-3.125 0-6.187-1.35T8.2 15.8t-3.85-5.55T3 4.05V3h5.9l.925 5.025l-2.85 2.875q.55.975 1.225 1.85t1.45 1.625q.725.725 1.588 1.388T13.1 17l2.9-2.9l5 1.025V21z" />
                                                </svg>
                                            </span>
                                            <!-- Tooltip -->
                                            <div x-show="showTooltip "
                                                class="absolute right-0 mt-2 p-2 bg-gray-300 text-black text-sm rounded">
                                                {{ $item->number }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </h4>
                            <p
                                class="block text-base antialiased font-medium leading-relaxed text-start bg-clip-text h-[9rem] overflow-y-scroll">
                                {{ $item->description }}
                            </p>
                            <div class="flex mt-4 items-center gap-x-2">
                                <div>
                                    <svg class="text-[#0C8CDC]" xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="25" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 12q.825 0 1.413-.587T14 10t-.587-1.412T12 8t-1.412.588T10 10t.588 1.413T12 12m0 7.35q3.05-2.8 4.525-5.087T18 10.2q0-2.725-1.737-4.462T12 4T7.738 5.738T6 10.2q0 1.775 1.475 4.063T12 19.35M12 22q-4.025-3.425-6.012-6.362T4 10.2q0-3.75 2.413-5.975T12 2t5.588 2.225T20 10.2q0 2.5-1.987 5.438T12 22m0-12" />
                                    </svg>
                                </div>
                                <div class="text-base">
                                    {{ $item->location }}
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center p-6 pt-2 gap-4 items-center">
                            <div>
                                <div x-data="{ showTooltip: false }" class="relative">
                                    <span @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                                        class="cursor-pointer ">
                                        <svg class="text-[#106AFE]" xmlns="http://www.w3.org/2000/svg" width="32"
                                            height="32" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z" />
                                        </svg>
                                    </span>
                                    <!-- Tooltip -->
                                    <div x-show="showTooltip "
                                        class="absolute right-[-3rem] z-20 mt-2 p-2 bg-gray-300 text-black text-sm rounded">
                                        {{ $item->facebook }}
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div x-data="{ showTooltip: false }" class="relative">
                                    <span @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                                        class="cursor-pointer ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 256 256">
                                            <g fill="none">
                                                <rect width="256" height="256" fill="url(#skillIconsInstagram0)"
                                                    rx="60" />
                                                <rect width="256" height="256" fill="url(#skillIconsInstagram1)"
                                                    rx="60" />
                                                <path fill="#fff"
                                                    d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334" />
                                                <defs>
                                                    <radialGradient id="skillIconsInstagram0" cx="0"
                                                        cy="0" r="1"
                                                        gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FD5" />
                                                        <stop offset=".1" stop-color="#FD5" />
                                                        <stop offset=".5" stop-color="#FF543E" />
                                                        <stop offset="1" stop-color="#C837AB" />
                                                    </radialGradient>
                                                    <radialGradient id="skillIconsInstagram1" cx="0"
                                                        cy="0" r="1"
                                                        gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#3771C8" />
                                                        <stop offset=".128" stop-color="#3771C8" />
                                                        <stop offset="1" stop-color="#60F" stop-opacity="0" />
                                                    </radialGradient>
                                                </defs>
                                            </g>
                                        </svg>
                                    </span>
                                    <!-- Tooltip -->
                                    <div x-show="showTooltip "
                                        class="absolute z-20 right-[-3rem] mt-2 p-2 bg-gray-300 text-black text-sm rounded">
                                        {{ $item->instagram }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center w-fit md:w-full pb-10">
                            <a href="{{ route('Shopdetail', ['Shopdetail' => $item]) }}" <button>
                                <span class="box bg-[#FCE116]">
                                    See details
                                </span>
                                </button>
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="flex justify-center mt-14">
                <a href=""
                    class="bg-gradient-to-r from-[#FDC830] to-[#F37335] hover:bg-black text-black hover:text-white font-bold py-4 px-10 md:px-28 shadow-lg hover:shadow-xl rounded-xl text-xl md:text-2xl transition-all">
                    See more
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
