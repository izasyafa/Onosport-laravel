<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- Style Css dan JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Styles -->
    <style>
        /* Customize your styles here */
        .zoom-in {
            transition: transform 0.3s ease-in-out;
        }

        .zoom-in:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body class="antialiased" style="background-color: #E5E5E5">

    {{-- Navbar --}}
    <header>
        <x-nav-home></x-nav-home>
    </header>

    <div class="container">

        {{-- CAROUSEL --}}
        <div id="controls-carousel" class="relative w-full h-carousel mt-28 " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden md:h-carousel">
                <!-- Item 1 -->
                <div class="hidden h-carousel duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Vite::asset('Resources/assets/image/carousel-1.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden h-carousel duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ Vite::asset('Resources/assets/image/carousel-2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden h-carousel duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Vite::asset('Resources/assets/image/carousel-3.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>


        {{-- PRODUK --}}
        <div class="product mx-40 my-20 pt-36" id="produk">
            <div class="w-96 text-center text-5xl mb-24 mx-auto border-b-4 border-slate-900 border-solid pb-6">
                <h1><span class="font-bold ">Produk</span> Kami</h1>
            </div>
            <section class="flex justify-center items-center gap-2 mb-10">
                <div class=" flex ml-0 items-center h-full overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                    <img src="{{ Vite::asset('Resources/assets/image/frame-1.svg') }}" alt="..."
                        class=" h-full w-full rounded-lg drop-shadow-xl zoom-in">
                </div>
                <div class="pl-10 flex flex-col w-description">
                    <h1 class=" font-bold text-3xl mb-10">SEPATU</h1>
                    <p class="">
                        Kami menyajikan koleksi yang luas dan terbaru dari merek-merek terkenal di dunia fashion. Mulai
                        dari Nike, Adidas, Puma, hingga merek-merek high-end seperti Gucci, Prada, dan banyak lagi. Kami
                        sangat memperhatikan kualitas produk yang kami tawarkan, sehingga setiap pasang sepatu yang Anda
                        beli adalah asli dan terjamin keasliannya. Dengan beragam model, warna, dan ukuran yang
                        tersedia, Anda dapat menemukan sepatu yang cocok dengan gaya dan kebutuhan Anda. Kunjungi toko
                        kami dan rasakan pengalaman berbelanja yang memuaskan dengan pilihan sepatu yang tak
                        tertandingi.
                    </p>
                </div>
            </section>

            <section class="flex justify-center items-center gap-2 mb-10">
                <div class="flex flex-col w-description pr-10">
                    <h1 class="font-bold text-3xl mb-10">SANDAL</h1>
                    <p class="">
                        Kami menawarkan pengalaman berbelanja yang unik untuk para pecinta sandal original branded.
                        Dengan fokus pada kualitas, kami menyediakan berbagai pilihan sandal dari merek-merek ternama
                        yang telah menjadi favorit di kalangan penggemar fashion. Mulai dari desain yang sporty untuk
                        kegiatan outdoor hingga sandal yang elegan untuk gaya sehari-hari, kami memiliki produk untuk
                        berbagai kesempatan. Keaslian produk merupakan prioritas utama kami, sehingga setiap pasang
                        sandal yang kami tawarkan telah melewati standar kualitas yang ketat.
                    </p>
                </div>
                <div class=" flex justify-center items-center h-full overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                    <img src="{{ Vite::asset('Resources/assets/image/frame-2.svg') }}" alt="..."
                        class=" h-full w-full rounded-lg drop-shadow-xl zoom-in">
                </div>
            </section>

            <section class="flex justify-center items-center gap-2 mb-10">
                <div class=" flex justify-center items-center h-full overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                    <img src="{{ Vite::asset('Resources/assets/image/frame-3.svg') }}" alt="..."
                        class=" h-full w-full rounded-lg drop-shadow-xl zoom-in">
                </div>
                <div class=" pl-10 flex flex-col w-description">
                    <h1 class="font-bold text-3xl mb-10">TOPI</h1>
                    <p class="">
                        Kami juga menyediakan topi snapback yang sporty hingga topi bucket hat yang trendi, kami
                        memiliki produk untuk setiap
                        selera dan kebutuhan. Keaslian produk adalah hal yang kami jamin, karena setiap topi yang kami
                        jual telah melewati seleksi ketat demi memastikan kualitasnya. Jelajahi toko kami dan temukan
                        topi original branded favorit Anda yang tidak hanya akan menambahkan sentuhan fashion pada
                        penampilan Anda tetapi juga memberikan kenyamanan dan gaya yang unik.
                    </p>
                </div>
            </section>
        </div>

        {{-- ABOUT --}}
        <div class="news mx-40 my-20 pt-36" id="news">
            <div
                class="w-96 text-center font-bold text-5xl mb-10 mx-auto border-b-4 border-slate-900 border-solid pb-6">
                <h1>News</h1>
            </div>

            <div>
                <section class="top-selling ">

                    <div class="topsell ">
                        <div class="text-3xl mb-10">
                            <h2>Top Selling</h2>
                        </div>

                        {{-- CARD 1\TOP SELL --}}
                        <div class="flex justify-between ">
                            @foreach ($topSell as $item)
                                <x-card-topsell :imagePath="$item['imagePath']" :name="$item['name']" :price="$item['price']" />
                            @endforeach
                        </div>
                    </div>



                    {{-- CARD NEW ARRIVAL --}}
                    <div class="newarrival mt-20">
                        <div class="text-3xl mb-10">
                            <h2>New Arrival</h2>
                        </div>

                        <div class="flex justify-between">
                            @foreach ($newArrival as $new)
                                <x-card-newarrival :imagePathNew="$new['imagePath_new']" :nameNew="$new['name-new']" :priceNew="$new['price-new']" />
                            @endforeach
                        </div>
                    </div>

                </section>
            </div>
        </div>


        <div class="Contact mx-40 my-20" id="contact">
            <div class="w-96 text-center text-5xl mb-20 mx-auto border-b-4 border-slate-900 border-solid pb-6">
                <h1><span class="font-bold ">Kontak</span> Kami</h1>
            </div>

            <div class="information flex flex-wrap justify-between gap-5">
                {{-- Address --}}
                <div class="w-contact h-24 address flex items-center gap-9 p-3" style="background: rgba(125, 125, 125, 0.30);">
                    <div class="ml-20 p-4" style="background-color: #D9D9D9; border-radius:50%">
                        <i class="fa-solid fa-location-dot fa-2xl" style="color: #C99654;"></i>
                    </div>
    
                    <div class="mr-10">
                        <h3 class="text-xl font-bold">
                            Alamat
                        </h3>
    
                        <p>
                            Jl. Jendral Sudirman, Pelutan, Kec. Pemalang
                        </p>
                    </div>
                </div>
                {{-- Address --}}
                <div class="w-contact h-24 address flex items-center gap-9 p-3" style="background: rgba(125, 125, 125, 0.30);">
                    <div class="ml-20 p-4" style="background-color: #D9D9D9; border-radius:50%">
                        <i class="fa-solid fa-location-dot fa-2xl" style="color: #C99654;"></i>
                    </div>
    
                    <div class="">
                        <h3 class="text-xl font-bold mb-1">
                            Sosial Media
                        </h3>
    
                        <div class="flex gap-4">
                            <span class=" h-8 w-8 flex justify-center items-center" style="background-color: black;border-radius:50%"><i class="fa-brands fa-lg fa-instagram" style="color: #ffffff;"></i></span>
                            <span class=" h-8 w-8 flex justify-center items-center" style="background-color: black;border-radius:50%"><i class="fa-brands fa-lg fa-facebook" style="color: #ffffff;"></i></span>
                            <span class=" h-8 w-8 flex justify-center items-center" style="background-color: black;border-radius:50%"><i class="fa-brands fa-lg fa-whatsapp" style="color: #ffffff;"></i></span>
                        </div>
                    </div>
                </div>
                {{-- Address --}}
                <div class="w-contact h-24 address flex items-center gap-9 p-3" style="background: rgba(125, 125, 125, 0.30);">
                    <div class="ml-20 p-4" style="background-color: #D9D9D9; border-radius:50%">
                        <i class="fa-solid fa-location-dot fa-2xl" style="color: #C99654;"></i>
                    </div>
    
                    <div>
                        <h3 class="text-xl font-bold">
                            Email
                        </h3>
    
                        <p>
                            arkaassyafa00@gmail.com
                        </p>
                    </div>
                </div>
                {{-- Address --}}
                <div class="w-contact h-24 address flex items-center gap-9 p-3" style="background: rgba(125, 125, 125, 0.30);">
                    <div class="ml-20 p-4" style="background-color: #D9D9D9; border-radius:50%">
                        <i class="fa-solid fa-location-dot fa-2xl" style="color: #C99654;"></i>
                    </div>
    
                    <div>
                        <h3 class="text-xl font-bold">
                            Nomor Handphone
                        </h3>
    
                        <p>
                            +62 859 - 5147 - 6218
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-30px py-5 my-5" style="background: rgba(125, 125, 125, 0.30);">
                <form action="" class="flex flex-col gap-5">
                    <div class="flex justify-between">
                        <div class="">
                            <input class="w-fname bg-white bg-opacity-80 border shadow-sm border-slate-300 placeholder-slate-600" type="text" name="name" id="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="">
                            <input class="w-fname bg-white bg-opacity-80 border shadow-sm border-slate-300 placeholder-slate-600" type="text" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-span-2">
                        <input class="w-full bg-white bg-opacity-80 border shadow-sm border-slate-300 placeholder-slate-600" type="text" name="subjek" id="subjek" placeholder="Subjek">
                    </div>
                    <div class="col-span-2">
                        <textarea class="w-full resize-none h-40 bg-white bg-opacity-80 border shadow-sm border-slate-300 placeholder-slate-600" type="text" name="pesan" id="pesan" placeholder="Pesan" siz></textarea>
                    </div>
                    <div>
                        <input class="py-3 px-20 text-white" type="submit" value="Kirim" style="background-color: #C99654;">
                    </div>
                </form>
            </div>
        </div>

    </div>

    <x-footer></x-footer>

</body>

</html>
