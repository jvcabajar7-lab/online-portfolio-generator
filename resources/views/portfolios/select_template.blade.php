@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8 text-slate-900">Choose a Portfolio Template</h2>
    <form action="{{ route('portfolios.save_template', $portfolio->id) }}" method="POST">
        @csrf
        <div class="mb-6">
    <a href="{{ url('/portfolios/create') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white font-medium rounded-lg shadow transition duration-150">
        ← Back to Edit Form
    </a>
</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <label class="border-2 border-slate-200 p-6 rounded-xl cursor-pointer hover:border-indigo-600 bg-white block">
                <input type="radio" name="template_choice" value="simple" required class="mb-3">
                <h3 class="font-bold text-lg text-slate-800">Template 1: Simple</h3>
                <p class="text-sm text-slate-500 mt-2">Clean, minimalist, single-column traditional layout.</p>
            </label>
            <label class="border-2 border-slate-200 p-6 rounded-xl cursor-pointer hover:border-indigo-600 bg-white block">
                <input type="radio" name="template_choice" value="modern" required class="mb-3">
                <h3 class="font-bold text-lg text-slate-800">Template 2: Modern</h3>
                <p class="text-sm text-slate-500 mt-2">Vibrant card grid layout with sections and indigo elements[cite: 6].</p>
            </label>
            <label class="border-2 border-slate-200 p-6 rounded-xl cursor-pointer hover:border-indigo-600 bg-white block">
                <input type="radio" name="template_choice" value="creative" required class="mb-3">
                <h3 class="font-bold text-lg text-slate-800">Template 3: Creative</h3>
                <p class="text-sm text-slate-500 mt-2">Dark mode aesthetic with terminal-style structure[cite: 6].</p>
            </label>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 shadow">Generate Portfolio</button>
        </div>
    </form>
</div>
@endsection