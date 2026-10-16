@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-slate-200">
    <h2 class="text-2xl font-bold mb-6 text-slate-900">Enter Your Portfolio Information</h2>
    <form action="{{ route('portfolios.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
           
            <label class="block text-sm font-medium text-slate-700">Full Name</label>
             <input type="text" name="name" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5 text-black-900 bg-white" />
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Email</label>
             <input type="text" name="name" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5 text-black-900 bg-white" />
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Contact Number</label>
             <input type="text" name="name" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5 text-black-900 bg-white" />
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Address</label>
            <input type="text" name="name" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5 text-black-900 bg-white" />
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">About Me</label>
            <textarea name="about_me" rows="3" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Educational Background</label>
            <textarea name="education" rows="2" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Skills</label>
            <textarea name="skills" rows="2" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Projects</label>
            <textarea name="projects" rows="2" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Work Experience</label>
            <textarea name="work_experience" rows="2" class="w-full mt-1 border border-slate-300 rounded-lg p-2.5"></textarea>
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700">Save and Choose Template</button>
    </form>
</div>
@endsection