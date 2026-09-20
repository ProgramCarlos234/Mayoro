<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SupplierController extends Controller
{
    public function index(): View
    {
        return view('suppliers.index');
    }

    public function create(): View
    {
        return view('suppliers.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('suppliers.index');
    }

    public function show(string $supplier): View
    {
        return view('suppliers.show', compact('supplier'));
    }

    public function edit(string $supplier): View
    {
        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, string $supplier): RedirectResponse
    {
        return redirect()->route('suppliers.index');
    }

    public function destroy(string $supplier): RedirectResponse
    {
        return redirect()->route('suppliers.index');
    }
}
