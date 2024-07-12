<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }

    public function editCategory(Product $producto)
    {
        return view('admin.products.categories', [
            'productCategoriesIDS' => $producto->categories->pluck('id')->toArray(),
            'product' => $producto,
            'categories' => Category::all()
        ])->render();
    }

    public function updateCategory(Request $request, Product $producto)
    {
        $producto->categories()->sync($request->categories);

        return redirect()->route('productos.index');
    }

    public function updateImages(Request $request, Product $producto)
    {
        if ($request->image2) {
            $fileName = time() . $request->image2->getClientOriginalName();
            $file = $request->file('image2');
            $file->move(public_path('images'), $fileName);
            $producto->update(['image2' => $fileName]);
        }

        if ($request->image3) {
            $fileName = time() . $request->image3->getClientOriginalName();
            $file = $request->file('image3');
            $file->move(public_path('images'), $fileName);
            $producto->update(['image3' => $fileName]);
        }

        if ($request->image4) {
            $fileName = time() . $request->image4->getClientOriginalName();
            $file = $request->file('image4');
            $file->move(public_path('images'), $fileName);
            $producto->update(['image4' => $fileName]);
        }

        if ($request->image5) {
            $fileName = time() . $request->image5->getClientOriginalName();
            $file = $request->file('image5');
            $file->move(public_path('images'), $fileName);
            $producto->update(['image5' => $fileName]);
        }
        
        return redirect()->route('productos.index');
    }

    public function store(Request $request)
    {
        $fileName = time() . $request->image?->getClientOriginalName();

        $params = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('images'), $fileName);
        }

        $params['image'] = $fileName;

        Product::create($params);

        return redirect()->route('productos.index');
    }

    public function update(Request $request, Product $producto)
    {
        $fileName = time() . $request->image?->getClientOriginalName();
        $params = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('images'), $fileName);
            $params['image'] = $fileName;
        }

        $producto->update($params);

        return redirect()->route('productos.index');
    }

    public function destroy(Product $producto)
    {
        $product->delete();

        return redirect()->route('productos.index');
    }
}
