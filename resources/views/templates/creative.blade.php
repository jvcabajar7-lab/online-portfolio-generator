@extends('layouts.app')
@section('content')
<div class="max-w-3xl mx-auto bg-slate-900 text-slate-100 p-8 rounded-3xl shadow-xl border border-slate-800">
    <div class="border-b border-slate-800 pb-6 mb-6">
        <span class="text-emerald-400 font-mono text-xs uppercase tracking-widest">Creative Portfolio</span>
        <h1 class="text-4xl font-black text-white mt-1">{{ $portfolio->full_name }}</h1>
        <p class="text-slate-400 text-sm mt-2">{{ $portfolio->email }} | {{ $portfolio->address }}</p>
    </div>
    <div class="space-y-6 font-mono text-sm">
        <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50"><strong class="text-emerald-400 block mb-1"># ABOUT_ME</strong><span class="text-slate-300">{{ $portfolio->about_me }}</span></div>
        <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50"><strong class="text-emerald-400 block mb-1"># SKILLS</strong><span class="text-slate-300">{{ $portfolio->skills }}</span></div>
        <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50"><strong class="text-emerald-400 block mb-1"># PROJECTS</strong><span class="text-slate-300">{{ $portfolio->projects }}</span></div>
        <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50"><strong class="text-emerald-400 block mb-1"># EXPERIENCE</strong><span class="text-slate-300">{{ $portfolio->work_experience }}</span></div>
    </div>
</div>
@endsection