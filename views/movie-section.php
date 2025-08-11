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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/CineLuxe/design/movie-section2.css">
    <title>CineLuxe</title>
</head>
<body>
<nav class="bg-white border-gray-200 dark:bg-gray-900 relative z-50" x-data="{ open: false }" @click.away="open = false">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="/CineLuxe/views/movie.php" class="flex items-center space-x-6 rtl:space-x-reverse">
            <img src="../Cineluxe-imgs/CineLuxe-logo-removebg-preview.png" class="h-20" alt="Cineluxe logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CineLuxe</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="/CineLuxe/views/movie.php" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Movies</a>
            <a href="/CineLuxe/views/luxecard.php" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Luxecard</a>
            <a href="/CineLuxe/views/profile.php" class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Profile</a>
        </div>
    </div>
</nav>

<header>
<section class="movie-section" id="bad-guys-2" data-movie="bad-guys-2">
    <div class="container mx-auto px-4 py-8 max-w-4xl bg-white text-gray-800">
        <div class="flex flex-col md:flex-row gap-8 mb-8">
            <div class="w-full md:w-1/3 aspect-[2/3]">
                <img class="w-full h-full object-cover rounded-lg shadow-lg" 
                     src="../Cineluxe-imgs/the-bad-guys-2.avif" 
                     alt="The Bad Guys 2 movie poster">
            </div>
                
            <div class="w-full md:w-2/3">
                <h1 class="text-3xl font-bold mb-2">The Bad Guys 2</h1>
                <p class="text-lg font-semibold mb-4">
                    <span class="bg-gray-200 px-2 py-1 rounded">A - All Audiences</span> | 
                    The Bad Guys 2 | 104 min | 2025 
                </p>
                
                <p class="mb-6">After turning over a new leaf, the Bad Guys are enjoying their reputation as reformed citizens — until a new wave of crimes hits the city, and all the clues point to them. With their names on the line and public trust crumbling, Mr. Wolf and the crew are forced back into action.

To uncover the truth, they'll have to outsmart a mysterious new criminal mastermind, dodge the law, and test their friendship like never before. Packed with clever twists, wild chases, and the same hilarious charm, The Bad Guys 2 is a fast-paced adventure about redemption, teamwork, and what it really means to be good.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div>
                <h2 class="text-xl font-bold mb-2">Release Date:</h2>
                <p>2025-07-24</p>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-2">Original Title:</h2>
                <p>The Bad Guys 2</p>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-2">Genre:</h2>
                <p>Animation, Comedy, Action</p>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-2">Cast (voices):</h2>
                <p>Sam Rockwell, Marc Maron, Awkwafina, Craig Robinson, Anthony Ramos</p>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-2">Director:</h2>
                <p>Pierre Perifel</p>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-2">Production:</h2>
                <p>DreamWorks Animation</p>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-2">Age Rating:</h2>
                <p>A. Suitable for all audiences</p>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-2">Now Showing In:</h2>
                <p>201 [DUB] VIP</p>
            </div>
        </div>

        <div class="mt-12 space-y-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select Cinema</h3>
                <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">-- Select cinema --</option>
                    <option value="cine1">Cineluxe MetroCentro</option>
                    <option value="cine2">Cineluxe Galerias</option>
                    <option value="cine3">Cineluxe Multiplaza</option>
                </select>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select viewing format</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="DUB" class="h-5 w-5 text-blue-600" checked>
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">DUB</span>
                            <span class="block text-sm text-gray-600">Dubbed into Spanish</span>
                        </span>
                        <span class="font-bold">$120</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="2D" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">2D</span>
                            <span class="block text-sm text-gray-600">Original Version 2D</span>
                        </span>
                        <span class="font-bold">$150</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="SUB" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">Subtitled</span>
                            <span class="block text-sm text-gray-600">Subtitled version</span>
                        </span>
                        <span class="font-bold">$140</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="VIP" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">VIP</span>
                            <span class="block text-sm text-gray-600">Premium seats + service</span>
                        </span>
                        <span class="font-bold">$250</span>
                    </label>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select date and time</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                        <input type="date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Time</label>
                        <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Select --</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="22:30">10:30 PM</option>
                        </select>
                    </div>
                </div>
            </div>

