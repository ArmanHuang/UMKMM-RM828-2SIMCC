<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMKM RM828</title>
    <link rel="icon" href="{{ asset('image/loogu.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Freestyle+Script&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kollektif&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap">



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html {
            scroll-behavior: smooth;
        }
        .jim-nightshade {
            font-family: 'Jim Nightshade', cursive;
        }
        .font-Gila {
        font-family: 'Gilda Display', serif;
        }

        .font-Freestyle {
        font-family: 'Freestyle Script', cursive;
        }
        .font-Kollektif {
         font-family: 'Kollektif', sans-serif;
        }
        .nav-link {
            transition: transform 0.3s ease, border-bottom 0.3s ease;
        }
        .nav-link:hover {
            transform: translateY(-5px);
            border-bottom: 2px solid black;
        }
        .menu-card {
        width: 250px; 
        height: 320px; 
        }
        .map-container {
        border-radius: 20px; 
        }
        hr {
        border-color: white;
        }
        .flex-container {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        padding-bottom: 1rem;  
        }

        .flex-container .flex {
        display: flex;
        flex-wrap: nowrap;
        }

        .flex-container::-webkit-scrollbar {
        display: none; 
        }

        .flex-container {
        -ms-overflow-style: none; 
        scrollbar-width: none;
        }

        .product-image {
        transition: transform 0.3s ease-in-out;
        }

        .product-image:hover {
        transform: scale(1.1);
        }
        .vertical-line {
    width: 2px; /* Lebar garis vertikal */
}
        
    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="Navbar bg-gray-100 fixed w-full z-10">
        <div class="absolute inset-0 bg-white"></div>
        <div class="relative flex items-center justify-between w-full px-4 sm:px-6 lg:px-8 py-1 border-b border-white"> <!-- Mengurangi padding py-3 -> py-1 -->
            <a href="#home" class="flex items-center">
                <img class="Logo w-20" src="{{ asset('image/Logo.png') }}" alt="Logo">
                <h1 class="text-logo text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-4xl font-bold font-Gila  text-black ml-1">RM828</h1> </a>
                <h1 class="text-logo text-9 xl sm:text-5xl md:text-6xl lg:text-10xl xl:text-20xl font-bold font-Freestyle text-black ml-1">from our kitchen to your heart</h1>

                <div class="flex items-center space-x-4 md:space-x-6 lg:space-x-10">
                    <a href="#home" class="nav-link relative font-Gila font-bold">HOME</a>
                    <a href="#aboutus" class="nav-link relative font-Gila font-bold">ABOUT US</a>
                    <a href="#menu" class="nav-link relative font-Gila font-bold">MENUS</a>
                    <a href="#contactus" class="nav-link relative font-Gila font-bold">CONTACT US</a>
                </div>
                
        </div>
    </div>

    <div id="home" style="z-index: 1;">
        <div class="relative bg-cover bg-center h-screen">
            <div class="relative h-screen overflow-hidden rounded-lg">
                @foreach ($headerImages as $index => $headerImage)
                    <div class="carousel-item {{ $index === 0 ? 'block' : 'hidden' }} duration-700 ease-in-out">
                        <img src="{{ $headerImage->image_url }}" class="absolute top-0 left-0 w-full h-full object-cover" alt="Header Image {{ $index + 1 }}">
                    </div>
                @endforeach
            </div>
            <div class="absolute bottom-0 left-0 right-0 flex justify-center mb-4">
                @foreach ($headerImages as $index => $headerImage)
                    <button class="carousel-indicator w-3 h-3 mx-1 bg-white rounded-full" data-carousel-slide-to="{{ $index }}"></button>
                @endforeach
            </div>
        </div>
    </div>

    <div id="aboutus" class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('image/RM 828 (1).jpg') }}');">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 container mx-auto p-8 bg-opacity-90">
            <img src="{{ asset('image/about.png') }}" alt="Menus" class="mx-auto mb-1 w-84">  
            <div class="flex items-center">
                <img class="w-1/3 border-5 border-black rounded-lg shadow-lg mt-20" src="{{ asset('image/resto.jpg') }}" alt="Foto Restoran">
                <div class="mt-20 border-5 border-black rounded-lg shadow-lg p-8 ml-8 bg-white">
                    <h2 class="text-4xl font-bold inknut-antiqua text-center text-black mb-6">OUR STORY</h2>
                    <p class="text-lg leading-relaxed justify inknut-antiqua">
                        RM 828 telah berdiri sejak tahun 2019. Dengan konsep masakan ala rumahan, kami memiliki lebih dari 100 varian menu dengan cita rasa nusantara.
                        Untuk mempertahankan kualitas dan cita rasa, RM 828 selalu menggunakan bahan baku pilihan dan menyajikan makanan fresh setiap kali anda memesan.
                        Dengan pelayanan yang cepat dan harga yang terjangkau, 
                        RM 828 hadir sebagai solusi praktis untuk melayani kebutuhan anda.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="menu" class="relative min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('image/RM 828 (1).jpg') }}');">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6 lg:py-8">
            <img src="{{ asset('image/bestseller.png') }}" alt="Menus" class="mx-auto mb-8">  
            <div class="flex-container overflow-x-auto">
                <div class="flex space-x-2">
                    @foreach ($products as $product)
                    <div class="min-w-[200px] max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-4 rounded-t-lg w-full h-auto product-image" src="{{ $product->product_images->first()->image_url }}" alt="product image" />
                        </a>
                        <div class="px-2 pb-2">
                            <a href="#">
                                <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white text-center">{{ $product->name }}</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="contactus" class="relative h-auto bg-cover bg-center flex flex-col items-center justify-center" style="background-color: #E88640;">
        <div class="container mx-auto p-8 bg-opacity-90 text-black flex justify-between items-start rounded-t-xl space-x-4">
            <!-- Map Container -->
            <div class="map-container w-104 h-96 pr-10 mt-1 rounded-lg overflow-hidden">
                <iframe class="w-full h-full aspect-square" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.058617309767!2d104.0344113!3d1.1181238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d9be68b31b7%3A0xedab21d2f023f07e!2sRM%20828!5e0!3m2!1sid!2sid!4v1714922040723!5m2!1sid!2sid" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
    
            <!-- Contact Info -->
            <div class="contact-info flex flex-col space-y-5 mt-12">
                <div class="flex items-center">
                    <img src="{{ asset('image/Lokasi.png') }}" alt="Lokasi" class="w-6 h-6 mr-4">
                    <p class="text-lg inknut-antiqua text-white max-w-xs">Blk. A, Perumahan Jl. Taman Marchelia No.28, Taman Baloi, Batam Centre, Kota Batam, Kepulauan Riau 29444</p>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('image/Telepon.png') }}" alt="Telepon" class="w-6 h-6 mr-4">
                    <p class="text-lg inknut-antiqua text-white">+6281372534800</p>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('image/Jam.png') }}" alt="Jam Operasi" class="w-6 h-6 mr-4">
                    <p class="text-lg inknut-antiqua text-white">08.00–00.00</p>
                </div>
            </div>
    
            <!-- Find Us On Section -->
            <div class="flex flex-col items-center space-y-5 mt-12">
                <p class="text-2xl text-white mt-8 inknut-antiqua text-white">Find us on:</p>
                <div class="flex items-center justify-center ">
                    <a href="https://gofood.co.id/id/batam/restaurant/rm-828-perum-taman-marchelia-f2736ac5-c4b0-4bef-9e6c-0b7818d367a5" target="_blank">
                        <img class="gofood w-16" src="{{ asset('image/gofood.png') }}" alt="GoFood">
                    </a>
                    <a href="https://food.grab.com/id/id/restaurant/rm-828-taman-baloi-delivery/6-CZDDJCJVG2B2DE?" target="_blank">
                        <img class="grabfood w-16" src="{{ asset('image/Grabfood.png') }}" alt="GrabFood">
                    </a>
                    <a href="https://wa.me/6282362049152" target="_blank">
                        <img class="whatsapp w-16" src="{{ asset('image/Whatsapp.png') }}" alt="Whatsapp">
                    </a>
                    <a href="https://www.instagram.com/rm828_id?igsh=MWcxM3JqNmdkcTZiZQ==" target="_blank">
                        <img class="instagram w-16" src="{{ asset('image/instagram.png') }}" alt="Instagram">
                    </a>
                    
                </div>
            </div>
        </div>
    
        <!-- Footer -->
        <footer class="absolute bottom-0 text-center py-2 bg-gray-700 text-white w-full">
            <p class="m-0">&copy; 2024 RM 828. All rights reserved.</p>
        </footer>
    </div>
    
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let currentIndex = 0;
            const slides = document.querySelectorAll('.carousel-item');
            const indicators = document.querySelectorAll('.carousel-indicator');
            const totalSlides = slides.length;
            const intervalTime = 8000; 

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('block', i === index);
                    slide.classList.toggle('hidden', i !== index);
                });
                indicators.forEach((indicator, i) => {
                    indicator.classList.toggle('bg-white', i !== index);
                    indicator.classList.toggle('bg-gray-700', i === index);
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                showSlide(currentIndex);
            }

            let slideInterval = setInterval(nextSlide, intervalTime);

            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    clearInterval(slideInterval);
                    currentIndex = index;
                    showSlide(currentIndex);
                    slideInterval = setInterval(nextSlide, intervalTime);
                });
            });
        });
    </script>
</body>
</html>
