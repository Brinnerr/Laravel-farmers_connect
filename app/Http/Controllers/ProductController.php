<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   /*  public function store(StoreProductRequest $request): RedirectResponse
    {
        Product::create($request->validated());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    } */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|string|min:0',
            'quantity' => 'required|string|min:0',
            'description' => 'required|string|min:0',

            // Add other validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validatedData = $validator->validated();
        $product = Product::create($validatedData);

        // Your logic here
        return redirect()->route('products.index')
           /*  ->with('success', 'Product created successfully.') */;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): View
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        return view('products.edit', compact('products'));
    }

    

    public function update(Request $request, Product $product): RedirectResponse
{
    $validator = Validator($request->all(), [
        'name' => 'required|string|max:255',
        'price' => 'required|string|min:0',
        'quantity' => 'required|string|min:0',
        'description' => 'required|string|min:0',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Retrieve validated data
    $validatedData = $validator->validated();
    
    // Process the data (e.g., update the user)
     $product = Product::findOrFail($product->id);
     $product->update($validatedData);

    // Return a response or redirect
    return redirect()->route('products.index')
            /* ->with('success', 'Product updated successfully') */;
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index')
            /* ->with('success', 'Product deleted successfully') */;
    }


}
