<?php
session_start(); 
?>
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
    <title>CineLuxe - Login</title>
    <style>
        .error-message {
            background-color: #fef2f2;
            border-left: 4px solid #ef4444;
            color: #b91c1c;
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 0.375rem;
            display: flex;
            align-items: center;
            animation: fadeIn 0.3s ease-in-out;
        }
        .error-message svg {
            margin-right: 0.75rem;
            flex-shrink: 0;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-100">

<section class="flex flex-col md:flex-row h-screen items-center">
  <div class="bg-black hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="../Cineluxe-imgs/login.webp" alt="CineLuxe Background" class="w-full h-full object-cover">
  </div>

  <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12 flex items-center justify-center">
    <div class="w-full h-100">
      <h1 class="text-xl font-bold">CineLuxe</h1>
      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>

      <?php if (isset($_SESSION['login_error'])): ?>
        <div class="error-message">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span><?= htmlspecialchars($_SESSION['login_error']) ?></span>
        </div>
        <?php unset($_SESSION['login_error']); ?>
      <?php endif; ?>

      <form class="mt-6" action="/cineluxe/core/login-user.php" method="POST">
        <div>
          <label class="block text-gray-700">Email Address</label>
          <input type="email" name="email" value="<?= isset($_SESSION['old_email']) ? htmlspecialchars($_SESSION['old_email']) : '' ?>" 
                 class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-black focus:bg-white focus:outline-none" 
                 required autofocus>
        </div>

        <div class="mt-4">
          <label class="block text-gray-700">Password</label>
          <input type="password" name="password" 
                 class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-black focus:bg-white focus:outline-none" 
                 required>
        </div>

        <div class="text-right mt-2">
          <a href="#" class="text-sm font-semibold text-gray-700 hover:text-black focus:text-black">Forgot Password?</a>
        </div>

        <button type="submit" class="w-full block bg-black hover:bg-gray-800 focus:bg-gray-800 text-white font-semibold rounded-lg px-4 py-3 mt-6 transition duration-200">
          Log In
        </button>
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
          <span class="ml-4">Log in with Google</span>
        </div>
      </button>

      <p class="mt-8">Need an account? <a href="../views/register.php" class="text-black hover:text-gray-800 font-semibold">Create an account</a></p>

      <p class="text-sm text-gray-500 mt-12">&copy; 2025 CineLuxe - All Rights Reserved.</p>
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    <?php if (isset($_SESSION['toast_message'])): ?>
        const toast = document.createElement('div');
        toast.className = 'fixed top-4 right-4 z-50 p-4 rounded-md shadow-lg bg-green-500 text-white font-medium flex items-center animate-fade-in';
        toast.innerHTML = `
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <?= addslashes($_SESSION['toast_message']) ?>
        `;
        
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.classList.add('animate-fade-out');
            setTimeout(() => toast.remove(), 500);
        }, 5000);
        
        <?php unset($_SESSION['toast_message']); ?>
    <?php endif; ?>
    
    <?php if (isset($_SESSION['old_email'])): ?>
        <?php unset($_SESSION['old_email']); ?>
    <?php endif; ?>
});

const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeOut {
        from { opacity: 1; }
        to { opacity: 0; }
    }
    .animate-fade-in {
        animation: fadeIn 0.3s ease-out forwards;
    }
    .animate-fade-out {
        animation: fadeOut 0.5s ease-out forwards;
    }
`;
document.head.appendChild(style);
</script>
</body>
</html>