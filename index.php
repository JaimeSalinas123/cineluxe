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
    <link rel="stylesheet" href="design/index.css">
    <title>CineLuxe</title>
</head>
<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="index.php" class="flex items-center space-x-6 rtl:space-x-reverse">
            <img src="Cineluxe-imgs/CineLuxe-logo-removebg-preview.png" class="h-20" alt="Cineluxe logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CineLuxe</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="#" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Movies</a>
            <a href="#" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Junior Room</a>
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
                    <img src="Cineluxe-imgs/tiposmalos-carrusel.jpg" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Película 1">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="Cineluxe-imgs/4fantasticos-carrusel.jpg" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Película 2">
                </div>
            </div>
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            </button>
        </div>
    </section>

<section>
        <div class="cartel">
            <div class="cartel-section">
                <div class="text-cartel">
                    <h2>Already in cinema</h2>
                </div>

            <div class="cartel-card">
                <a href="URL_DESTINO" class="card-link" target="_blank">
                    <div class="card-text">
                        <h2>The bad guys 2: back in badness</h2>
                        <img src="Cineluxe-imgs/the-bad-guys-2.avif" alt="the bad guys">
                        <p>For all ages</p>
                        <p>120 minutes</p>
                    </div>
                </a>
            </div>

            <div class="cartel-card">
                <a href="URL_DESTINO" class="card-link" target="_blank">
                    <div class="card-text">
                        <h2>The fantastic four: the first step</h2>
                        <img src="Cineluxe-imgs/the-fantastic-four.jpg" alt="the bad guys">
                        <p>For all ages</p>
                        <p>115 minutes</p>
                    </div>
                </a>
            </div>

             <div class="cartel-card">
                <a href="URL_DESTINO" class="card-link" target="_blank">
                    <div class="card-text">
                        <h2>Superman (2025) <br>Look up</h2>
                        <img src="Cineluxe-imgs/superman 2025.jpg" alt="the bad guys">
                        <p>For all ages</p>
                        <p>130 minutes</p>
                    </div>
                </a>
            </div>

            <div class="cartel-card">
                <a href="URL_DESTINO" class="card-link" target="_blank">
                    <div class="card-text">
                        <h2>Formula 1 <br>The Movie</h2>
                        <img src="Cineluxe-imgs/f1-themovie.jpg" alt="the bad guys">
                        <p>For all ages</p>
                        <p>156 minutes</p>
                    </div>
                </a>
            </div>

            </div>
        </div>
    </section>

   <section>
    <div class="now-showing">
        <div class="now-showing-container">
            <div class="now-showing-header">
                <h2>Coming soon to cinema</h2>
            </div>

            <div class="movie-card">
                <div class="movie-content">
                    <h2>Exorcism: <br>The ritual</h2>
                    <img src="Cineluxe-imgs/Exorcismo El Ritual (2025).jpg" alt="Exorcismo El Ritual (2025)">
                    <p>Over 15 years old</p>
                    <p>98 minutes</p>
                </div>
            </div>

            <div class="movie-card">
                <div class="movie-content">
                    <h2>Dracula: <br>The love tale</h2>
                    <img src="Cineluxe-imgs/dracula 2025.jpg" alt="dracula the love tale">
                    <p>Over 15 years old</p>
                    <p>129 minutes</p>
                </div>
            </div>

            <div class="movie-card">
                <div class="movie-content">
                    <h2>The ugly <br>Stepsister</h2>
                    <img src="Cineluxe-imgs/theuglystepsister.jpg" alt="the ugly stepsister">
                    <p>For all ages</p>
                    <p>110 minutes</p>
                </div>
            </div>

            <div class="movie-card">
                <div class="movie-content">
                    <h2>Freakier Friday <br>Disney 2025</h2>
                    <img src="Cineluxe-imgs/freakier friday.jpg" alt="Freakier Friday">
                    <p>For all ages</p>
                    <p>90 minutes</p>
                </div>
            </div>
        </div>
    </div>
</section>  
</header>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>