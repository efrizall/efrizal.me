<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('ef.png') }}">
    <title>Hello World.</title>
</head>
<body class="min-h-screen max-w-2xl mx-auto py-12 sm:py-24 px-6">
    <main class="space-y-10">
        <section id="hero">
            <div class="">
                <div class="flex justify-between">
                    <div class="flex flex-col">
                        <div class="flex">
                            <span class="inline-block text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none" style="opacity: 1; filter: blur(0px); transform: translateY(-8px) translateZ(0px);">Hi, I'm Efrizal 👋</span>
                        </div>
                        <div class="flex">
                            <span class="md:text-2xl font-extralight" style="">Full Stack Web Developer and Photography Enthusiast</span>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('efri.jpg') }}" alt="Logo" width="150px" class="rounded-full max-h-[150px]">
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div>
                <span class="text-xl font-bold">About</span>
            </div>
            <div class="max-w-full font-sans text-sm text-muted-foreground">
                <p class="">2 years of experience in building web-based applications using Laravel and Codeigniter PHP web frameworks. I currently work as a full stack web developer at the Ministry of Public Works. I am interested in building effective and efficient systems, as well as systems with attractive and responsive user interfaces. I focus on building a career in the field of web developer.</p>
            </div>
        </section>
        <section id="prpoject">
            <div class="min-h-0">
                <div>
                    <h2 class="text-xl font-bold">Project</h2>
                </div>
                <div id="sspipProject" class="mt-3 transition delay-100 hover:bg-stone-200 rounded-lg p-2">
                    <a href="https://sspip.efrizal.me" target="_blank" rel="noopener noreferrer">
                        <div class="flex gap-2">
                            <div class="flex-none pt-1">
                                <img src="{{ asset('logopu.png') }}" alt="logo" width="60px" class="rounded-full">
                            </div>
                            <div class="flex justify-between w-full">
                                <div class="flex flex-col">
                                    <h3 class="font-bold">Monitoring P3DN</h3>
                                    <p class="max-w-full font-sans text-sm text-muted-foreground">Freelance Full Stack Web Developer</p>
                                    <div class="flex flex-wrap gap-1 mt-1">
                                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Bootstrap</button>
                                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Livewire</button>
                                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Laravel</button>
                                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Docker</button>
                                    </div>
                                </div>
                                <div class="flex flex-col min-w-[100px] text-right">
                                    <p class="font-extralight">Nov 2022</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div id="sspip" class="border-x border-b-4 border-stone-300 w-full p-2 rounded-lg">
                    <h1 class="font-sans text-sm text-muted-foreground">Sistem yang digunakan untuk pencatatan dan perhitungan persentase tingkat komponen dalam negeri</h1>
                </div>
                <div id="sirusunProject" class="mt-3 transition delay-100 duration-500 hover:bg-stone-200 rounded-lg p-2">
                    <a href="https://sirusun.efrizal.me" target="_blank" rel="noopener noreferrer">
                        <div class="flex gap-2">
                            <div class="flex-none pt-1">
                                <img src="{{ asset('logopu.png') }}" alt="logo" width="60px" class="rounded-full">
                            </div>
                            <div class="flex justify-between w-full">
                                <div class="flex flex-col">
                                    <h3 class="font-bold">Sistem Informasi Rumah Susun</h3>
                                    <p class="max-w-full font-sans text-sm text-muted-foreground">Full Stack Web Developer</p>
                                    <div class="flex flex-wrap gap-1 mt-1">
                                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Bootstrap</button>
                                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Livewire</button>
                                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Laravel</button>
                                    </div>
                                </div>
                                <div class="flex flex-col min-w-[100px] text-right">
                                    <p class="font-extralight">Nov 2022 - Jan 2025</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div id="sirusun" class="border-x border-b-4 border-stone-300 w-full p-2 rounded-lg">
                    <h1 class="font-sans text-sm text-muted-foreground">Tim Datin Direktorat Rumah Susun. Menyusun dan mengembangkan aplikasi web bernama SIRUSUN. Aplikasi ini digunakan untuk memonitoring pelaksanaan pembangunan rumah susun di seluruh Indonesia</h1>
                </div>
            </div>
        </section>

        <section id="education">
            <div class="min-h-0">
                <div>
                    <h2 class="text-xl font-bold">Education </h2>
                </div>
                <div class="mt-3 transition delay-100 hover:bg-stone-200 rounded-lg p-2">
                    <div class="flex gap-2">
                        <div class="flex-none pt-1">
                            <img src="{{ asset('sttnf.png') }}" alt="logo" width="60px" class="rounded-full">
                        </div>
                        <div class="flex justify-between w-full">
                            <div class="flex flex-col">
                                <h3 class="font-bold">STT Nurul Fikri</h3>
                                <p class="max-w-full font-sans text-sm text-muted-foreground">S1 - Informatics | GAP 3,73</p>
                            </div>
                            <div class="flex flex-col min-w-[100px] text-right">
                                <p class="font-extralight">2018 - 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills">
            <div class="min-h-0">
                <div>
                    <h2 class="text-xl font-bold">Skills</h2>
                </div>
                <div class="flex">
                    <div class="gap-1 mt-2">
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">PHP</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Javascript</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Bootstrap</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Tailwind CSS</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Laravel</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Codeigniter</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">React Js</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">MySQL</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Docker</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">GIT</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Figma</button>
                        <button class="bg-black text-white rounded-md px-2 py-1 text-xs font-extralight">Linux</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div>
                <div class="w-full">
                    <h1 class="font-bold text-4xl">Let's chat.</h1>
                    <h1 class="font-bold text-4xl">Tell me about your project.</h1>
                    <p class="font-extralight mt-2">Let's create something together 🤟🏻</p>
                </div>
                <div class="w-full">
                    <form action="{{ route('sendMail') }}" method="post" class="space-y-4">
                        @csrf
                        <input type="text" placeholder="Name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-black">
                        <input type="email" placeholder="Email address" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-black">
                        <textarea placeholder="Your message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-black"></textarea>
                        <button class="w-full bg-stone-600 text-white p-2 rounded-lg hover:bg-stone-300 hover:text-stone-600 hover:font-bold transition">
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
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // sspip
            const sspipDiv = document.getElementById('sspip');
            const sspipProjectDiv = document.getElementById('sspipProject');

            sspipDiv.style.display = 'none';

            sspipProjectDiv.addEventListener('mouseover', function() {
                sspipDiv.style.display = 'block';
            });

            sspipProjectDiv.addEventListener('mouseout', function() {
                sspipDiv.style.display = 'none';
            });

            // sirusun
            const sirusunDiv = document.getElementById('sirusun');
            const sirusunProjectDiv = document.getElementById('sirusunProject');

            sirusunDiv.style.display = 'none';

            sirusunProjectDiv.addEventListener('mouseover', function() {
                sirusunDiv.style.display = 'block';
            });

            sirusunProjectDiv.addEventListener('mouseout', function() {
                sirusunDiv.style.display = 'none';
            });
        });
    </script>
</body>
</html>