<div class="bg-gray-50 p-6 rounded-lg shadow-sm">
    <h3 class="text-xl font-bold mb-4 text-gray-800">Select snacks</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 1.png" 
                    alt="Combo 1" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 1</h4>
                <p class="text-sm text-gray-600 mb-2">Medium popcorn + large drink and candy</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$180</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 2.png" 
                    alt="Combo 2" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 2</h4>
                <p class="text-sm text-gray-600 mb-2">Large popcorn + 2 medium drinks + candy</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$250</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 3.png" 
                    alt="Combo 3" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 3</h4>
                <p class="text-sm text-gray-600 mb-2">Extra large popcorn + 4 drinks + hot dogs</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$350</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="text-center">
                <button id="resumeBtn" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-lg transition-colors">
                    View Summary
                </button>
            </div>
        </div>
    </div>

    <div id="resumeModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg max-w-md w-full mx-4 p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold">Order Summary</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="space-y-4">
                <div>
                    <h4 class="font-bold">Movie:</h4>
                    <p>The Bad Guys 2</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Cinema:</h4>
                    <p id="modalCine">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Format:</h4>
                    <p id="modalFormat">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Date and Time:</h4>
                    <p id="modalDate">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Snacks:</h4>
                    <p id="modalFood">--</p>
                </div>
            </div>
            
            <div class="mt-6 pt-4 border-t">
                <button id="getTicketBtn" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-colors">
                    Get Ticket
                </button>
            </div>
        </div>
    </div>
</section>
      




<section class="movie-section" id="fantastic-four" data-movie="fantastic-four">
    <div class="container mx-auto px-4 py-8 max-w-4xl bg-white text-gray-800">
        <div class="flex flex-col md:flex-row gap-8 mb-8">
            <div class="w-full md:w-1/3 aspect-[2/3]">
                <img class="w-full h-full object-cover rounded-lg shadow-lg" 
                     src="../Cineluxe-imgs/the-fantastic-four.jpg" 
                     alt="The Bad Guys 2 movie poster">
            </div>
                
<div class="w-full md:w-2/3">
    <h1 class="text-3xl font-bold mb-2">The Fantastic Four: First Steps</h1>
    <p class="text-lg font-semibold mb-4">
        <span class="bg-gray-200 px-2 py-1 rounded">PG-13</span> | 
        The Fantastic Four: First Steps | 114 min | 2025
    </p>
    
    <p class="mb-6">
        In a retro-futuristic 1960s-inspired world, the superhero family — Reed Richards (Mister Fantastic), Sue Storm (Invisible Woman), Johnny Storm (Human Torch), and Ben Grimm (The Thing) — face their greatest challenge yet. 
        When the cosmic entity Galactus threatens Earth with annihilation, aided by his herald the Silver Surfer, the Fantastic Four must overcome personal struggles and unite as never before. 
        Packed with epic battles, heartfelt moments, and Marvel’s signature blend of action and humor, this origin adventure redefines what it means to be a family of heroes.
    </p>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
    <div>
        <h2 class="text-xl font-bold mb-2">Release Date:</h2>
        <p>2025-07-25</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Original Title:</h2>
        <p>The Fantastic Four: First Steps</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Genre:</h2>
        <p>Superhero, Action, Adventure, Sci-Fi, Fantasy</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Cast:</h2>
        <p>Pedro Pascal, Vanessa Kirby, Joseph Quinn, Ebon Moss-Bachrach, Julia Garner, Ralph Ineson</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Director:</h2>
        <p>Matt Shakman</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Production:</h2>
        <p>Marvel Studios</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Age Rating:</h2>
        <p>PG-13. Parents Strongly Cautioned</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Now Showing In:</h2>
        <p>201 [DUB] VIP</p>
    </div>
