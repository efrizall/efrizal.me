<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hello World.</title>
</head>
<body>
    <div class="flex">
        <div class="w-1/4 flex justify-end bg-stone-100 h-screen">
            <div class="w-1/2">
                <header>
                    <span class="font-mono font-bold text-3xl tracking-tight">Hello World.</span>
                </header>
                <nav class="mt-5">
                    <a href="#home" class="w-full cursor-pointer">
                        <div class="group transition duration-300 hover:bg-black target:bg-black">
                            <span class="transition duration-300 block font-extralight hover:font-bold hover:translate-x-5 hover:text-white">Home</span>
                        </div>
                    </a>
                    <a href="#about" class="w-full cursor-pointer">
                        <div class="transition duration-300 hover:bg-black">
                            <span class="transition duration-300 block font-extralight hover:font-bold hover:translate-x-5 hover:text-white">About</span>
                        </div>
                    </a>
                    <a href="#portfolio" class="w-full cursor-pointer">
                        <div class="transition duration-300 hover:bg-black">
                            <span class="transition duration-300 block font-extralight hover:font-bold hover:translate-x-5 hover:text-white">Portfolio</span>
                        </div>
                    </a>
                    <a href="#contact" class="w-full cursor-pointer">
                        <div class="transition duration-300 hover:bg-black">
                            <span class="transition duration-300 block font-extralight hover:font-bold hover:translate-x-5 hover:text-white">Contact</span>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <main class="w-3/4 bg-black text-white">
            <div id="home"
                class="
                group flex justify-center scale-0 opacity-0 bg-stone-300
                transition duration-300 ease-in-out
                target:scale-100 opacity-100
                ">
                <div class="w-1/2 flex gap-10 items-center">
                    <div class="w-1/5 transition duration-300 delay-150 group-target:scale-100 scale-0"> <!-- Container Logo -->
                        <div class="border-none rounded-xl overflow-hidden">
                            <img src="{{ asset('logopu.png') }}" alt="Logo">
                        </div>
                    </div>
                    <div class="transition duration-300 delay-300 group-target:scale-100 scale-0 w-full"> <!-- Container Desc -->
                        <h1 class="mb-3 text-5xl font-bold">Hi, I'm Efrizal 👋</h1>
                        <p class="mb-4 font-extralight">Full stack Web Developer and Photography Enthusiast</p>
                        <div class="transition flex gap-3 duration-300 delay-500 group-target:scale-100 scale-0">
                            <a href="https://github.com/efrizall" target="_blank">
                                <button
                                    type="button"
                                    data-twe-ripple-init
                                    data-twe-ripple-color="light"
                                    class="mb-2 inline-block rounded bg-[#333] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 496 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                        </svg>
                                    </span>
                                </button>
                            </a>
                            <a href="https://www.instagram.com/e.frizal/" target="_blank" rel="noopener noreferrer">
                                <button
                                    type="button"
                                    data-twe-ripple-init
                                    data-twe-ripple-color="light"
                                    class="mb-2 inline-block rounded bg-[#c13584] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                        </svg>
                                    </span>
                                </button>
                            </a>
                            <a href="https://www.youtube.com/channel/UCS7MzbBHVhN4490DnX9B1vg" target="_blank">
                                <button
                                    type="button"
                                    data-twe-ripple-init
                                    data-twe-ripple-color="light"
                                    class="mb-2 inline-block rounded bg-[#ff0000] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 576 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                            d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                                        </svg>
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about"
                class="
                h-full flex justify-center items-center
                group
                ">
                <div class="w-3/4">
                    <h1 class="
                    text-5xl font-bold mb-5
                    opacity-0
                    transition ease-in-out delay-100 duration-100
                    group-target:opacity-100 group-target:translate-y-10
                    ">About</h1>
                    <p class="
                    font-extralight
                    opacity-0
                    transition ease-in-out delay-150 duration-150
                    group-target:opacity-100 group-target:translate-y-10
                    ">2 years of experience in building web-based applications using PHP Laravel and Codeigniter web frameworks. I currently work as a full stack web developer at the Ministry of Public Works. I am interested in building effective and efficient systems, as well as systems with attractive and responsive user interfaces. I focus on building a career in the field of web developer.</p>
                </div>
            </div>
            <div id="portfolio" class="
                h-full flex justify-center scale-0 opacity-0
                group transition ease-in-out duration-300 delay-100
                target:scale-100 opacity-100
                ">
                <div class="w-3/4 flex-col justify-center items-center mt-20">
                    <h1 class="text-4xl font-bold mb-20">Check out my latest personal work</h1>
                    <div class="grid grid-cols-3 gap-10 md:grid-cols-3 xl:grid-cols-3">
                        <div class="flex flex-col">
                            <div class="
                            transition ease-in-out delay-0 duration-300 group-target:scale-100 group-target:opacity-100
                            scale-0 opacity-0 bg-white shadow-md rounded-3xl p-4 text-black"> <!-- Card -->
                                <div class="flex-none">
                                    <div class="h-full w-full">
                                        <a href="https://sspip.efrizal.me/login" target="_blank" rel="noopener noreferrer"><img src="{{ asset('sspip.png') }}" alt="Logo" srcset="" class="w-full rounded-2xl"></a>
                                    </div>
                                    <div class="flex-auto m-2">
                                        <div class="flex flex-wrap">
                                            <div class="w-full flex-none font-bold mt-2 text-blue-500"><a href="https://sspip.efrizal.me/login" target="_blank" rel="noopener noreferrer">Monitoring P3DN</a></div>
                                            <h3 class="w-full flex-none font-extralight">Sistem untuk pencatatan dan perhitungan persentase tingkat komponen dalam negeri</h3>
                                            <div class="gap-1 mt-2">
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Bootstrap</button>
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Livewire</button>
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Laravel</button>
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">MySQL</button>
                                            </div>
                                            {{-- <span class="bg-black p-1 text-white rounded-sm">Laravel</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="transition ease-in-out delay-200 duration-300 group-target:scale-100 group-target:opacity-100
                            scale-0 opacity-0 bg-white shadow-md rounded-3xl p-4 text-black"> <!-- Card -->
                                <div class="flex-none">
                                    <div class="h-full w-full">
                                        <a href="https://sirusun.efrizal.me" target="_blank" rel="noopener noreferrer"><img src="{{ asset('sirusun.png') }}" alt="Logo" srcset="" class="w-full rounded-2xl"></a>
                                    </div>
                                    <div class="flex-auto m-2">
                                        <div class="flex flex-wrap">
                                            <div class="w-full flex-none font-bold mt-2 text-blue-500"><a href="https://sirusun.efrizal.me" target="_blank" rel="noopener noreferrer">Sistem Informasi Rumah Susun</a></div>
                                            <h3 class="w-full flex-none font-extralight">Sistem untuk monitoring pelaksanaan pembangunan rumah susun di seluruh Indonesia</h3>
                                            <div class="gap-1 mt-2">
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Bootstrap</button>
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Livewire</button>
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Laravel</button>
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">MySQL</button>
                                            </div>
                                            {{-- <span class="bg-black p-1 text-white rounded-sm">Laravel</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="transition ease-in-out delay-300 duration-300 group-target:scale-100 group-target:opacity-100
                            scale-0 opacity-0 bg-white shadow-md rounded-3xl p-4 text-black"> <!-- Card -->
                                <div class="flex-none">
                                    <div class="h-full w-full">
                                        <img src="{{ asset('logopu.png') }}" alt="Logo" srcset="" class="w-full rounded-2xl">
                                    </div>
                                    <div class="flex-auto m-2">
                                        <div class="flex flex-wrap">
                                            <div class="w-full flex-none font-bold mt-2 text-blue-500">Absensi <i class="text-orange-400">(On Progress)</i></div>
                                            <h3 class="w-full flex-none font-extralight">Sistem pencatatan kehadiran mengguanakan pengenalan wajah</h3>
                                            <div class="gap-1 mt-2">
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Tailwind</button>
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">React Js</button>
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Laravel</button>
                                                <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">MySQL</button>
                                            </div>
                                            {{-- <span class="bg-black p-1 text-white rounded-sm">Laravel</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact" class="
                flex items-center justify-center min-h-screen
                group transition ease-in-out duration-300 delay-100 scale-0 opacity-0
                target:scale-100 opacity-100
                ">
                <div class="max-w-4xl w-full shadow-lg rounded-lg p-8 flex space-x-8">
                    <div class="w-1/2">
                        <h1 class="font-bold text-4xl">Let's chat.</h1>
                        <h1 class="font-bold text-4xl">Tell me about your project.</h1>
                        <p class="font-extralight mt-2">Let's create something together 🤟🏻</p>
                    </div>
                    <div class="w-1/2">
                        <form action="{{ route('sendMail') }}" method="post" class="space-y-4">
                            @csrf
                            <input type="text" placeholder="Name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-black">
                            <input type="email" placeholder="Email address" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-black">
                            <textarea placeholder="Your message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-black"></textarea>
                            <button class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition">
                                SEND
                            </button>
                        </form>
                        @if(session('success'))
                            <div class="mt-4 p-3 bg-green-100 text-green-700 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>