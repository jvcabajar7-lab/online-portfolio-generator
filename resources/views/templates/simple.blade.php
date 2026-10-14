@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-sm border border-gray-200">
    <div class="text-center border-b pb-6 mb-6">
        <h1 class="text-4xl font-serif font-bold text-gray-900">{{ $portfolio->full_name }}</h1>
        <p class="text-gray-600 mt-2">{{ $portfolio->email }} | {{ $portfolio->contact_number }} | {{ $portfolio->address }}</p>
    </div>
    <div class="space-y-6">
        <div><h3 class="font-bold uppercase tracking-wider text-sm text-gray-500 mb-2">About Me</h3><p>{{ $portfolio->about_me }}</p></div>
        <div><h3 class="font-bold uppercase tracking-wider text-sm text-gray-500 mb-2">Education</h3><p>{{ $portfolio->education }}</p></div>
        <div><h3 class="font-bold uppercase tracking-wider text-sm text-gray-500 mb-2">Skills</h3><p>{{ $portfolio->skills }}</p></div>
        <div><h3 class="font-bold uppercase tracking-wider text-sm text-gray-500 mb-2">Projects</h3><p>{{ $portfolio->projects }}</p></div>
        <div><h3 class="font-bold uppercase tracking-wider text-sm text-gray-500 mb-2">Work Experience</h3><p>{{ $portfolio->work_experience }}</p></div>
    </div>
    <div class="mt-8 text-center"><a href="{{ route('portfolios.manage') }}" class="text-indigo-600 underline text-sm">Back to Management</a></div>
</div>
@endsection