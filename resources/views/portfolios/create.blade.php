<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Portfolio</title>
    <!-- Tailwind CSS CDN Fallback -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-gray-900 min-h-screen p-6 flex justify-center items-center">
    <div class="bg-white p-8 rounded-lg shadow-xl max-w-2xl w-full my-8">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Portfolio Generator</h2>

        <form action="{{ route('portfolios.store', [], true) }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="full_name" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Contact Number</label>
                <input type="text" name="contact_number" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Address</label>
                <input type="text" name="address" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">About Me</label>
                <textarea name="about_me" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Education</label>
                <textarea name="education" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Skills</label>
                <textarea name="skills" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Projects</label>
                <textarea name="projects" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Work Experience</label>
                <textarea name="work_experience" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
            </div>

            <input type="hidden" name="template_choice" value="simple">

            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                Generate Portfolio
            </button>
        </form>
    </div>
</body>
</html>