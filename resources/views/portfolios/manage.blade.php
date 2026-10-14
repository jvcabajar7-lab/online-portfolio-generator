@extends('layouts.app')
@section('content')
<div class="max-w-5xl mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Manage Portfolios</h2>
        <a href="{{ route('portfolios.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700">+ Add New</a>
    </div>
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 border-b border-slate-200 text-slate-600 text-sm">
                <tr>
                    <th class="p-4">Name</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Template</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                @forelse($portfolios as $item)
                <tr>
                    <td class="p-4 font-semibold">{{ $item->full_name }}</td>
                    <td class="p-4">{{ $item->email }}</td>
                    <td class="p-4 uppercase text-xs font-bold text-indigo-600">{{ $item->template_choice }}</td>
                    <td class="p-4 text-right space-x-3">
                        <a href="{{ route('portfolios.show', $item->id) }}" class="text-indigo-600 hover:underline">View</a>
                        <a href="{{ route('portfolios.edit', $item->id) }}" class="text-amber-600 hover:underline">Edit</a>
                        <form action="{{ route('portfolios.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this portfolio?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="p-6 text-center text-slate-500">No portfolios created yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection