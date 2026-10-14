@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-slate-200">
    <h2 class="text-2xl font-bold mb-6 text-slate-900">Edit Portfolio</h2>

    <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-slate-700">Full Name</label>
            <input type="text" name="full_name" value="{{ old('full_name', $portfolio->full_name) }}" required class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Email</label>
            <input type="email" name="email" value="{{ old('email', $portfolio->email) }}" required class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Contact Number</label>
            <input type="text" name="contact_number" value="{{ old('contact_number', $portfolio->contact_number) }}" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Address</label>
            <input type="text" name="address" value="{{ old('address', $portfolio->address) }}" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">About Me</label>
            <textarea name="about_me" rows="3" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">{{ old('about_me', $portfolio->about_me) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Educational Background</label>
            <textarea name="education" rows="2" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">{{ old('education', $portfolio->education) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Skills</label>
            <textarea name="skills" rows="2" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">{{ old('skills', $portfolio->skills) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Projects</label>
            <textarea name="projects" rows="2" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">{{ old('projects', $portfolio->projects) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Work Experience</label>
            <textarea name="work_experience" rows="2" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">{{ old('work_experience', $portfolio->work_experience) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Template Choice</label>
            <select name="template_choice" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5">
                <option value="simple" {{ $portfolio->template_choice === 'simple' ? 'selected' : '' }}>Template 1: Simple</option>
                <option value="modern" {{ $portfolio->template_choice === 'modern' ? 'selected' : '' }}>Template 2: Modern</option>
                <option value="creative" {{ $portfolio->template_choice === 'creative' ? 'selected' : '' }}>Template 3: Creative</option>
            </select>
        </div>

        <div class="flex items-center justify-end space-x-4 pt-4">
            <a href="{{ route('portfolios.manage') }}" class="text-slate-600 hover:underline text-sm">Cancel</a>
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-indigo-700">Update Portfolio</button>
        </div>
    </form>
</div>
@endsection