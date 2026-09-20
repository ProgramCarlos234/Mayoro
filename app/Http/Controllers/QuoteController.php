<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index(): View
    {
        return view('quotes.index');
    }

    public function create(): View
    {
        return view('quotes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('quotes.index');
    }

    public function show(string $quote): View
    {
        return view('quotes.show', compact('quote'));
    }

    public function edit(string $quote): View
    {
        return view('quotes.edit', compact('quote'));
    }

    public function update(Request $request, string $quote): RedirectResponse
    {
        return redirect()->route('quotes.index');
    }

    public function destroy(string $quote): RedirectResponse
    {
        return redirect()->route('quotes.index');
    }
}
