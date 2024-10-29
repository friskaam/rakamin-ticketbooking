<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    <link rel="icon" href="../public/cinema-logo.png" type="image/png">
    <link rel="stylesheet" href="../styles/input.css">
    <link rel="stylesheet" href="../styles/custom.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-900 text-white font-sans">

    <!-- header -->
    <header>
        <!-- navbar -->
        <nav class="absolute top-0 left-0 right-0 z-10 p-6 flex justify-between items-center text-white">
            <a href="index.html" class="text-xl font-bold">Cinema</a>
            <div class="md:hidden">
                <button id="hamburger" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7">
                        </path>
                    </svg>
                </button>
            </div>
            <ul id="menu" class="hidden md:flex md:space-x-6">
                <li><a href="#" class="hover:text-red-500">Home</a></li>
                <li><a href="#" class="hover:text-red-500">Movies</a></li>
                <li><a href="#" class="hover:text-red-500">News</a></li>
                <li><a href="#" class="hover:text-red-500">Contacts</a></li>
                <li><a href="#" class="hover:text-red-500">Log In</a></li>
            </ul>
        </nav>

        <!-- mobile menu -->
        <div id="mobile-menu"
            class="fixed inset-0 bg-black bg-opacity-80 flex-col items-center justify-center hidden z-50 transition-opacity duration-300 opacity-0 pointer-events-none">
            <button id="close-menu" class="absolute top-4 right-4 fill-white text-2xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
            <ul class="flex flex-col space-y-2">
                <li><a href="#" class="hover:text-red-500 text-white">Home</a></li>
                <li><a href="#" class="hover:text-red-500 text-white">Movies</a></li>
                <li><a href="#" class="hover:text-red-500 text-white">News</a></li>
                <li><a href="#" class="hover:text-red-500 text-white">Contacts</a></li>
                <li><a href="#" class="hover:text-red-500 text-white">Log In</a></li>
            </ul>
        </div>
    </header>

    <main class="relative bg-cover bg-center h-screen"
        style="background-image: url('./public/interstellar-banner.jpg');">

        <!-- overlay -->
        <div class="absolute inset-0 bg-black opacity-70"></div>

        <div class="relative mx-auto flex flex-col md:flex-row items-center justify-center h-full px-6">
            <!-- movie info -->
            <div class="z-10 text-center md:text-left mb-6 md:mb-0 md:mr-10">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">Interstellar</h1>
                <p class="text-lg text-gray-300 mb-4">2014</p>
                <p class="text-gray-300 mb-6 max-w-lg">When Earth becomes uninhabitable in the future, a farmer and
                    ex-NASA pilot, Joseph Cooper, is tasked to pilot a
                    spacecraft, along with a team of researchers, to find a new planet for humans.</p>
                <div class="flex flex-col md:flex-row md:space-x-4">
                    <a href="./src/booking.php"
                        class="bg-red-600 px-6 py-3 rounded-md font-semibold hover:bg-red-700 transition">Book
                        ticket</a>
                    <button id="trailer-button"
                        class="mt-4 md:mt-0 hover:outline-red-600 px-6 py-3 rounded-md font-semibold">Watch
                        Trailer</button>
                </div>
            </div>

            <!-- poster img -->
            <div class="hidden md:block">
                <img src="./public/interstellar-poster.jpg" alt="Movie Poster" class="rounded-lg shadow-lg h-96">
            </div>

            <!-- mobile poster img -->
            <div class="md:hidden mt-4">
                <img src="./public/interstellar-poster.jpg" alt="Movie Poster" class="rounded-lg shadow-lg h-72">
            </div>
        </div>
    </main>

    <!-- trailer modal -->
    <div id="trailer-modal" class="fixed inset-0 z-50 hidden flex bg-black bg-opacity-75 items-center justify-center">
        <div class="bg-gray-800 rounded-lg overflow-hidden">
            <div class="relative pb-9/16">
                <iframe id="trailer-video" width="560" height="315"
                    src="https://www.youtube.com/embed/2LqzF5WauAw?si=6U-08KHUlH3NTKbZ" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <button id="close-modal" class="absolute top-2 right-2 text-white hover:text-red-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <script src="./src/script.js"></script>
</body>

</html>