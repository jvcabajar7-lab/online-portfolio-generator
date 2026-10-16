
@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white text-slate-900 p-6 md:p-8 rounded-2xl shadow-lg">

    <div class="mb-6">
        <a href="{{ route('home') }}" class="text-indigo-600 hover:underline">
            &larr; Home
        </a>

        <h1 class="text-3xl font-bold mt-4">Create Your Portfolio</h1>
        <p class="text-slate-600 mt-2">
            Enter your information below. Your portfolio will be saved online.
        </p>
    </div>

    @if ($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg mb-6">
            <p class="font-semibold">Please check these errors:</p>
            <ul class="list-disc pl-5 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('portfolios.store', [], true) }}" method="POST" class="space-y-4">
    @csrf

    <!-- BASIC INFO -->
    <div>
        <label class="block font-medium text-gray-700">Full Name</label>
        <input type="text" name="full_name" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900" required>
    </div>

    <div>
        <label class="block font-medium text-gray-700">Email</label>
        <input type="email" name="email" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900" required>
    </div>

    <div>
        <label class="block font-medium text-gray-700">Contact Number</label>
        <input type="text" name="contact_number" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900">
    </div>

    <div>
        <label class="block font-medium text-gray-700">Address</label>
        <input type="text" name="address" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900">
    </div>

    <!-- TEXT AREAS FOR DETAILED SECTIONS -->
    <div>
        <label class="block font-medium text-gray-700">About Me</label>
        <textarea name="about_me" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
    </div>

    <div>
        <label class="block font-medium text-gray-700">Education</label>
        <textarea name="education" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
    </div>

    <div>
        <label class="block font-medium text-gray-700">Skills</label>
        <textarea name="skills" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
    </div>

    <div>
        <label class="block font-medium text-gray-700">Projects</label>
        <textarea name="projects" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
    </div>

    <div>
        <label class="block font-medium text-gray-700">Work Experience</label>
        <textarea name="work_experience" rows="3" class="w-full border border-gray-300 rounded-md p-2 bg-white text-gray-900"></textarea>
    </div>

    <!-- TEMPLATE SELECTION -->
    <input type="hidden" name="template_choice" value="simple">

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
        Generate Portfolio
    </button>
</form>
</div>
@endsection