</div>


        <div class="mt-12 space-y-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select Cinema</h3>
                <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">-- Select cinema --</option>
                    <option value="cine1">Cineluxe MetroCentro</option>
                    <option value="cine2">Cineluxe Galerias</option>
                    <option value="cine3">Cineluxe Multiplaza</option>
                </select>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select viewing format</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="DUB" class="h-5 w-5 text-blue-600" checked>
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">DUB</span>
                            <span class="block text-sm text-gray-600">Dubbed into Spanish</span>
                        </span>
                        <span class="font-bold">$120</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="2D" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">2D</span>
                            <span class="block text-sm text-gray-600">Original Version 2D</span>
                        </span>
                        <span class="font-bold">$150</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="SUB" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">Subtitled</span>
                            <span class="block text-sm text-gray-600">Subtitled version</span>
                        </span>
                        <span class="font-bold">$140</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="VIP" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">VIP</span>
                            <span class="block text-sm text-gray-600">Premium seats + service</span>
                        </span>
                        <span class="font-bold">$250</span>
                    </label>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select date and time</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                        <input type="date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Time</label>
                        <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Select --</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="22:30">10:30 PM</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
    <h3 class="text-xl font-bold mb-4 text-gray-800">Select snacks</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 1.png" 
                    alt="Combo 1" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 1</h4>
                <p class="text-sm text-gray-600 mb-2">Medium popcorn + large drink and candy</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$180</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 2.png" 
                    alt="Combo 2" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 2</h4>
                <p class="text-sm text-gray-600 mb-2">Large popcorn + 2 medium drinks + candy</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$250</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 3.png" 
                    alt="Combo 3" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 3</h4>
                <p class="text-sm text-gray-600 mb-2">Extra large popcorn + 4 drinks + hot dogs</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$350</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="text-center">
                <button id="resumeBtn" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-lg transition-colors">
                    View Summary
                </button>
            </div>
        </div>
    </div>

    <div id="resumeModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg max-w-md w-full mx-4 p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold">Order Summary</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="space-y-4">
                <div>
                    <h4 class="font-bold">Movie:</h4>
                    <p>The Fantastic Four</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Cinema:</h4>
                    <p id="modalCine">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Format:</h4>
                    <p id="modalFormat">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Date and Time:</h4>
                    <p id="modalDate">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Snacks:</h4>
                    <p id="modalFood">--</p>
                </div>
            </div>
            
            <div class="mt-6 pt-4 border-t">
                <button id="getTicketBtn" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-colors">
                    Get Ticket
                </button>
            </div>
        </div>
    </div>
</section>





<section class="movie-section" id="superman" data-movie="superman">
    <div class="container mx-auto px-4 py-8 max-w-4xl bg-white text-gray-800">
        <div class="flex flex-col md:flex-row gap-8 mb-8">
            <div class="w-full md:w-1/3 aspect-[2/3]">
                <img class="w-full h-full object-cover rounded-lg shadow-lg" 
                     src="../Cineluxe-imgs/superman 2025.jpg" 
                     alt="The Bad Guys 2 movie poster">
            </div>
                
<div class="w-full md:w-2/3">
    <h1 class="text-3xl font-bold mb-2">Superman</h1>
    <p class="text-lg font-semibold mb-4">
        <span class="bg-gray-200 px-2 py-1 rounded">PG-13</span> | 
        Superman | 129 min | 2025
    </p>
    
    <p class="mb-6">
        In Metropolis, Superman—already an established journalist—navigates his dual identity as a Kryptonian and a human. Confronted with threats both abroad and at home, his actions fall under scrutiny, creating the perfect opportunity for tech mogul Lex Luthor to undermine him. With the support of Lois Lane and his loyal canine companion Krypto, Superman must stand for truth and justice while defining his place in a complex world. Directed by James Gunn, this thrilling reboot brings energy, humor, and heart to the iconic hero’s journey.
    </p>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
    <div>
        <h2 class="text-xl font-bold mb-2">Release Date:</h2>
        <p>2025-07-11</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Original Title:</h2>
        <p>Superman</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Genre:</h2>
        <p>Superhero, Action, Adventure, Sci-Fi</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Cast:</h2>
        <p>David Corenswet, Rachel Brosnahan, Nicholas Hoult, Nathan Fillion, Isabela Merced, Edi Gathegi, Anthony Carrigan</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Director:</h2>
        <p>James Gunn</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Production:</h2>
        <p>DC Studios / Warner Bros. Pictures</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Age Rating:</h2>
        <p>PG-13. Parents Strongly Cautioned</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Now Showing In:</h2>
        <p>201 [DUB] VIP</p>
    </div>
