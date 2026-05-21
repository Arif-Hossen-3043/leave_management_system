<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">

    <div class="bg-white p-10 rounded-lg shadow-md w-full max-w-md">

        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        <form method="POST" action="{{ route('login-user') }}">
            @csrf

            <!-- Email -->
            <input
                name="email"
                type="email"
                placeholder="Email"
                class="w-full px-4 py-3 mb-4 rounded-lg bg-gray-100 border focus:outline-none focus:border-indigo-500"
                required
            >

            <!-- Password -->
            <input
                name="password"
                type="password"
                placeholder="Password"
                class="w-full px-4 py-3 mb-4 rounded-lg bg-gray-100 border focus:outline-none focus:border-indigo-500"
                required
            >

            <!-- Error Message -->
            @if(session('error'))
                <p class="text-red-500 text-sm mb-3">{{ session('error') }}</p>
            @endif

            <!-- Submit -->
            <button
                type="submit"
                class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition">

                Login
            </button>
        </form>

        <p class="text-center text-sm mt-5">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-indigo-600 font-semibold">
                Register
            </a>
        </p>

    </div>

</div>

</body>
</html>