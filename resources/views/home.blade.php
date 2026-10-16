<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Portfolio Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col items-center justify-center p-6">
    <div class="max-w-2xl text-center space-y-6">
        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">
            Build Your Professional Portfolio in Minutes
        </h1>
        <p class="text-gray-400 text-lg">
            Choose a template, enter your details, and generate a polished live portfolio ready to share.
        </p>
        <a href="{{ route('portfolios.create') }}" 
           class="inline-block bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
            Create Your Portfolio Now
        </a>
    </div>
</body>
</html>