</div>



        <div class="mt-12 space-y-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select Cinema</h3>
                <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">-- Select cinema --</option>
                    <option value="cine1">Cineluxe MetroCentro</option>
                    <option value="cine2">Cineluxe Galerias</option>
                    <option value="cine3">Cineluxe Multiplaza</option>
                </select>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select viewing format</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="DUB" class="h-5 w-5 text-blue-600" checked>
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">DUB</span>
                            <span class="block text-sm text-gray-600">Dubbed into Spanish</span>
                        </span>
                        <span class="font-bold">$120</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="2D" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">2D</span>
                            <span class="block text-sm text-gray-600">Original Version 2D</span>
                        </span>
                        <span class="font-bold">$150</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="SUB" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">Subtitled</span>
                            <span class="block text-sm text-gray-600">Subtitled version</span>
                        </span>
                        <span class="font-bold">$140</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="VIP" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">VIP</span>
                            <span class="block text-sm text-gray-600">Premium seats + service</span>
                        </span>
                        <span class="font-bold">$250</span>
                    </label>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select date and time</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                        <input type="date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Time</label>
                        <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Select --</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="22:30">10:30 PM</option>
                        </select>
                    </div>
                </div>
            </div>

           <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
    <h3 class="text-xl font-bold mb-4 text-gray-800">Select snacks</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 1.png" 
                    alt="Combo 1" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 1</h4>
                <p class="text-sm text-gray-600 mb-2">Medium popcorn + large drink and candy</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$180</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 2.png" 
                    alt="Combo 2" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 2</h4>
                <p class="text-sm text-gray-600 mb-2">Large popcorn + 2 medium drinks + candy</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$250</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 3.png" 
                    alt="Combo 3" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 3</h4>
                <p class="text-sm text-gray-600 mb-2">Extra large popcorn + 4 drinks + hot dogs</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$350</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="text-center">
                <button id="resumeBtn" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-lg transition-colors">
                    View Summary
                </button>
            </div>
        </div>
    </div>

    <div id="resumeModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg max-w-md w-full mx-4 p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold">Order Summary</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="space-y-4">
                <div>
                    <h4 class="font-bold">Movie:</h4>
                    <p>Superman Look Up</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Cinema:</h4>
                    <p id="modalCine">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Format:</h4>
                    <p id="modalFormat">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Date and Time:</h4>
                    <p id="modalDate">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Snacks:</h4>
                    <p id="modalFood">--</p>
                </div>
            </div>
            
            <div class="mt-6 pt-4 border-t">
                <button id="getTicketBtn" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-colors">
                    Get Ticket
                </button>
            </div>
        </div>
    </div>
</section>






<section class="movie-section" id="f1" data-movie="f1">
    <div class="container mx-auto px-4 py-8 max-w-4xl bg-white text-gray-800">
        <div class="flex flex-col md:flex-row gap-8 mb-8">
            <div class="w-full md:w-1/3 aspect-[2/3]">
                <img class="w-full h-full object-cover rounded-lg shadow-lg" 
                     src="../Cineluxe-imgs/f1-themovie.jpg" 
                     alt="The Bad Guys 2 movie poster">
            </div>
                
           <div class="w-full md:w-2/3">
    <h1 class="text-3xl font-bold mb-2">F1: The Movie</h1>
    <p class="text-lg font-semibold mb-4">
        <span class="bg-gray-200 px-2 py-1 rounded">PG-13</span> | 
        F1: The Movie | 155 min | 2025
    </p>
    
    <p class="mb-6">
        Racing legend Sonny Hayes (Brad Pitt) was once Formula 1’s brightest phenom—until a career-ending crash forced his retirement. Thirty years later, his former teammate Ruben Cervantes (Javier Bardem), now owner of the struggling APXGP team, convinces him to make a comeback. Paired with rising star rookie Joshua Pearce (Damson Idris), Hayes must overcome his past and the fierce rivalry within the team to find redemption on the world’s fastest circuits.
    </p>
</div>

