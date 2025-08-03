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
    <link rel="stylesheet" href="../CineLuxe/design/login.css">
    <title>CineLuxe</title>
</head>
<body>

<section class="flex flex-col md:flex-row min-h-screen">
  <div class="bg-black hidden lg:block w-full md:w-1/2 xl:w-2/3">
    <img src="../Cineluxe-imgs/register.webp" alt="" class="w-full h-full object-cover min-h-[300px]">
  </div>

  <div class="bg-white w-full md:w-1/2 xl:w-1/3 flex items-center justify-center p-6 lg:px-16 xl:px-12 py-12">
    
    <div class="w-full max-w-md">

      <h1 class="text-xl font-bold">CineLuxe</h1>

      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-6">Create your account</h1>

      <form class="mt-6" action="#" method="POST">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-gray-700">First Name</label>
            <input type="text" name="" id="" placeholder="Enter First Name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-black focus:bg-white focus:outline-none" autofocus autocomplete required>
          </div>
          
          <div>
            <label class="block text-gray-700">Last Name</label>
            <input type="text" name="" id="" placeholder="Enter Last Name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-black focus:bg-white focus:outline-none" required>
          </div>
        </div>

        <div class="mt-4">
          <label class="block text-gray-700">Email Address</label>
          <input type="email" name="" id="" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-black focus:bg-white focus:outline-none" required>
        </div>

        <div class="mt-4">
          <label class="block text-gray-700">Password</label>
          <input type="password" name="" id="" placeholder="Enter Password (min 6 characters)" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-black focus:bg-white focus:outline-none" required>
        </div>

        <div class="mt-4">
          <label class="block text-gray-700">Confirm Password</label>
          <input type="password" name="" id="" placeholder="Confirm Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-black focus:bg-white focus:outline-none" required>
        </div>

        <div class="mt-4">
          <label class="flex items-start">
            <input type="checkbox" name="remember" class="form-checkbox h-5 w-5 text-gray-700 mt-1">
            <span class="ml-2 text-gray-700">I agree to the <a href="#" class="text-black hover:underline">Terms and Conditions</a></span>
          </label>
        </div>

        <button type="submit" class="w-full block bg-black hover:bg-gray-800 focus:bg-gray-800 text-white font-semibold rounded-lg
              px-4 py-3 mt-6 transition duration-200">Register</button>
      </form>

      <hr class="my-6 border-gray-300 w-full">

      <button type="button" class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300 transition duration-200">
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48">
                <defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs>
                <clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath>
                <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/>
                <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/>
                <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/>
                <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/>
              </svg>
              <span class="ml-4">Register with Google</span>
            </div>
          </button>

      <p class="mt-8 text-center">Already have an account? <a href="../views/login.php" class="text-black hover:text-gray-800 font-semibold">Log in</a></p>

      <p class="text-sm text-gray-500 mt-12 text-center">&copy; 2025 CineLuxe - All Rights Reserved.</p>
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>