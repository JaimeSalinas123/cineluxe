<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/CineLuxe/design/gaming-room.css">
    <title>CineLuxe</title>
</head>
<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="index.php" class="flex items-center space-x-6 rtl:space-x-reverse">
            <img src="../Cineluxe-imgs/CineLuxe-logo-removebg-preview.png" class="h-20" alt="Cineluxe logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CineLuxe</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="../index.php" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Movies</a>
            <a href="#" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Gaming Room</a>
            <a href="#" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Luxecard</a>
            <a href="#" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Login</a>
        </div>
    </div>
</nav>

<header>
    <section>
        <div id="controls-carousel" class="relative w-full" data-carousel="slide">
            <div data-carousel-autoplay-interval="5000" class="hidden"></div>
            <div class="relative h-[40vh] min-h-[200px] max-h-[500px] overflow-hidden rounded-lg">
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="Cineluxe-imgs/tiposmalos-carrusel.jpg" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="GamingRoom promocion">
                </div>
            </div>
        </div>
    </section>

</header>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="/CineLuxe/script/location.js"></script>
</body>
</html>