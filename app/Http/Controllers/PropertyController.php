<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PropertyController extends Controller
{
    /**
     * Display a listing of the properties.
     */
    public function index()
    {
        $properties = Property::all();
        
        return Inertia::render('Property/Index', [
            'properties' => $properties,
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }

    /**
     * Display the specified property.
     */
    public function show($id)
    {
        $property = Property::findOrFail($id);
        
        return Inertia::render('Property/Detail', [
            'property' => $property
        ]);
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // TODO: Implement contact form handling
        // Contoh: kirim email, simpan ke database, dll.

        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
