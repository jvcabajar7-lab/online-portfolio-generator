@extends('layouts.app')
@section('content')
<div class="max-w-3xl mx-auto text-center py-16 px-4">
    <h1 class="text-4xl font-extrabold text-slate-900 mb-4">Online Portfolio Template Generator</h1>
    <p class="text-lg text-slate-600 mb-8">Create your professional portfolio in minutes, save it to the cloud, and choose from 3 distinct templates.</p>
    <div class="space-x-4">
        <a href="{{ route('portfolios.create') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 shadow">Create Portfolio</a>
        <a href="{{ route('portfolios.manage') }}" class="bg-slate-200 text-slate-800 px-6 py-3 rounded-lg font-semibold hover:bg-slate-300">Manage Portfolios</a>
    </div>
</div>
@endsection