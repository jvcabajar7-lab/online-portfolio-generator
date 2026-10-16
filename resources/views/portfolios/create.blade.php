
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

    <form action="{{ route('portfolios.store') }}"
          method="POST"
          class="space-y-5">
        @csrf

        <div>
            <label for="full_name" class="block font-medium mb-1">
                Full Name *
            </label>
            <input id="full_name" type="text" name="full_name"
                   value="{{ old('full_name') }}"
                   required maxlength="255"
                   class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500"
                   placeholder="Enter your full name">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label for="email" class="block font-medium mb-1">
                    Email *
                </label>
                <input id="email" type="email" name="email"
                       value="{{ old('email') }}" required
                       class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3"
                       placeholder="you@example.com">
            </div>

            <div>
                <label for="contact_number" class="block font-medium mb-1">
                    Contact Number
                </label>
                <input id="contact_number" type="text"
                       name="contact_number"
                       value="{{ old('contact_number') }}"
                       class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3"
                       placeholder="Your contact number">
            </div>
        </div>

        <div>
            <label for="address" class="block font-medium mb-1">Address</label>
            <input id="address" type="text" name="address"
                   value="{{ old('address') }}"
                   class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3"
                   placeholder="City or address">
        </div>

        <div>
            <label for="about_me" class="block font-medium mb-1">About Me</label>
            <textarea id="about_me" name="about_me" rows="4"
                      class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3"
                      placeholder="Tell visitors about yourself">{{ old('about_me') }}</textarea>
        </div>

        <div>
            <label for="education" class="block font-medium mb-1">
                Educational Background
            </label>
            <textarea id="education" name="education" rows="3"
                      class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3"
                      placeholder="School, course, and year">{{ old('education') }}</textarea>
        </div>

        <div>
            <label for="skills" class="block font-medium mb-1">Skills</label>
            <textarea id="skills" name="skills" rows="3"
                      class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3"
                      placeholder="List your skills">{{ old('skills') }}</textarea>
        </div>

        <div>
            <label for="projects" class="block font-medium mb-1">Projects</label>
            <textarea id="projects" name="projects" rows="3"
                      class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3"
                      placeholder="Describe your projects">{{ old('projects') }}</textarea>
        </div>

        <div>
            <label for="work_experience" class="block font-medium mb-1">
                Work Experience
            </label>
            <textarea id="work_experience" name="work_experience" rows="3"
                      class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3"
                      placeholder="Describe your work or internship experience">{{ old('work_experience') }}</textarea>
        </div>

        <div>
            <label for="social_links" class="block font-medium mb-1">
                Social Media / Website Links
            </label>
            <textarea id="social_links" name="social_links" rows="2"
                      class="w-full bg-white text-slate-900 border border-slate-300 rounded-lg p-3"
                      placeholder="LinkedIn, GitHub, personal website">{{ old('social_links') }}</textarea>
        </div>

        <p class="text-sm text-slate-500">
            * Required fields
        </p>

        <div class="flex flex-col sm:flex-row gap-3 pt-2">
            <button type="submit"
                    class="flex-1 bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700">
                Save and Choose Template
            </button>

            <a href="{{ route('portfolios.manage') }}"
               class="text-center border border-slate-300 text-slate-700 font-medium py-3 px-5 rounded-lg hover:bg-slate-50">
                Manage Portfolios
            </a>
        </div>
    </form>
</div>
@endsection
