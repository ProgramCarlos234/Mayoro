<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products.index');
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('products.index');
    }

    public function show(string $product): View
    {
        return view('products.show', compact('product'));
    }

    public function edit(string $product): View
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, string $product): RedirectResponse
    {
        return redirect()->route('products.index');
    }

    public function destroy(string $product): RedirectResponse
    {
        return redirect()->route('products.index');
    }
}