</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
    <div>
        <h2 class="text-xl font-bold mb-2">Release Date:</h2>
        <p>2025-06-27</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Original Title:</h2>
        <p>F1 (marketed as F1: The Movie)</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Genre:</h2>
        <p>Sports Drama, Action</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Cast:</h2>
        <p>Brad Pitt, Damson Idris, Javier Bardem, Kerry Condon, Tobias Menzies</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Director:</h2>
        <p>Joseph Kosinski</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Production:</h2>
        <p>Apple Studios, Jerry Bruckheimer Films, Plan B Entertainment, Monolith Pictures, Warner Bros. Pictures</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Age Rating:</h2>
        <p>PG-13</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Now Showing In:</h2>
        <p>201 [DUB] VIP</p>
    </div>
</div>

        <div class="mt-12 space-y-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select Cinema</h3>
                <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">-- Select cinema --</option>
                    <option value="cine1">Cineluxe MetroCentro</option>
                    <option value="cine2">Cineluxe Galerias</option>
                    <option value="cine3">Cineluxe Multiplaza</option>
                </select>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select viewing format</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="DUB" class="h-5 w-5 text-blue-600" checked>
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">DUB</span>
                            <span class="block text-sm text-gray-600">Dubbed into Spanish</span>
                        </span>
                        <span class="font-bold">$120</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="2D" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">2D</span>
                            <span class="block text-sm text-gray-600">Original Version 2D</span>
                        </span>
                        <span class="font-bold">$150</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="SUB" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">Subtitled</span>
                            <span class="block text-sm text-gray-600">Subtitled version</span>
                        </span>
                        <span class="font-bold">$140</span>
                    </label>
                    
                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50">
                        <input type="radio" name="viewing_option" value="VIP" class="h-5 w-5 text-blue-600">
                        <span class="ml-3 flex-grow">
                            <span class="block font-medium">VIP</span>
                            <span class="block text-sm text-gray-600">Premium seats + service</span>
                        </span>
                        <span class="font-bold">$250</span>
                    </label>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Select date and time</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                        <input type="date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Time</label>
                        <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Select --</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="22:30">10:30 PM</option>
                        </select>
                    </div>
                </div>
            </div>

<div class="bg-gray-50 p-6 rounded-lg shadow-sm">
    <h3 class="text-xl font-bold mb-4 text-gray-800">Select snacks</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 1.png" 
                    alt="Combo 1" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 1</h4>
                <p class="text-sm text-gray-600 mb-2">Medium popcorn + large drink and candy</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$180</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 2.png" 
                    alt="Combo 2" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 2</h4>
                <p class="text-sm text-gray-600 mb-2">Large popcorn + 2 medium drinks + candy</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$250</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <div class="h-40 bg-gray-200">
                <img 
                    src="../Cineluxe-imgs/combo 3.png" 
                    alt="Combo 3" 
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold">Combo 3</h4>
                <p class="text-sm text-gray-600 mb-2">Extra large popcorn + 4 drinks + hot dogs</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold">$350</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="text-center">
                <button id="resumeBtn" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-lg transition-colors">
                    View Summary
                </button>
            </div>
        </div>
    </div>

    <div id="resumeModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg max-w-md w-full mx-4 p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold">Order Summary</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="space-y-4">
                <div>
                    <h4 class="font-bold">Movie:</h4>
                    <p>Formula 1 The Movie</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Cinema:</h4>
                    <p id="modalCine">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Format:</h4>
                    <p id="modalFormat">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Date and Time:</h4>
                    <p id="modalDate">--</p>
                </div>
                
                <div>
                    <h4 class="font-bold">Snacks:</h4>
                    <p id="modalFood">--</p>
                </div>
            </div>
            
            <div class="mt-6 pt-4 border-t">
                <button id="getTicketBtn" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-colors">
                    Get Ticket
                </button>
            </div>
        </div>
    </div>
</section>
</header>

<footer class="bg-black">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-12 lg:py-16"> 
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="/CineLuxe/views/movie.php" class="flex items-center">
                  <img src="../Cineluxe-imgs/CineLuxe-Negro-removebg-preview.png" class="h-20 me-3" alt="CineLuxe Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">CineLuxe</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-white uppercase">Quick links</h2>
                  <ul class="text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="/CineLuxe/views/movie.php" class="hover:underline hover:text-white">Movies</a>
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
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="/CineLuxe/script/ticket-movie2.js"></script>
<script src="/CineLuxe/script/movies-section.js"></script>
<script>
(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="FRY_8A6L2tfZ2EbtiKL5T";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
</script>
</body>
</html>