<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyInquiry;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

class PropertyController extends Controller
{
    /**
     * Display a listing of the properties.
     */
    public function index(Request $request)
    {
        $query = Property::query();

        // Apply search filter
        if ($request->search) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', "%{$request->search}%")
                  ->orWhere('location', 'like', "%{$request->search}%")
                  ->orWhere('description', 'like', "%{$request->search}%");
            });
        }

        // Apply type filter
        if ($request->type) {
            $query->where('type', $request->type);
        }

        // Apply price range filter
        if ($request->minPrice) {
            $query->where('price', '>=', $request->minPrice);
        }
        if ($request->maxPrice) {
            $query->where('price', '<=', $request->maxPrice);
        }

        // Apply bedrooms filter
        if ($request->bedrooms) {
            $query->where('bedrooms', '>=', $request->bedrooms);
        }

        // Get paginated results
        $properties = $query->latest()->paginate(9)->withQueryString();
        
        return Inertia::render('Properties/Index', [
            'properties' => $properties,
            'filters' => $request->only(['search', 'type', 'minPrice', 'maxPrice', 'bedrooms']),
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
        
        return Inertia::render('Properties/Show', [
            'property' => $property
        ]);
    }

    /**
     * Handle contact form submission.
     */
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
            'property_id' => 'required|exists:properties,id'
        ]);

        // Store the inquiry in the database
        $inquiry = PropertyInquiry::create($validated);

        // Send notification email to admin
        // TODO: Implement email notification

        return back()->with('success', 'Thank you for your inquiry. We will contact you shortly!');
    }
}
