<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Portfolio Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">
    <nav class="bg-indigo-600 text-white shadow-md p-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="font-bold text-xl">PortfolioGen</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('portfolios.create') }}" class="hover:underline">Create Portfolio</a>
                <a href="{{ route('portfolios.manage') }}" class="hover:underline">Manage Portfolios</a>
            </div>
        </div>
    </nav>
    <main class="py-8">
        @yield('content')
    </main>
</body>
</html>