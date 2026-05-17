<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::orderBy('name')->get();
        return view('packages.index', compact('packages'));
    }

    public function show(Package $package)
    {
        return view('packages.show', compact('package'));
    }

    public function create()
    {
        return view('packages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'nullable|numeric',
            'good_for' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        Package::create($data);
        return redirect()->route('packages.index')->with('success', 'Package created.');
    }

    public function edit(Package $package)
    {
        return view('packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'nullable|numeric',
            'good_for' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $package->update($data);
        return redirect()->route('packages.show', $package)->with('success', 'Package updated.');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Package deleted.');
    }
}
