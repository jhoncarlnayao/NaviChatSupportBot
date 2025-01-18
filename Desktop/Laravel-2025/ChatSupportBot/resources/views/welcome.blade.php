<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body class=" dark:bg-neutral-900">
    <div id="container" class="flex flex-row items-center justify-center min-h-screen gap-10 bg-gray-100 dark:bg-neutral-900">
        <!-- Logo Card -->
        <div id="logo-card" class="flex flex-col items-center text-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-42 mb-4">
            <h1 class=" font-normal text-lg text-gray-500 dark:text-neutral-400 " id="logo-card-text">
                Your smart assistant for easy travel bookings and lost & found support.
            </h1>
        </div>
    
        <!-- Login Card -->
        <div id="login-card">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl p-8 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-8 text-center">
                    Welcome! Sign In Below
                </h3>
    
                <form action="{{ route('login.submit') }}" method="post">
                    @csrf
                <div class="space-y-5">
                    <!-- Floating Email Input -->
                    <div class="relative">
                        <input type="email" name="email-input"  id="hs-floating-input-email-value"
                            class="peer p-4 block w-72 border-gray-200 rounded-lg text-sm placeholder-transparent focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600"
                            placeholder="you@email.com">
                            @error('email-input')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <label for="hs-floating-input-email-value"
                            class="absolute top-0 left-0 p-4 text-sm text-gray-500 dark:text-neutral-500 transition-all scale-100 origin-left peer-placeholder-shown:translate-y-2 peer-placeholder-shown:scale-100 peer-focus:-translate-y-1 peer-focus:scale-90">
                            Email
                        </label>
                    </div>
    
                    <!-- Floating Password Input -->
                    <div class="relative">
                        <input type="password" name="password-input"  id="hs-floating-input-password-value"
                            class="peer p-4 block w-72 border-gray-200 rounded-lg text-sm placeholder-transparent focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600"
                            placeholder="********">
                            @error('password-input')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <label for="hs-floating-input-password-value"
                            class="absolute top-0 left-0 p-4 text-sm text-gray-500 dark:text-neutral-500 transition-all scale-100 origin-left peer-placeholder-shown:translate-y-2 peer-placeholder-shown:scale-100 peer-focus:-translate-y-1 peer-focus:scale-90">
                            Password
                        </label>
                    </div>
                </div>
    
                <!-- Submit Button -->
                <button type="submit"
                    class="mt-6 py-3 px-4 inline-flex items-center justify-center w-full text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-800 dark:hover:bg-blue-900">
                    Login
                </button>
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>
