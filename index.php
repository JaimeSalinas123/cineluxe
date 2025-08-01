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
    <link rel="stylesheet" href="/CineLuxe/design/index2.css">
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
            <a href="index.php" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Movies</a>
            <a href="/CineLuxe/views/gaming-room.php" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Gaming Room</a>
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
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="Cineluxe-imgs/appscarrusel.png" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="app promocional">
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

<section>
    <div class="location">
        <div class="location-new">
            <div class="location-txt">
                <h2>Location</h2>
                <p>Choose your nearest destination</p>
            </div>
            <div class="destiny"> 
                <form class="w-full">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer">
                        <option selected>Choose a destination</option>
                        <option value="MC">MetroCentro</option>
                        <option value="GA">Galerias</option>
                        <option value="MU">Multiplaza</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="location-section">
    <div class="destination">
        <div class="destination-txt">
            <h2>METROCENTRO</h2>
        </div>
        
        <div class="maps-container">
            <div class="googlemaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.214879295973!2d-89.21235300740966!3d13.705431697021877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63318d9d3a541f%3A0xb4fd23f2dbb00fb5!2sCinemark%20%E2%80%A2%20Metrocentro%20San%20Salvador!5e0!3m2!1ses-419!2ssv!4v1754086297067!5m2!1ses-419!2ssv" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="button">
                    <a href="https://maps.app.goo.gl/q1yF5eJRPD8wz6mR9" target="_blank">GOOGLE MAPS</a>
                </div>
            </div>
            
            <div class="waze">
                <iframe src="https://embed.waze.com/iframe?zoom=16&lat=13.705236&lon=-89.212126&ct=livemap" allowfullscreen></iframe>
                <div class="button">
                    <a href="https://ul.waze.com/ul?venue_id=177471625.1774650715.4767292&overview=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank">WAZE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="location-section">
    <div class="destination">
        <div class="destination-txt">
            <h2>GALERIAS</h2>
        </div>
        
        <div class="maps-container">
            <div class="googlemaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.214879295973!2d-89.21235300740966!3d13.705431697021877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63318d9d3a541f%3A0xb4fd23f2dbb00fb5!2sCinemark%20%E2%80%A2%20Metrocentro%20San%20Salvador!5e0!3m2!1ses-419!2ssv!4v1754086297067!5m2!1ses-419!2ssv" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="button">
                    <a href="https://maps.app.goo.gl/q1yF5eJRPD8wz6mR9" target="_blank">GOOGLE MAPS</a>
                </div>
            </div>
            
            <div class="waze">
                <iframe src="https://embed.waze.com/iframe?zoom=16&lat=13.705236&lon=-89.212126&ct=livemap" allowfullscreen></iframe>
                <div class="button">
                    <a href="https://ul.waze.com/ul?venue_id=177471625.1774650715.4767292&overview=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank">WAZE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="location-section">
    <div class="destination">
        <div class="destination-txt">
            <h2>MULTIPLAZA</h2>
        </div>
        
        <div class="maps-container">
            <div class="googlemaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.214879295973!2d-89.21235300740966!3d13.705431697021877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63318d9d3a541f%3A0xb4fd23f2dbb00fb5!2sCinemark%20%E2%80%A2%20Metrocentro%20San%20Salvador!5e0!3m2!1ses-419!2ssv!4v1754086297067!5m2!1ses-419!2ssv" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="button">
                    <a href="https://maps.app.goo.gl/q1yF5eJRPD8wz6mR9" target="_blank">GOOGLE MAPS</a>
                </div>
            </div>
            
            <div class="waze">
                <iframe src="https://embed.waze.com/iframe?zoom=16&lat=13.705236&lon=-89.212126&ct=livemap" allowfullscreen></iframe>
                <div class="button">
                    <a href="https://ul.waze.com/ul?venue_id=177471625.1774650715.4767292&overview=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank">WAZE</a>
                </div>
            </div>
        </div>
    </div>
</section>
</header>

<footer class="bg-black">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-12 lg:py-16"> 
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="index.php" class="flex items-center">
                  <img src="Cineluxe-imgs/CineLuxe-Negro-removebg-preview.png" class="h-20 me-3" alt="CineLuxe Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">CineLuxe</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-white uppercase">Quick links</h2>
                  <ul class="text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="index.php" class="hover:underline hover:text-white">Movies</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline hover:text-white">Gaming Room</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-white uppercase">Quick links</h2>
                  <ul class="text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline hover:text-white">LuxeCard</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline hover:text-white">Login</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-white uppercase">Legal</h2>
                  <ul class="text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline hover:text-white">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline hover:text-white">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-700 sm:mx-auto lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-400 sm:text-center">© 2025 <a href="https://flowbite.com/" class="hover:underline hover:text-white">CineLuxe™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-400 hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
          </div>
      </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="/CineLuxe/script/location.js"></script>
</body>
</html>