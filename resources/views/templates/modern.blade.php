@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto bg-indigo-50 p-6 rounded-2xl shadow">
    <div class="bg-indigo-600 text-white p-6 rounded-xl shadow mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-extrabold">{{ $portfolio->full_name }}</h1>
            <p class="text-indigo-200 text-sm mt-1">{{ $portfolio->email }} • {{ $portfolio->contact_number }}</p>
        </div>
        <span class="bg-indigo-500 px-3 py-1 rounded-full text-xs font-semibold">Modern Template</span>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-5 rounded-xl shadow-sm"><h3 class="font-bold text-indigo-600 mb-2">About Me</h3><p class="text-sm text-gray-600">{{ $portfolio->about_me }}</p></div>
        <div class="bg-white p-5 rounded-xl shadow-sm"><h3 class="font-bold text-indigo-600 mb-2">Skills</h3><p class="text-sm text-gray-600">{{ $portfolio->skills }}</p></div>
        <div class="bg-white p-5 rounded-xl shadow-sm"><h3 class="font-bold text-indigo-600 mb-2">Education</h3><p class="text-sm text-gray-600">{{ $portfolio->education }}</p></div>
        <div class="bg-white p-5 rounded-xl shadow-sm"><h3 class="font-bold text-indigo-600 mb-2">Projects</h3><p class="text-sm text-gray-600">{{ $portfolio->projects }}</p></div>
    </div>
    <div class="mt-6 bg-white p-5 rounded-xl shadow-sm"><h3 class="font-bold text-indigo-600 mb-2">Work Experience</h3><p class="text-sm text-gray-600">{{ $portfolio->work_experience }}</p></div>
</div>
@endsection