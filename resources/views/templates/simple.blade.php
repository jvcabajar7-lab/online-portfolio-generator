<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio->full_name ?? 'Portfolio' }}</title>
    <!-- Tailwind CSS CDN Fallback -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-gray-900 min-h-screen flex items-center justify-center p-6">
    <div class="bg-white rounded-lg shadow-xl p-8 max-w-2xl w-full mx-auto my-8">
        <!-- HEADER -->
        <div class="text-center border-b pb-6 mb-6">
            <h1 class="text-3xl font-bold text-gray-900">{{ $portfolio->full_name }}</h1>
            <p class="text-gray-600 text-sm mt-1">
                {{ $portfolio->email }} | {{ $portfolio->contact_number }} | {{ $portfolio->address }}
            </p>
        </div>

        <!-- SECTIONS -->
        <div class="space-y-6">
            <div>
                <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">ABOUT ME</h3>
                <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->about_me)) !!}</p>
            </div>

            <div>
                <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">EDUCATION</h3>
                <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->education)) !!}</p>
            </div>

            <div>
                <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">SKILLS</h3>
                <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->skills)) !!}</p>
            </div>

            <div>
                <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">PROJECTS</h3>
                <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->projects)) !!}</p>
            </div>

            <div>
                <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">WORK EXPERIENCE</h3>
                <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->work_experience)) !!}</p>
            </div>
        </div>

        <div class="text-center mt-8 pt-6 border-t">
            <a href="/portfolios/create" class="text-blue-600 hover:underline text-sm font-medium">Create Another Portfolio</a>
        </div>
    </div>
</body>
</html>