<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Document</title>
</head>

<body>
	<div class="mx-auto flex w-12/12 h-screen items-center">
		<div class="basis-1/4 flex justify-end">
			<div class="w-1/2">
				<header>
					<span class="font-mono font-bold text-2xl tracking-tight">
						Hello World.
					</span>
				</header>
				<nav class="mt-5">
					<a href="#home" class="group w-full cursor-pointer">
						<div class="transition ease-in-out duration-300 group-hover:bg-black">
							<span class="transition duration-300 block font-extralight hover:font-bold hover:translate-x-5 hover:text-white">
								Home
							</span>
						</div>
					</a>
					<a href="#about" class="group w-full cursor-pointer">
						<div class="transition ease-in-out duration-300 group-hover:bg-black">
							<span class="transition duration-300 block font-extralight hover:font-bold hover:translate-x-5 hover:text-white">
								About
							</span>
						</div>
					</a>
					<a href="#portfolio" class="group w-full cursor-pointer">
						<div class="transition ease-in-out duration-300 group-hover:bg-black">
							<span class="transition duration-300 block font-extralight hover:font-bold hover:translate-x-5 hover:text-white">
								Portfolio
							</span>
						</div>
					</a>
					<a href="#contact" class="group w-full cursor-pointer">
						<div class="transition ease-in-out duration-300 group-hover:bg-black">
							<span class="transition duration-300 block font-extralight hover:font-bold hover:translate-x-5 hover:text-white">
								Contact
							</span>
						</div>
					</a>
				</nav>
			</div>
		</div>

		<main class="basis-3/4 w-full h-full bg-stone-100">
			<div id="home"
				class="
				group absolute h-full flex justify-center scale-0 opacity-0
				transition ease-in-out duration-300 delay-0
				target:scale-100 target:opacity-100
				">
				<div class="w-3/4 flex gap-10 items-center bg-green-300">
					<div class="w-1/4 transition duration-300 delay-150 group-target:scale-100 scale-0"> <!-- container logo -->
						<div class="border-none rounded-lg overflow-hidden">
							<img src="logo.jpg" alt="">
						</div>
					</div>
					<div class="w-3/4 transition duration-300 delay-100 group-target:scale-100 scale-0 bg-sky-300">
						<h1 class="mb-3 text-5xl font-bold">Hi, I'm Efrizal 👋</h1>
                        {{-- <p class="font-extralight">Full stack Web Developer and Photography Enthusiast</p> --}}
						<p>Full stack Web Developer and Photography Enthusiast aksjdh asdjkha wdalkjshdal dalkwhd aslkdjawd</p>
						<!-- deskripsi -->
						<div class="flex mt-5 items-center gap-5 transition duration-300 delay-300 group-target:scale-100 scale-0">
							<!-- Instagram -->
                            <a href="https://www.instagram.com/e.frizal/" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
							<!-- Youtube -->
							<a href="https://www.youtube.com/channel/UCS7MzbBHVhN4490DnX9B1vg" target="_blank" rel="noopener noreferrer">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
									viewBox="0 0 24 24">
									<path
										d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
								</svg>
							</a>
							<!-- Github -->
							<a href="https://github.com/efrizall" target="_blank" rel="noopener noreferrer">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
									viewBox="0 0 24 24">
									<path
										d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
								</svg>
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