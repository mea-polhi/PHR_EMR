<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medical Landing Page</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <style>

        body {
            background-color: #111827;
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            background-color: #1F2937;
            border-bottom: 1px solid #364050;
            color: #E1D9D1;
            padding: 1rem;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Logo */
        .logo {
            width: 75px;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-left: 20px;
        }

        .logo img {
            width: 100%; /* Adjust the width as needed */
            height: auto;
            border-radius: 50%;
        }

        .content {
            text-align: center;
            padding: 2rem;
            color: #E1D9D1;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .cta-button {
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
            margin: 0 1rem;
            cursor: pointer;
        }

        .cta-button {
            background-color: #27ae60; /* Green button color */
            color: #E1D9D1; /* White text color */
        }

        .cta-button:hover {
            background-color: #218c53; /* Darker green on hover */
        }

    </style>

</head>
<body class="antialiased">
    <nav class="border-gray-200 dark:bg-gray-900" style="background-color: #19243a">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('dist/img/PCU_logo.png') }}" class="h-9" alt="PCU Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white" style="color: #E1D9D1">Patient Health Record</span>
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="{{ route('login') }}" class="text-md font-semibold hover:text-gray-700 hover:underline" style="color: #E1D9D1">Login</a>
            </div>
        </div>
    </nav>

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/enroll.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image5.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 6 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image6.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 7 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image7.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 8 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image8.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 9 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image9.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 10 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image10.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 11 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image11.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 12 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image12.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 13 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image13.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 14 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image14.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 15 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image15.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 16 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image16.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 17 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image17.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 18 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image18.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 19 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image19.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 20 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dist/img/image20.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 6" data-carousel-slide-to="5"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 7" data-carousel-slide-to="6"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 8" data-carousel-slide-to="7"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 9" data-carousel-slide-to="8"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 10" data-carousel-slide-to="9"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 11" data-carousel-slide-to="10"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 12" data-carousel-slide-to="11"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 13" data-carousel-slide-to="12"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 14" data-carousel-slide-to="13"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 15" data-carousel-slide-to="14"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 16" data-carousel-slide-to="15"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 17" data-carousel-slide-to="16"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 18" data-carousel-slide-to="17"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 19" data-carousel-slide-to="18"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 20" data-carousel-slide-to="19"></button>
        </div>
    </div>

    <div class="content">
        <h2>Welcome to our Medical Platform</h2>
        <p>Providing high-quality medical services to improve your health.</p>
        
        <div class="cta-buttons">
            <a href="{{ route('login') }}" class="cta-button">Get Started</a>
        </div>
        <div style="padding-top: 20px">
            <h1>Please be reminded that this system is just a prototype</h1>
            <p>and is not an official medical web application of PCU - Dasma </p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
