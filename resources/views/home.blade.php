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
            Online Portfolio Generator
        </h1>
        <p class="text-gray-400 text-lg">
            Create and share your professional portfolio in minutes.
        </p>
        <a href="{{ route('portfolios.create') }}">Create Your Portfolio</a>
    </div>
</body>
</html>