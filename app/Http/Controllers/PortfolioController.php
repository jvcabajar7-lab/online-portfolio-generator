<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Home Page
    public function home()
    {
        return view('home');
    }

    // Step 1: Form
    public function create()
    {
        return view('portfolios.create');
    }

    // Save to Cloud DB
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact_number' => 'nullable|string',
            'address' => 'nullable|string',
            'about_me' => 'nullable|string',
            'education' => 'nullable|string',
            'skills' => 'nullable|string',
            'projects' => 'nullable|string',
            'work_experience' => 'nullable|string',
            'social_links' => 'nullable|string',
        ]);

        $portfolio = Portfolio::create($validated);

        return redirect()->route('portfolios.template', $portfolio->id);
    }

    // Step 2: Choose Template
    public function chooseTemplate(Portfolio $portfolio)
    {
        return view('portfolios.select_template', compact('portfolio'));
    }

    // Step 3: Save Template Choice & Generate
    public function saveTemplate(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'template_choice' => 'required|in:simple,modern,creative',
        ]);

        $portfolio->update([
            'template_choice' => $request->template_choice,
        ]);

        return redirect()->route('portfolios.show', $portfolio->id);
    }

    // View Portfolio (3 Distinct Layouts)
    public function show(Portfolio $portfolio)
    {
        $template = $portfolio->template_choice;
        return view("templates.{$template}", compact('portfolio'));
    }

    // Manage Portfolios List
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('portfolios.manage', compact('portfolios'));
    }

    // Edit Page
    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact('portfolio'));
    }

    // Update Portfolio
    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact_number' => 'nullable|string',
            'address' => 'nullable|string',
            'about_me' => 'nullable|string',
            'education' => 'nullable|string',
            'skills' => 'nullable|string',
            'projects' => 'nullable|string',
            'work_experience' => 'nullable|string',
            'social_links' => 'nullable|string',
            'template_choice' => 'required|in:simple,modern,creative',
        ]);

        $portfolio->update($validated);

        return redirect()->route('portfolios.manage')->with('success', 'Portfolio updated!');
    }

    // Delete Portfolio
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('portfolios.manage')->with('success', 'Portfolio deleted!');
    }
}