<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortGen - Authentication</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-slate-800 rounded-2xl shadow-xl border border-slate-700 overflow-hidden">
        <!-- Header / Logo -->
        <div class="p-6 text-center border-b border-slate-700 bg-slate-800/50">
            <h1 class="text-3xl font-extrabold text-indigo-400 tracking-tight">PortGen</h1>
            <p class="text-sm text-slate-400 mt-1">Dynamic Online Portfolio Generator</p>
        </div>

        <!-- Navigation Tabs -->
        <div class="flex border-b border-slate-700 bg-slate-800/80">
            <button id="loginTabBtn" onclick="showTab('login')" class="w-1/2 py-3 text-center font-medium text-indigo-400 border-b-2 border-indigo-500 transition duration-150">
                Sign In
            </button>
            <button id="registerTabBtn" onclick="showTab('register')" class="w-1/2 py-3 text-center font-medium text-slate-400 hover:text-slate-200 transition duration-150">
                Sign Up
            </button>
        </div>

        <div class="p-6">
            <!-- Session Messages / Errors -->
            @if (session('status'))
                <div class="mb-4 p-3 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm rounded-lg">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-3 bg-rose-500/10 border border-rose-500/30 text-rose-400 text-sm rounded-lg">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- 1. SIGN IN FORM -->
            <form id="loginForm" method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-2 bg-slate-900 border border-slate-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-white placeholder-slate-500 outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-2 bg-slate-900 border border-slate-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-white outline-none transition">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center text-slate-400 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded bg-slate-900 border-slate-700 text-indigo-500 focus:ring-indigo-500 mr-2">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-lg shadow-lg shadow-indigo-600/30 transition duration-150">
                    Sign In
                </button>
            </form>

            <!-- 2. SIGN UP (REGISTER) FORM -->
            <form id="registerForm" method="POST" action="{{ route('register') }}" class="space-y-4 hidden">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                           class="w-full px-4 py-2 bg-slate-900 border border-slate-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-white placeholder-slate-500 outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="w-full px-4 py-2 bg-slate-900 border border-slate-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-white placeholder-slate-500 outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-2 bg-slate-900 border border-slate-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-white outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                           class="w-full px-4 py-2 bg-slate-900 border border-slate-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-white outline-none transition">
                </div>

                <button type="submit" class="w-full py-2.5 px-4 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold rounded-lg shadow-lg shadow-emerald-600/30 transition duration-150">
                    Create Account
                </button>
            </form>
        </div>
    </div>

    <script>
        function showTab(tab) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const loginBtn = document.getElementById('loginTabBtn');
            const registerBtn = document.getElementById('registerTabBtn');

            if (tab === 'login') {
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
                loginBtn.className = "w-1/2 py-3 text-center font-medium text-indigo-400 border-b-2 border-indigo-500 transition duration-150";
                registerBtn.className = "w-1/2 py-3 text-center font-medium text-slate-400 hover:text-slate-200 transition duration-150";
            } else {
                registerForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
                registerBtn.className = "w-1/2 py-3 text-center font-medium text-emerald-400 border-b-2 border-emerald-500 transition duration-150";
                loginBtn.className = "w-1/2 py-3 text-center font-medium text-slate-400 hover:text-slate-200 transition duration-150";
            }
        }
    </script>
</body>
</html>