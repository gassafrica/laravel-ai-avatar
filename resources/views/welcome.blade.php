<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avatar Generator</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
        }
        .bg-dots-darker {
            background-image: url('path-to-your-background-image.jpg');
        }
        .bg-dots-lighter {
            background-image: url('path-to-your-background-image-light.jpg');
        }
        .selection-bg-red-500::selection {
            background-color: #ef4444; /* Tailwind CSS red-500 */
            color: #fff;
        }
    </style>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 selection-bg-red-500">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center selection-bg-red-500">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-800 dark:text-white mb-4">Welcome to Avatar Generator</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400">Create your unique avatar with the power of AI!</p>
            <div class="mt-8">
                <a href="#" class="px-6 py-3 bg-red-500 text-white rounded-md font-semibold hover:bg-red-600 transition duration-300 ease-in-out focus:outline-none focus:ring focus:border-red-300">Get Started</a>
            </div>
        </div>
    </div>
</body>
</html>
